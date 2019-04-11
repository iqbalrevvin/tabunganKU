<?php if ($jangkaSimpan->simpanan_berjangka == 'YA') : ?>
	<div class="form-group m-form__group row">
		<label class="col-form-label col-lg-3 col-sm-12"><b>Tipe Simpanan</b> :</label>
		<div class="col-lg-8 col-md-9 col-sm-12">
			<span class="text-muted"><b>Simpanan Berjangka</b></span>
			<span class="m-form__help">
				Fitur Penarikan : <?= $jangkaSimpan->fitur_penarikan ?><br>
				Fitur Transfer : <?= $jangkaSimpan->fitur_transfer ?><br>
				Deskripsi : <?= $jangkaSimpan->deskripsi_jenis_rekening ?>
			</span>
		</div>
	</div>
	<div class="form-group m-form__group row">
		<label class="col-form-label col-lg-3 col-sm-12"><b>Jangka Waktu</b> :</label>
		<div class="col-lg-6 col-md-9 col-sm-12 m-select2 m-select2--air m-select2--pill">
			<select class="form-control m_select2_hiding" id="jangkaSimpanan" name="jangkaSimpanan">
				<option value="">Pilih Simpanan (Angka Jumlah Bulan)</option>
				<?php
				?>
				<?php for ($bulan = 1; $bulan <= 30; $bulan++) : ?>
					<option value="<?= $bulan ?>"><b><?= $bulan ?></b></option>
				<?php endfor; ?>

			</select>
			<span class="m-form__help">Jangka Simpanan (Angka Jumlah Bulan)</span>
			<input type="hidden" value="<?= $jangkaSimpan->setor_awal ?>" name="setorAwal" id="setorAwal">
		</div>
	</div>
<?php else: ?>
	<div class="form-group m-form__group row">
		<label class="col-form-label col-lg-3 col-sm-12"><b>Tipe Simpanan</b> :</label>
		<div class="col-lg-8 col-md-9 col-sm-12">
			<span class="text-muted"><b>Simpanan Reguler</b></span><br>
			<span class="m-form__help">
				Fitur Penarikan : <?= $jangkaSimpan->fitur_penarikan ?><br>
				Fitur Transfer : <?= $jangkaSimpan->fitur_transfer ?><br>
				Deskripsi : <?= $jangkaSimpan->deskripsi_jenis_rekening ?>
			</span>
			<input type="hidden" value="<?= $jangkaSimpan->setor_awal ?>" name="setorAwal" id="setorAwal">
		</div>
	</div>
<?php endif; ?>
<script src="<?= base_url('assets/js/demo/select2.js') ?>"></script>