<?php include 'header.php';
echo form_open('Mahasiswa/edit_data'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>

<body>

<div class="container">
	<div class="space"></div>
	<h1><?= $judul  ?></h1>
	<br>
	<div class="row">
		<div class="col-md-6">
			<form class="needs-validation" novalidate>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Nim</label>
					<div class="col-sm-8">
						<input type="text" name="nim" class="form-control" value="<?php echo $data['nim'];?>" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Nama Lengkap</label>
					<div class="col-sm-8">
						<input type="text" name="nama_mhs" class="form-control" value="<?php echo $data['nama_mhs'];?>" required>
					</div>
				</div>

				<fieldset class="form-group">
					<div class="row">
						<legend class="col-form-label col-sm-4 pt-0">Jenis Kelamin</legend>

						<div class="col-sm-8">
							<div class="form-check  form-check-inline">
								<input type="radio" name="jenis_kelamin" class="form-check-input" value="Laki-laki" required checked>
								<label class="form-check-label">Laki-Laki</label>
							</div>
							<div class="form-check  form-check-inline">
								<input type="radio" name="jenis_kelamin" class="form-check-input" value="Perempuan" required>
								<label class="form-check-label">Perempuan</label>
							</div>
						</div>
					</div>
				</fieldset>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Program Studi</label>
					<div class="col-sm-8">
						<select class="custom-select mr-sm-2" name="prodi" required>
							<option value="">-- Pilih Program Studi --</option>
							<option value="Teknologi Informasi">Teknologi Informasi</option>
							<option value="Ilmu Komputer">Ilmu Komputer</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Alamat</label>
					<div class="col-sm-8">
						<textarea class="form-control" name="alamat" required ><?php echo $data['alamat'];?></textarea>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-8">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<?php echo anchor('Mahasiswa','Kembali', 'class="btn btn-danger"');?>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php echo form_close();?>
<?php include'footer.php'?>
