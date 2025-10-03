<?php
use think\Route;

return [
    '__pattern__' => [
        'name' => '\w+',
    ],

    // route demo có sẵn
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    // Hiển thị form đổi mật khẩu thanh toán (load view)
    'index/user/cpaypassword.html' => [
        'index/user/showCpaypassword',
        ['method' => 'get']
    ],

    // API xử lý đổi mật khẩu thanh toán (POST JSON)
    'index/user/cpaypassword' => [
        'index/user/cpaypassword',
        ['method' => 'post']
    ],
];
