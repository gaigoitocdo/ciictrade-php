<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/www/wwwroot/isetradingstar.com/application/index/view/login/register.html";i:1747593950;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0028)/login -->
<html lang="en" mode="md" class="plt-iphone plt-ios plt-mobile plt-mobileweb md hydrated">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		 <script src="/static/index/js/jquery-1.9.1.min.js"></script>
		<title>Đăng ký</title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="color-scheme" content="light dark">
		<meta name="viewport"
			content="viewport-fit=cover,width=device-width,height=device-height,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="msapplication-tap-highlight" content="no">
		<style>
			html.plt-mobile ion-app {
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none
			}

			html.plt-mobile ion-app [contenteditable] {
				-webkit-user-select: text;
				-moz-user-select: text;
				-ms-user-select: text;
				user-select: text
			}

			ion-app.force-statusbar-padding {
				--ion-safe-area-top: 20px
			}
		</style>
		<style>
			.sc-ion-input-md-h {
				--placeholder-color: initial;
				--placeholder-font-style: initial;
				--placeholder-font-weight: initial;
				--placeholder-opacity: .5;
				--padding-top: 0;
				--padding-end: 0;
				--padding-bottom: 0;
				--padding-start: 0;
				--background: transparent;
				--color: initial;
				display: -ms-flexbox;
				display: flex;
				position: relative;
				-ms-flex: 1;
				flex: 1;
				-ms-flex-align: center;
				align-items: center;
				width: 100%;
				padding: 0 !important;
				background: var(--background);
				color: var(--color);
				font-family: var(--ion-font-family, inherit);
				z-index: 2
			}

			ion-item.sc-ion-input-md-h:not(.item-label),
			ion-item:not(.item-label) .sc-ion-input-md-h {
				--padding-start: 0
			}

			.ion-color.sc-ion-input-md-h {
				color: var(--ion-color-base)
			}

			.native-input.sc-ion-input-md {
				border-radius: var(--border-radius);
				padding-left: var(--padding-start);
				padding-right: var(--padding-end);
				padding-top: var(--padding-top);
				padding-bottom: var(--padding-bottom);
				font-family: inherit;
				font-size: inherit;
				font-style: inherit;
				font-weight: inherit;
				letter-spacing: inherit;
				text-decoration: inherit;
				text-indent: inherit;
				text-overflow: inherit;
				text-transform: inherit;
				text-align: inherit;
				white-space: inherit;
				color: inherit;
				display: inline-block;
				-ms-flex: 1;
				flex: 1;
				width: 100%;
				max-width: 100%;
				max-height: 100%;
				border: 0;
				outline: none;
				background: transparent;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none
			}

			@supports ((-webkit-margin-start: 0) or (margin-inline-start: 0)) or (-webkit-margin-start: 0) {
				.native-input.sc-ion-input-md {
					padding-left: unset;
					padding-right: unset;
					-webkit-padding-start: var(--padding-start);
					padding-inline-start: var(--padding-start);
					-webkit-padding-end: var(--padding-end);
					padding-inline-end: var(--padding-end)
				}
			}

			.native-input.sc-ion-input-md::-webkit-input-placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md::-moz-placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md:-ms-input-placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md::-ms-input-placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md::placeholder {
				color: var(--placeholder-color);
				font-family: inherit;
				font-style: var(--placeholder-font-style);
				font-weight: var(--placeholder-font-weight);
				opacity: var(--placeholder-opacity)
			}

			.native-input.sc-ion-input-md:-webkit-autofill {
				background-color: transparent
			}

			.native-input.sc-ion-input-md:invalid {
				-webkit-box-shadow: none;
				box-shadow: none
			}

			.native-input.sc-ion-input-md::-ms-clear {
				display: none
			}

			.native-input[disabled].sc-ion-input-md {
				opacity: 0.4
			}

			.cloned-input.sc-ion-input-md {
				left: 0;
				top: 0;
				position: absolute;
				pointer-events: none
			}

			[dir=rtl].sc-ion-input-md .cloned-input.sc-ion-input-md,
			[dir=rtl].sc-ion-input-md-h .cloned-input.sc-ion-input-md,
			[dir=rtl] .sc-ion-input-md-h .cloned-input.sc-ion-input-md {
				left: unset;
				right: unset;
				right: 0
			}

			.input-clear-icon.sc-ion-input-md {
				margin-left: 0;
				margin-right: 0;
				margin-top: 0;
				margin-bottom: 0;
				padding-left: 0;
				padding-right: 0;
				padding-top: 0;
				padding-bottom: 0;
				background-position: center;
				border: 0;
				outline: none;
				background-color: transparent;
				background-repeat: no-repeat;
				visibility: hidden;
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none
			}

			.input-clear-icon.sc-ion-input-md:focus {
				opacity: 0.5
			}

			.has-value.sc-ion-input-md-h .input-clear-icon.sc-ion-input-md {
				visibility: visible
			}

			.has-focus.sc-ion-input-md-h {
				pointer-events: none
			}

			.has-focus.sc-ion-input-md-h input.sc-ion-input-md,
			.has-focus.sc-ion-input-md-h a.sc-ion-input-md,
			.has-focus.sc-ion-input-md-h button.sc-ion-input-md {
				pointer-events: auto
			}

			.sc-ion-input-md-h {
				--padding-top: 10px;
				--padding-end: 0;
				--padding-bottom: 10px;
				--padding-start: 8px;
				font-size: inherit
			}

			.item-label-stacked.sc-ion-input-md-h,
			.item-label-stacked .sc-ion-input-md-h,
			.item-label-floating.sc-ion-input-md-h,
			.item-label-floating .sc-ion-input-md-h {
				--padding-top: 8px;
				--padding-bottom: 8px;
				--padding-start: 0
			}

			.input-clear-icon.sc-ion-input-md {
				background-image: url("data:image/svg+xml;charset=utf-8,<svg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20512%20512'><polygon%20fill='var(--ion-color-step-600,%20%23666666)'%20points='405,136.798%20375.202,107%20256,226.202%20136.798,107%20107,136.798%20226.202,256%20107,375.202%20136.798,405%20256,285.798%20375.202,405%20405,375.202%20285.798,256'/></svg>");
				width: 30px;
				height: 30px;
				background-size: 22px
			}
		</style>
		<link href="/static/index/login/text-security-disc.css" rel="stylesheet" type="text/css">
		<style>
			* {
				margin: 0;
				padding: 0;
				outline: none;
				text-decoration: none;
			}

			[v-cloak] {
				display: inline-block !important
			}

			.loading {
				position: absolute;
				left: 50%;
				top: 50%;
				margin-left: -50px;
				margin-top: -50px;
				width: 100px;
				height: 100px;
			}

			html {
				background: #141414;
			}

			input[type=number] {
				appearance: textfield !important;
			}

			.input-password input {
				font-family: text-security-disc !important;
				-webkit-text-security: disc !important;
			}

			.input-password input::placeholder {
				font-family: var(--ion-font-family) !important;
				-webkit-text-security: none !important;
			}
		</style>
	
		<link href="/static/index/login/app.9280c1c6.css" rel="preload" as="style">
		<link href="/static/index/login/chunk-vendors.4f44ff3e.css" rel="preload" as="style">
		<link href="/static/index/login/app.f8729b16.js" rel="preload" as="script">
		<link href="/static/index/login/chunk-vendors.6283f2b7.js" rel="preload" as="script">
		<link href="/static/index/login/chunk-vendors.4f44ff3e.css" rel="stylesheet">
		<link href="/static/index/login/app.9280c1c6.css" rel="stylesheet">
				<style>body {font-family:Arial;width:100%;max-width: 1600px;margin: 0 auto;position:relative}.box #nav[data-v-12171d70]{width:100%!important;max-width: 1600px!important}.box[data-v-28ad7794]{max-width: 1600px!important;transform: translateX(-50%);left:50%!important}*{max-width:100%}*::-webkit-scrollbar{display:none}</style>
	</head>
	<body id="body">
		<div id="app" data-v-app="">
			<ion-app class="md ion-page hydrated">
				<ion-router-outlet id="ion-router-outlet" class="hydrated">
					<div class="ion-page" data-v-ebea41ae="">
						<ion-content class="md hydrated" data-v-ebea41ae=""
							style="--offset-top:0px; --offset-bottom:0px;">
							<div class="login" data-v-ebea41ae="">
								<div class="login-box" data-v-ebea41ae="">
									<div class="top" data-v-ebea41ae=""><span class="left" data-v-ebea41ae=""><img
												src="/static/index/login/logo.a4aa245c.png" alt=""
												data-v-ebea41ae=""></span><span class="right" data-v-ebea41ae="">
											<div class="qut" data-v-ebea41ae="" style="    width: 77px;">
												<div class="no-box" data-v-ebea41ae="">
													<div class="qut">
														<div
															style="font-size: 12px; color: rgb(228, 227, 227); vertical-align: middle;">
															<span style="display: none;"><img
																	src="/static/index/login/cny.350cf10d.svg" alt=""
																	style="width: 30px; margin-bottom: -10px;"></span><span
																style="line-height: 10px;display: none;"> 中文(简体)</span><span
																style="font-size: 10px; line-height: 12px;display: none;">
																<ion-icon role="img" class="md hydrated">
																    <div class="icon-inner" style="    height: 46%;
    width: 22%;
    float: right;
    fill: currentColor;
    color: white;"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon s-ion-icon" viewBox="0 0 512 512"><title>Caret Forward</title><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"></path></svg></div>
																</ion-icon>
															</span>
															<div>
    <div class="langpackage" style="color:#ffffff;position:fixed;top:15px;right:15px">
        <p id="langtarger"><?php echo lang('yuyan'); ?> ◢ </p>
    <!--    <ul class="langselect" style="display: none;border: 1px solid #424242;-->
    <!--padding: 5px;-->
    <!--background: #262626;">-->
    <!--        <li style="list-style: none;" data-val="zh-cn"><?php echo lang('cn'); ?></li>-->
    <!--        <li style="list-style: none;" data-val="zh-en"><?php echo lang('en'); ?></li>-->
    <!--        <li style="list-style: none;" data-val="zh-yl"><?php echo lang('yl'); ?></li>-->
            <!--li data-val="tw">香港</li-->
    <!--    </ul>-->
    </div>
