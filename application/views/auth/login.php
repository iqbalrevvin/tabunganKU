<form class="m-login__form m-form" action="<?php echo site_url('auth/ajax_login')?>" method="post">
  <div class="message"></div>
  <div id="resultLogin"></div>
  <div id="loginArea">
    <div class="form-group m-form__group">
      <input class="form-control m-input" type="text" placeholder="Nama Pengguna" autocomplete="off" name="identity">
    </div>
    <div class="form-group m-form__group">
      <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Kata Sandi" name="password">
    </div>

    <div class="col m--align-left">
      <label class="">
        <input type="checkbox" value="1"> Ingat Saya
        <span></span>
      </label>
    </div>
    <!--<div class="col m--align-right">
      <a href="javascript:;" id="m_login_forget_password" class="m-link">Lupa Password ?</a>
    </div>-->

    <div class="row m-login__form-sub">
      <div class="col m--align-left">
        <a href="javascript:;" id="m_login_signup" class="m-link m--font-info m-login__account-link">
          <b>Registrasi</b>
        </a>
      </div>
      <div class="col m--align-right">
        <a href="javascript:;" id="m_login_forget_password" class="m-link">
          <b>Lupa Kata Sandi</b>
        </a>
      </div>
    </div>
  
    <div class="m-login__form-action">
      <button type="submit" id="submitAuthLogin" class="btn m-btn--pill m-btn--air m-btn m-btn--gradient-from-primary m-btn--gradient-to-info ">
        <span id="btnLoading" ></span> Masuk
      </button>
    </div>
  </div>
</form>
<script>
$(function(){
  redirect = '<?php echo $redirect ?>';
  base_url = '<?php echo base_url() ?>';
  $('input').iCheck({ checkboxClass: 'icheckbox_square-blue' });

  $('form').on('submit',function(event){
    event.preventDefault();
    loadBlockLogin();
    $("#btnLoading").addClass('disabled');
    $("#btnLoading").html('<img src="' + base_url + 'assets/svg/loading-spin.svg" alt=""> ');
    $.ajax({
        url      : $(this).attr('action'),
        type     : 'POST',
        data     : $(this).serialize(),
        success  : function(data) {
            if (data == "false") {
              $('.message').html('<div class="m-alert m-alert--outline alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><strong>Peringatan!</strong> Login Tidak Valid.</div>').hide().slideDown();
              //$('input').val('');
              $('input[name="identity"]').focus();
              $("#btnLoading").fadeOut();
              mApp.unblock("#loginArea");
            }else{
              window.location.href = redirect;
            }
            //$("#btnLoading").fadeOut();
        }
    });
  });
  //BLOCK LOAD------------------------------------------
  function loadBlockLogin() {
      mApp.block("#loginArea", {
          overlayColor: "#000000",
          type: "loader",
          state: "primary",
          message: "<b>Memeriksa Informasi Login...</b>"
      });
  }
//-----------------------------------------------------
});
</script>