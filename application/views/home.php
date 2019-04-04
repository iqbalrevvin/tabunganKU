<?php #require_once('template/other/preloader.php'); ?>
<!-- END: Subheader -->
<div class="m-content">
    <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
        <div class="m-alert__icon">
            <i class="flaticon-exclamation m--font-brand"></i>
        </div>
        <div class="m-alert__text">
            Selamat datang GarutorCRUD, dibawah ini adalah contoh tabel bawaan dari template metronic dengan tipe metronic html table yang dimana tabel html dapat otomatis menjadi serverside, anda dapat menyesuaikan dengan halaman-halaman lain.
        </div>
    </div>
    <?php require('dasbor.php') ?>
    <?php require('tabelMetronic.php') ?>
</div>
             
            <!-- end:: Body -->
<script src="<?= base_url('assets/js/components/tabel-metronic2.js') ?>"></script>