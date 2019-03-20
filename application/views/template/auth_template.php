<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title><?= $title ?></title>
	    <meta content="<?= $title ?>" name="description" />
	    <meta content="<?= $title ?>" name="@iqbalrevvin Development" />
	    <meta http-equiv="X-UA-Compatible"  content="IE=edge" />
	    <meta property="og:url"             content="" />
	    <meta property="og:type"            content="website"/>
	    <meta property="og:title"           content="Fininsys" />
	    <meta property="og:description"     content="Kauangan & Sistem Informasi Sekolah" />
	    <meta http-equiv="Content-Type"     content="text/html; charset=utf-8" />
	    <meta http-equiv="X-UA-Compatible"  content="IE=edge" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
	    <meta name="apple-mobile-web-app-capable" content="yes" />
	    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	    <meta name="theme-color" content="##00FFFF">
	    <meta content='id' name='language'/>

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="<?= base_url('assets/css/vendors.bundle.css') ?>" rel="stylesheet" type="text/css" />
    	<link href="<?= base_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/plugins/iCheck/square/blue.css') ?>">
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="Assets/image/logo.png" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m--skin- m-header--fixed  m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login" 
			style="background-image: url(<?= base_url('assets/image/bg/bg-3.jpg') ?>);">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<a href="#">
										<img src="<?= base_url('assets/image/big_logo.png') ?>" width="120" >
									</a>
								</div>
								<div class="m-login__signin">
									<div class="m-login__head">
										<h3 class="m-login__title">
											Masuk Ke <?= $title ?>
										</h3>
									</div>
									
									<?= $page ?>
								</div>
								<div class="m-login__signup">
									<div class="m-login__head">
										<h3 class="m-login__title">
											Registrasi Akun
										</h3>
										<div class="m-login__desc">
											Daftarkan akun anda melalui pihak administrator 
											/ USI (Unit Sistem Informasi) Sekolah anda
										</div>
									</div>
									<form class="m-login__form m-form" action="">
										<div class="m-login__form-action">
											<button id="m_login_signup_cancel" class="btn m-btn--pill m-btn--air btn-outline-success">
												Kembali
											</button>
										</div>
									</form>
								</div>
								<div class="m-login__forget-password">
									<div class="m-login__head">
										<h3 class="m-login__title">
											Lupa Kata Sandi ?
										</h3>
										<div class="m-login__desc">
											Silahkan hubungi pihak administrator / USI (Unit Sistem Informasi) untuk mereset akun anda
										</div>
									</div>
									<form class="m-login__form m-form">
										<!--<div class="form-group m-form__group">
											<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
										</div>-->
										<div class="m-login__form-action">
											<button id="m_login_forget_password_cancel" class="btn m-btn--pill m-btn--air btn-outline-success">
												Kembali
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!--<div class="m-stack__item m-stack__item--center">
							<div class="m-login__account">
								<span class="m-login__account-msg">
									Don't have an account yet ?
								</span>
								&nbsp;&nbsp;
								<a href="javascript:;" id="m_login_signup" class="m-link m--font-info m-login__account-link">
									Sign Up
								</a>
							</div>
						</div>-->
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--left m-grid--hor m-grid__item--order-tablet-and-mobile-1 m-login__content m-grid-item--center" style="background-image: url(<?= base_url('assets/image/bg/studentschool2.png') ?>)">
					<div class="m-grid__item m-grid__item--middle">
						<!--<h5 class="m-login__welcome">
							Financial & <br>Information System
						</h5>-->
						<h5 class="m-login__welcome">
							<?= $settings->judul ?>
						</h5>
						<p class="m-login__msg">
							<?= $settings->instansi ?><br>
							<?= $settings->judul ?> © <?= date('Y'); ?> All Rights Reserved<br>
							- <small>Versi <?= $settings->versi ?></small> -

						</p>
					</div>
				</div>
			</div>
		</div>
		<!--begin::Global Theme Bundle -->
		<script src="<?= base_url('assets/js/vendors.bundle.js') ?>" type="text/javascript"></script>
		<script src="<?= base_url('assets/js/scripts.bundle.js') ?>" type="text/javascript"></script>

		<!--JS Plugins-->
		<script src="<?php echo base_url('assets/js-adminlte/plugins/iCheck/icheck.min.js') ?>"></script>
		<!--begin::Page Scripts -->
		<script src="<?= base_url('assets/js/pages/login/login.js') ?>" type="text/javascript"></script>
		<script>
		    site         = '<?php echo site_url(); ?>';
		    ur_class     = '<?php echo $this->uri->segment(1); ?>';
		    url_function = '<?php echo $this->uri->segment(2); ?>';
		</script>
		<?php echo isset($scriptView) ? $scriptView : ''; ?>
	</body>
	<!-- end::Body -->
</html>
