<!--<div id="resultFormRegister"></div>-->
<?php if($this->session->flashdata('sukses')): ?>
  <div class="col-xl-12">
    <div class="m-alert m-alert--icon m-alert--outline alert alert-success alert-dismissible fade show m-alert--air" role="alert">
      <div class="m-alert__icon">
        <i class="la la-warning"></i>
      </div>
      <div class="m-alert__text">
        <strong>Data Terkirim!</strong> <?= $this->session->flashdata('sukses'); ?> !
        <a href="#">Lihat Data Nasabah</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>
<?php endif; ?>

<div id="resultFormRegister">
    <div class="m-blockui" id="loader-center">
        <span>Memuat Form Pendaftaran Nasabah. . .</span>
        <span>
            <div class="m-loader m-loader--brand"></div>
        </span>
    </div>
</div>

<?php #require('formRegistration.php') ?>

<script>
	$(document).ready(function() {
		formRegisterView()
		function formRegisterView(){
          $.ajax({
              url: '<?= base_url('Nasabah/Registrasi/formRegisterView') ?>',
              type: 'POST',
              async: true,
              data:{
                  show: 1
              },
              success: function(response){
                  $('#resultFormRegister').html(response);
                  //$("#jenisNasabah").selectpicker();
              }
          });
        } 

	});
</script>