</div>
															</div>
													</div>
													<div style="display: none;"></div>
												</div>
											</div>
											<p class="title" data-v-ebea41ae=""><?php echo lang('zcdl'); ?></p>
											<p class="description" data-v-ebea41ae=""><?php echo lang('zyjrwhpt'); ?></p>
											
										</span></div>
										<form id="formid">
									<div class="from" style="    text-align: left;">
										<div class="lable" data-v-ebea41ae=""><?php echo lang('username'); ?></div>
										<div class="input" data-v-ebea41ae="">
											<ion-input modelvalue=""
												class="sc-ion-input-md-h sc-ion-input-md-s md hydrated"
												data-v-ebea41ae=""><input class="native-input sc-ion-input-md"
													aria-labelledby="ion-input-0-lbl" autocapitalize="off"
													autocomplete="off" autocorrect="off" maxlength="11"
													name="nickname" placeholder="<?php echo lang('username'); ?>" required=""
													spellcheck="false" type="text"><button aria-label="reset"
													type="button" class="input-clear-icon sc-ion-input-md"></button>
											</ion-input>
										</div>
										<div class="lable" data-v-ebea41ae=""><?php echo lang('sjhm'); ?></div>
										<div class="input" data-v-ebea41ae="">
											<ion-input modelvalue=""
												class="sc-ion-input-md-h sc-ion-input-md-s md hydrated"
												data-v-ebea41ae=""><input class="native-input sc-ion-input-md"
													aria-labelledby="ion-input-0-lbl" autocapitalize="off"
													autocomplete="off" autocorrect="off" maxlength="11"
													name="username" placeholder="<?php echo lang('sjhm'); ?>" required=""
													spellcheck="false" type="text"><button aria-label="reset"
													type="button" class="input-clear-icon sc-ion-input-md"></button>
											</ion-input>
										</div>
										<div class="lable" data-v-ebea41ae=""><?php echo lang('password'); ?></div>
										<div class="input" data-v-ebea41ae="">
											<ion-input modelvalue=""
												class="input-password sc-ion-input-md-h sc-ion-input-md-s md hydrated"
												data-v-ebea41ae=""><input class="native-input sc-ion-input-md"
													aria-labelledby="ion-input-1-lbl" autocapitalize="off"
													autocomplete="off" autocorrect="off" minlength="6" maxlength="32"
													name="upwd" placeholder="<?php echo lang('password'); ?>" required=""
													spellcheck="false" type="text"><button aria-label="reset"
													type="button" class="input-clear-icon sc-ion-input-md"></button>
											</ion-input>
										</div>
										<div class="lable" data-v-ebea41ae=""><?php echo lang('qrmm'); ?></div>
										<div class="input" data-v-ebea41ae="">
											<ion-input modelvalue=""
												class="input-password sc-ion-input-md-h sc-ion-input-md-s md hydrated"
												data-v-ebea41ae=""><input class="native-input sc-ion-input-md"
													aria-labelledby="ion-input-1-lbl" autocapitalize="off"
													autocomplete="off" autocorrect="off" minlength="6" maxlength="32"
													name="upwd2" placeholder="<?php echo lang('mmcd'); ?>" required=""
													spellcheck="false" type="text"><button aria-label="reset"
													type="button" class="input-clear-icon sc-ion-input-md"></button>
											</ion-input>
										</div>
										<div class="lable" data-v-ebea41ae=""><?php echo lang('zfmm'); ?></div>
										<div class="input" data-v-ebea41ae="">
											<ion-input modelvalue=""
												class="input-password sc-ion-input-md-h sc-ion-input-md-s md hydrated"
												data-v-ebea41ae=""><input class="native-input sc-ion-input-md"
													aria-labelledby="ion-input-1-lbl" autocapitalize="off"
													autocomplete="off" autocorrect="off" minlength="6" maxlength="32"
													name="paypwd" placeholder="<?php echo lang('srzfmm'); ?>" required=""
													spellcheck="false" type="text"><button aria-label="reset"
													type="button" class="input-clear-icon sc-ion-input-md"></button>
											</ion-input>
										</div>
										<input type="hidden" placeholder="<?php echo lang('tjm'); ?>" name="oid" required=""
                                       class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required"
                                       style="" value = "650">
									</div>
									<button style="position: relative;top: 35px;background-color: #efc23e;color: black;padding: 10px 50px;width:100%;border-radius: 6px;" onclick="return checkform(this.form);" class="md button button-block button-solid ion-activatable ion-focusable hydrated" data-v-ebea41ae="" expand="block" style="margin-top: 35px;"><?php echo lang('zcdl'); ?></button>
									</form>
								</div>
								<div data-v-ebea41ae="" style="text-align:center;color:#fff;margin-top:50px;font-size:14px"><span data-v-ebea41ae=""
													style="margin-right: 5px;"></span><span class="a"
													data-v-ebea41ae=""><a href="<?php echo url('login/login'); ?>"><?php echo lang('yyzhdl'); ?></a></span></div>
							</div>
						</ion-content>
					</div>
				</ion-router-outlet>
			</ion-app>
		</div>
		<style>
		    .xzmb:active{
		        background: #444;
		    }
		</style>
		<div class="langselectx" style="height:100%;width:100%;position: fixed;top: 0;left:0;background: rgb(158 158 158 / 31%);display:none">
		    
		</div>
		<div class="langselect">
		    
		
		<ul class="langselect" style="display: none;border: 1px solid #424242;padding: 5px;background: #141414;position: fixed;top: 10px;left: 50%;  transform:translateX(-50%);width: 80%;color: white;max-width:450px">
            <!--                                                                        <li style="list-style: none;padding: 16px;" data-val="zh-cn"><?php echo lang('cn'); ?></li>-->
            <!--                                                                        <li style="list-style: none;padding: 16px;" data-val="zh-en"><?php echo lang('en'); ?></li>-->
            <!--                                                                        <li style="list-style: none;padding: 16px;" data-val="zh-yl"><?php echo lang('yl'); ?></li>-->
            <!--                                                                        <li style="list-style: none;padding: 16px;" data-val="zh-ry"><?php echo lang('ry'); ?></li>-->
            <!--<li style="list-style: none;padding: 16px;" data-val="zh-ty"><?php echo lang('ty'); ?></li>-->
           
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('en'); ?></span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('yl'); ?></span><input type="radio" name="yuyan" value="zh-yl"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('ry'); ?></span><input type="radio" name="yuyan" value="zh-ry"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('ty'); ?></span><input type="radio" name="yuyan" value="zh-ty"></label></li>
           <!-- <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Français</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Português</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Italiano</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Deutsch</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">Indonesia</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">한국어</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%">españa</span><input type="radio" name="yuyan" value="zh-en"></label></li>
            <li class="xzmb input-radio" style="list-style: none;padding: 10px 16px;border-bottom: 1px solid #404040;"><label><span style="display:inline-block;width:90%"><?php echo lang('cn'); ?></span><input type="radio" name="yuyan" value="zh-cn"></label></li>-->
                                                                                     <li id="langselect5" style="list-style: none;padding:0 16px;margin-top: 20px;"><button style="padding: 10px;width: 100%;background: #ebcc7f;border-radius: 5px;" type="submit"><?php echo lang('qiehuan'); ?></button></li>
                                                                                     <li id="quxiao" style="list-style: none;padding: 16px;"><button style="padding: 10px;width: 100%;background: #222428;border-radius: 5px;color: white;" type="submit"><?php echo lang('quxiao'); ?></button></li>
                                                                                    </ul>
                                                                                    </div>
	 <!-- 弹框插件 -->
    <script src="/static/layer/layer.js"></script>
    <!-- 公共函数 -->
    <script src="/static/public/js/function.js"></script>
    <script src="/static/public/js/base64.js"></script>
    <script type="text/javascript">
        var Base64 = new Base64();
    </script>
		<script>
   function checkform(form) {
                    /*var reg = new RegExp("^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$");*/
                    var reg2 = new RegExp("^[a-zA-Z0-9_]{4,12}$");
                    var nickname = form.nickname.value;
                    var username = form.username.value;
                    var upwd = form.upwd.value;
                    var upwd2 = form.upwd2.value;
                    var oid = 650;

                    /*if (!reg.test(nickname)) {
                        layer.msg("<?php echo lang('ffyhm'); ?>");
                        return false;
                    }*/

                    
                    if (!username) {
                        layer.msg('<?php echo lang('qsryhm'); ?>');
                        return false;
                    }

                    if (!reg2.test(username)) {
                        layer.msg('<?php echo lang('srzqsjh'); ?>');
                        return false;
                    }

                    if (!upwd) {
                        layer.msg('<?php echo lang('srdlmm'); ?>');
                        return false;
                    }

                    if (!upwd2) {
                        layer.msg('<?php echo lang('zcsrmm'); ?>');
                        return false;
                    }

                    if (upwd.length < 8 || upwd2.length < 6) {
                        layer.msg('<?php echo lang('mmcd'); ?>');
                        return false;
                    }

                    if (upwd != upwd2) {
                        layer.msg('<?php echo lang('mmbt'); ?>');
                        return false;
                    }

                    var data = $('#formid').serialize();
                    var formurl = "<?php echo Url('login/register'); ?>";
                    var locurl = "<?php echo Url('index/index'); ?>";

                    WPpost(formurl, data, locurl);
                    return false;
                }

    $('#quxiao').click(function () {
        $('.langselect').stop().slideUp();
        $('.langselectx').hide();
    })
    $('#langtarger').click(function (e) {
        e.stopPropagation()
        $('.langselect').stop().slideDown();
        $('.langselectx').show();
    })
    $('#langselect5').click(function () {
        //var data = {'lang': $(this).attr('data-val')};
        var data = $("input[name='yuyan']:checked").val();
        //alert(data);
        var formurl = "<?php echo Url('login/langSetting'); ?>"
        var data = data
        $.post(formurl, {'lang':data}, function (data) {
            if (data.type == 1) {
                // layer.msg(data.data, {icon: 1,time: 1000},function(){
                // });
                //alert(data.msg)
                window.location.reload()
            } else {
                //alert(data.msg)
                // layer.msg(data.data, { icon: 2 });
            }
        });
    })
</script>
		<script src="/static/index/login/app.f8729b16.js"></script>
	</body>
</html>
