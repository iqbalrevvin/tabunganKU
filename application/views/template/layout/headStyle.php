<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title><?= $settings->judul ?> <?= $settings->versi ?></title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Financial Information System" name="description" />
    <meta content="Fininsys" name="@iqbalrevvin Development" />
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
        <style type="text/css" media="screen">

        </style>

    <!--end::Web font -->
    
    <!--<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/alertify.min.css') ?>">
     <!--BOOTSTRAP FILE UPLOAD-->
    <link href="<?= base_url('assets/vendors/bootstrap-fileupload/bootstrap-fileupload.css') ?>" rel="stylesheet" />
     <!-- PRELOADER -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/pace-preload/blue/pace-theme-center-simple.css') ?>" />

    <link href="<?= base_url('assets/css/vendors.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />    
    <!--end::Base Styles -->
    <link href="<?= base_url('assets/vendors/datatables-metronic/datatables.bundle.css') ?>" rel="stylesheet" type="text/css" /> 
    <link href="<?= base_url('assets/js/plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" /> 
    <link rel="shortcut icon" href="<?= base_url('assets/image/'.$settings->logo) ?>" />
   <!--GroceryCRUD CSS-->
    <?php if (isset($css_files)) : ?>
        <?php foreach($css_files as $file): ?>
            <link rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
    <?php endif ?>
    <!--CSS PLUGINS-->
    <?php if (isset($css_plugins)): ?>
        <?php foreach ($css_plugins as $url_plugin): ?>
            <link rel="stylesheet" href="<?php echo base_url("$url_plugin") ?>">
        <?php endforeach ?>
    <?php endif ?>
    <!--Custom CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/a-design.css') ?>">

</head>
<!-- end::Head -->
