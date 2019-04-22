<?php if($tipeNasabah == 'Siswa'): ?>
	<div class="form-group m-form__group row">
		<label class="col-form-label col-lg-3 col-sm-12"><b>Kelas</b> :</label>
		<div class="col-lg-6 col-md-9 col-sm-12 m-select2 m-select2--air m-select2--pill">
			<select class="form-control m_select2" id="kelas" name="kelas">
				<option value=""></option>
				<?php foreach ($kelas as $data): ?>
					<option value="<?= $data->idKelas ?>"><?= $data->nama_kelas ?> | <?= $data->nama_program_studi ?></option>
				<?php endforeach; ?>
			</select>
			<span class="m-form__help">Pilih Kelas Siswa</span>
		</div>
	</div>
<?php else: ?>
	<div class="form-group m-form__group row">
		<label class="col-form-label col-lg-3 col-sm-12"><b>Jabatan</b> :</label>
		<div class="col-lg-6 col-md-9 col-sm-12 m-select2 m-select2--air m-select2--pill">
			<select class="form-control m_select2" id="jabatan" name="jabatan">
				<option value=""></option>
				<?php foreach ($jabatan as $data): ?>
					<option value="<?= $data->idJabatan ?>"><?= $data->nama_jabatan ?></option>
				<?php endforeach; ?>
			</select>
			<span class="m-form__help">Pilih Jabatan Tenaga Pendidik</span>
		</div>
	</div>
<?php endif; ?>

<script src="<?= base_url('assets/js/demo/select2.js') ?>"></script>