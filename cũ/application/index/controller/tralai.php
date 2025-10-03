<?php
namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Db;

class PayInterest extends Command
{
    protected function configure()
    {
        $this->setName('payinterest')->setDescription('Trả lãi hằng ngày cho khoản đầu tư');
    }

    protected function execute(Input $input, Output $output)
    {
        $now = date('Y-m-d H:i:s');
        $investments = Db::name('investments')
            ->where('status', 1)
            ->where('next_interest_at', '<=', $now)
            ->limit(1000)
            ->select();

        $count = 0;
        foreach ($investments as $inv) {
            Db::startTrans();
            try {
                $inv = Db::name('investments')->where('id', $inv['id'])->lock(true)->find();
                if (!$inv || intval($inv['status']) !== 1) { Db::rollback(); continue; }

                $user = Db::name('userinfo')->where('uid', $inv['user_id'])->lock(true)->find();
                if (!$user) { throw new \Exception('User không tồn tại'); }

                $interest = round(floatval($inv['amount']) * floatval($inv['daily_rate_snapshot']) / 100, 2);

                Db::name('userinfo')->where('uid', $inv['user_id'])->setInc('usermoney', $interest);
                Db::name('interest_logs')->insert([
                    'investment_id'  => $inv['id'],
                    'user_id'        => $inv['user_id'],
                    'interest_amount'=> $interest,
                    'paid_for_date'  => date('Y-m-d'),
                    'created_at'     => date('Y-m-d H:i:s'),
                ]);

                $next = date('Y-m-d H:i:s', strtotime($inv['next_interest_at'].' +1 day'));
                $upd = [
                    'total_interest_paid' => Db::raw('total_interest_paid + '.$interest),
                    'next_interest_at'    => $next,
                    'updated_at'          => date('Y-m-d H:i:s'),
                ];

                if (time() >= strtotime($inv['end_at'])) {
                    Db::name('userinfo')->where('uid', $inv['user_id'])->setInc('usermoney', $inv['amount']);
                    $upd['status'] = 2;
                }

                Db::name('investments')->where('id', $inv['id'])->update($upd);

                Db::commit();
                $count++;
            } catch (\Throwable $e) {
                Db::rollback();
            }
        }

        $output->writeln("Done. Processed: {$count}");
    }
}
