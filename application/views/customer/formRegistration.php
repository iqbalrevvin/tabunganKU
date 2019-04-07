<div class="m-content">
	<div class="row">
		<!--FORM DATA NASABAH-->
		<div class="col-xl-6">
			<div class="m-portlet m-portlet--danger m-portlet--head-solid-bg">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon">
								<i class="flaticon-user-add"></i>
							</span>
							<h3 class="m-portlet__head-text">
								FORM DATA NASABAH
							</h3>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<form id="formRegisterNasabah">
					<div class="m-form m-form--fit m-form--label-align-right">
						<div class="m-portlet__body">
							<div class="form-group m-form__group row">
								<label class="col-form-label col-lg-3 col-sm-12"><b>Tipe Nasabah</b> :</label>
								<div class="col-lg-6 col-md-9 col-sm-12 m-select2 m-select2--air m-select2--pill ">
									<select class="form-control m_select2_hiding" id="tipeNasabah" name="tipeNasabah">
										<option value=""></option>
										<option value="Tenaga Pendidik">Tenaga Pendidik</option>
										<option value="Siswa">Siswa</option>
										<option value="Alumni">Alumni</option>
									</select>
									<span class="m-form__help">Tentukan Jenis Nasabah.</span>
								</div>
							</div>
							<div class="form-group m-form__group">
								<label for="">No. Identitas/NIK</label>
								<input type='text' class="form-control m-input m-input--air m_maxlength_2" maxlength="16" 
									placeholder="16 Digit NIK" id="NIK" name="NIK">
								<span class="m-form__help">Isi dengan 16 digit No. NIK.</span>
							</div>
							<div class="form-group m-form__group">
								<label for="">Nama Lengkap</label>
								<input type='text' class="form-control m-input m-input--air m_maxlength_2" maxlength="50" placeholder="Nama Lengkap Nasabah" id="namaNasabah" name="namaNasabah">
								<span class="m-form__help">Isi dengan nama lengkap nasabah</span>
							</div>
							<div class="form-group m-form__group">
								<label for="">Jenis Kelamin</label>
								<select class="form-control m-input m-input--air m-bootstrap-select m-bootstrap-select--air 
									m-bootstrap-select--pill m_select2_hiding" name="JK" id="JK">	
										<option value="">Pilih Jenis Kelamin</option>
										<option value="Laki-Laki">Laki - Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
									<span class="m-form__help">Tentukan jenis kelamin nasabah.</span>
							</div>
							<div class="form-group m-form__group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control m-input m-input--air m_maxlength_2" maxlength="50"
									aria-describedby="emailHelp" placeholder="Email Nasabah" id="email" name="email">
								<span class="m-form__help">Masukan Email nasabah yang valid.</span>
							</div>
							<div class="form-group m-form__group">
								<label for="exampleInputEmail1">No. Hp</label>
								<input type="number" class="form-control m-input m-input--air" name="noHP" id="noHP" placeholder="No. Hp / WA Nasabah">
								<span class="m-form__help">Isi dengan No. HP / WA Nasabah</span>
							</div>
							<div class="form-group m-form__group">
								<label for="">Tempat Lahir</label>
								<input type='text' class="form-control m-input m-input--air m_maxlength_2" maxlength="30" 
									placeholder="Tempat Lahir Nasabah" id="tempatLahir" name="tempatLahir">
								<span class="m-form__help">Isi dengan tempat lahir nasabah</span>
							</div>
							<div class="form-group m-form__group">
								<label for="">Tanggal Lahir</label>
								<div class="m-input-icon m-input-icon--right">
									<input type="text" class="form-control m-input  m-input--air m_datepicker_modal" 
										placeholder="Format : yyyy-mm-dd Atau Pilih Dengan Kalender" id="tanggalLahir" name="tanggalLahir" />
									<span class="m-input-icon__icon m-input-icon__icon--right">
										<span><i class="la la-calendar"></i></span>
									</span>
								</div>
							</div>
							
						</div>
					</div>
				
				<!--end::Form-->
			</div>
			<div class="m-portlet m-portlet--responsive-mobile m-portlet--warning m-portlet--head-solid-bg m-portlet--bordered">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon">
								<i class="flaticon-box-1"></i>
							</span>
							<h3 class="m-portlet__head-text">
								SIMPAN DATA
							</h3>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<div class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">
					<div class="form-group m-form__group">
                		<button type="button" class="btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning" 
                			id="btnAddTenpen">
                    		<i class="la flaticon-close"></i> Batalkan
               			 </button>
						<button type="button" class="btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent" 
							data-toggle="modal" data-target="#modalSimpan">
                    		<i class="la flaticon-interface-5"></i> Simpan Data
                		</button>	
					</div>
						
						
					</div>
				</div>
				<!--end::Form-->
			</div>
		</div>
		<!--END FORM DATA NASABAH-->
		<!--FORM DATA JENIS REKENING-->
		<div class="col-xl-6">
			<div class="m-portlet m-portlet--success m-portlet--head-solid-bg">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon">
								<i class="flaticon-map-location"></i>
							</span>
							<h3 class="m-portlet__head-text">
								FORM ALAMAT NASABAH
							</h3>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<div class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">
						<div class="form-group m-form__group">
							<label for="">Alamat</label>
							<input type='text' class="form-control m-input m-input--air m_maxlength_1" maxlength="100" 
								placeholder="Alamat Nasabah" id="alamat" name="alamat">
							<span class="m-form__help">Isi dengan alamat jalan nasabah</span>
						</div>
						<div class="form-group m-form__group">
							<label for="">RT/RW</label>
							<input type='text' class="form-control m-input m-input--air m_maxlength_1" maxlength="5" 
								placeholder="RT/RW Nasabah" id="rtrw" name="rtrw">
							<span class="m-form__help">Contoh : 02/01</span>
						</div>
						<div class="form-group m-form__group">
							<label for="">Desa</label>
							<input type='text' class="form-control m-input m-input--air m_maxlength_1" maxlength="50" 
								placeholder="Desa Nasabah" id="desa" name="desa">
							<span class="m-form__help">Isi dengan alamat desa nasabah</span>
						</div>
						<div class="form-group m-form__group">
							<label for="">Kecamatan</label>
							<input type='text' class="form-control m-input m-input--air m_maxlength_1" id="" maxlength="50" 
								placeholder="Kecamatan Nasabah" id="kecamatan" name="kecamatan">
							<span class="m-form__help">Isi dengan alamat kecamatan nasabah</span>
						</div>
						<div class="form-group m-form__group">
							<label for="">Kab/Kota</label>
							<input type='text' class="form-control m-input m-input--air m_maxlength_1" maxlength="50" 
								placeholder="Kab/Kota Nasabah" id="kota" name="kota">
							<span class="m-form__help">Isi dengan Kabupaten/Kota nasabah</span>
						</div>
						<div class="form-group m-form__group">
							<label for="">Provinsi</label>
							<input type='text' class="form-control m-input m-input--air m_maxlength_1" id="" maxlength="50" 
								placeholder="Provinsi Nasabah" id="provinsi" name="provinsi">
							<span class="m-form__help">Isi dengan Provinsi nasabah</span>
						</div>
					</div>
				</div>
				<!--end::Form-->
			</div>
			<div class="m-portlet m-portlet--info m-portlet--head-solid-bg">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<span class="m-portlet__head-icon">
								<i class="flaticon-price-tag"></i>
							</span>
							<h3 class="m-portlet__head-text">
								FORM JENIS REKENING
							</h3>
						</div>
					</div>
				</div>
				<!--begin::Form-->
				<div class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">
						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12"><b>Jenis Rekening</b> :</label>
							<div class="col-lg-6 col-md-9 col-sm-12 m-select2 m-select2--air m-select2--pill inputBlock">
								<select class="form-control m_select2_hiding" id="jenisRekening" name="jenisRekening">
									<option value="">Pilih Jenis Rekening</option>
									<?php foreach ($listJenisRekening as $jenis): ?>
										<option value="<?= $jenis->idJenis_rekening ?>"><?= $jenis->nama_jenis_rekening ?></option>
									<?php endforeach; ?>
									
								</select>
								<span class="m-form__help">Tentukan Jenis Rekening.</span>
							</div>
						</div>
						<div id="pilihJangkaSimpanan"></div>
						<div class="form-group m-form__group">
							<label for="">Tujuan Pembukaan</label>
							<textarea class="form-control m-input m-input--air" id="tujuanPembukaan" name="tujuanPembukaan" rows="4">
								
							</textarea>
							<span class="m-form__help">Isi dengan tujuan pembukaan rekening</span>
						</div>
					
					</div>
				</div>
				<!--end::Form-->
			</div>
		</div>
		<!--END FORM DATA JENIS REKENING-->
		</form>
	</div>
