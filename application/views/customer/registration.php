<!--<div id="resultFormRegister"></div>-->
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
              url: '<?= base_url('customer/registration/formregisterview') ?>',
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


