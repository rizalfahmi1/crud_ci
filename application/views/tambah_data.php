<?php include 'header.php'; 
echo form_open('Mahasiswa/tambah_data'); ?>
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
						<input type="text" name="nim" class="form-control" placeholder="Nim" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Nama Lengkap</label>
					<div class="col-sm-8">
						<input type="text" name="nama_mhs" class="form-control" placeholder="Nama Lengkap" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-8">
						<select class="custom-select mr-sm-2" id="prostudi" name="jenis_kelamin" required>
							<option value="">-- Pilih Jenis Kelamin --</option>
							<option value="Laki-Laki">Laki - Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Program Studi</label>
					<div class="col-sm-8">
						<select class="custom-select mr-sm-2" id="prostudi" name="prodi" required>
							<option value="">-- Pilih Program Studi --</option>
							<option value="Teknologi Informasi">Teknologi Informasi</option>
							<option value="Ilmu Komputer">Ilmu Komputer</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Alamat</label>
					<div class="col-sm-8">
						<textarea class="form-control" name="alamat" required></textarea>
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