</div>

<div class="modal fade modalInput" id="modalSimpan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Simpan Data Nasabah</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-height="200">
					<div class="m-alert m-alert--icon m-alert--air alert alert-dismissible fade show" role="alert">
						<div class="m-alert__icon">
							<i class="la la-warning"></i>
						</div>
						<div class="m-alert__text">
							<strong class="text-dark">Perhatian!</strong> 
							<div id="resultAddNasabah" class="text-danger">	
								<span class="text-dark">Perhatikan Point Berikut Sebelum Melanjutkan !</span>
							</div>
						</div>
						<div class="m-alert__close">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							</button>
						</div>
					</div>

					<div class="m-demo">
						<div class="m-demo__preview">
							<div class="m-list-timeline">
								<div class="m-list-timeline__items">
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
										<span class="m-list-timeline__icon flaticon-attachment"></span>
										<span class="m-list-timeline__text">
											Nasabah Melampirkan Dokumen Yang Diperlukan
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
										<span class="m-list-timeline__icon fa fa-pencil-alt"></span>
										<span class="m-list-timeline__text">
											Nasabah Mengisi Data Utama Dengan Benar & Lengkap
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
										<span class="m-list-timeline__icon flaticon-placeholder"></span>
										<span class="m-list-timeline__text">
											Nasabah Mengisi Data Alamat Dengan Benar & Lengkap
										</span>
									</div>
									<div class="m-list-timeline__item">
										<span class="m-list-timeline__badge m-list-timeline__badge--primary"></span>
										<span class="m-list-timeline__icon fa fa-handshake"></span>
										<span class="m-list-timeline__text">
											Nasabah Menyetujui Syarat & Ketentuan Yang Berlaku 
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button"  class="btn m-btn--square  m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning"
					data-dismiss="modal">
            		<i class="la flaticon-close"></i> Tutup
       			 </button>
				<button type="button" class="btn m-btn--square  m-btn m-btn--gradient-from-success m-btn--gradient-to-accent" 
					id="btnSimpan">
            		<i class="la flaticon-interface-5"></i> Lanjutkan Simpan
        		</button>	
			</div>
		</div>
	</div>
</div>

<script src="<?= base_url('assets/js/demo/select2.js') ?>"></script>
<script src="<?= base_url('assets/js/demo/bootstrap-datepicker.js') ?>"></script>
<script>
//INPUT BLOCK------------------------------------------
  function inputBlock() {
      mApp.block(".inputBlock", {
              overlayColor: "#000000",
              type: "loader",
              state: "primary",
              message: "Memeriksa & Mengirim Paramater..."
          });
  }
//-----------------------------------------------------

$(document).on('change', '#jenisRekening', function (e) {
	mApp.block(".inputBlock");
	$jenisRekening = $('#jenisRekening').val();
	$.ajax({
		url: '<?= base_url('customer/registration/cekJenisRekening') ?>',
		type : 'POST',
		//async: true,
		//dataType: '',
		data: {jenisRekening : $jenisRekening},
		success: function (response) {
			$('#pilihJangkaSimpanan').html(response).fadeIn('slow');
			mApp.unblock(".inputBlock");
		}
	})

});



var registerAlert = {
    init: function() {
         $("#btnSimpan").click(function(e) {
         	modalBlockLoad()
         	if($('#tipeNasabah').val()=="" //|| $('#namaNasabah').val()=="" || $('#NIK').val()=="" || $('#JK').val()=="" || $('#noHP').val()=="" || $('#tempatLahir').val()=="" || $('#tanggalLahir').val()==""){
         		){toastr.error("Terdapat parameter wajib yang tidak boleh kosong!", "Gagal Mengirim");
         		mApp.unblock(".modalInput");
         	}else{
	            swal({
	                title: "Anda Yakin Untuk Menyimpan?",
	                text: "Data Nasabah Akan Disimpan Ke Database & Diberi Nomor Rekening!",
	                type: "question",
	                showCancelButton: !0,
	                confirmButtonText: "Ya, Lanjutkan!",
	                cancelButtonText: "Batal"
	            }).then(function(e) {
	            	var data = $('#formRegisterNasabah').serialize();
	            	$.ajax({
	            		url: '<?= base_url('customer/registration/addCustomer') ?>',
	            		type: 'POST',
	            		dataType: 'json',
	            		data: data,
	            		beforeSend: function(e) {
							if(e && e.overrideMimeType) {
								e.overrideMimeType('application/jsoncharset=UTF-8')
							}
						},
	            		success: function(response){
	            			mApp.unblock(".modalInput");
	            			// $('#resultAddNasabah').html(result).show();
	            			if(response.status == 'sukses'){
	            				swal({
					                title: "Data Nasabah Berhasil Disimpan",
					                text: "Anda Akan Dialihkan Ke Halaman Daftar Nasabah, Mohon Tunggu. . . ",
					                type: "success",
					                timer: 5e3,
					                onOpen: function() {
					                    swal.showLoading()
					                    setTimeout(function () {
					                        //$("#loading").hide();
					                        refresh();
					                    }, 1500);  
					                }
					            });
	            			}else{
	            				mApp.unblock(".modalInput");
	            				$('#resultAddNasabah').html(response.pesan).show()
	            			}
	            		}
	            	})
	            })
	        }
        })
    }
};

//DATE PICKER INITIAL
var BootstrapDatepicker = function() {
  var t;
  t = mUtil.isRTL() ? {
      leftArrow: '<i class="la la-angle-right"></i>',
      rightArrow: '<i class="la la-angle-left"></i>'
  } : {
      leftArrow: '<i class="la la-angle-left"></i>',
      rightArrow: '<i class="la la-angle-right"></i>'
  };
  return {
      init: function() {
      $(".m_datepicker_nonModal, .m_datepicker_3_validate_nonModal").datepicker({
              rtl: mUtil.isRTL(),
              format: 'yyyy-mm-dd',
              todayBtn: "linked",
              clearBtn: !0,
              todayHighlight: !0,
              templates: t
          }), $(".m_datepicker_modal").datepicker({
              rtl: mUtil.isRTL(),
              format: 'yyyy-mm-dd',
              orientation: "top left",
              todayBtn: "linked",
              clearBtn: !0,
              todayHighlight: !0,
              templates: t
          })
      }
  }
}();




jQuery(document).ready(function() {
    registerAlert.init()
    BootstrapDatepicker.init()
});

</script>