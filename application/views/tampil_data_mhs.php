<?php include 'header.php';?>

<body>
<div class="container">
	<div class="space"></div>

	<br>

	<?php echo anchor('Mahasiswa/tambah', 'Tambah Data', 'class="btn btn-primary"');
	?>
	<br><br>
	<table id="datatable" class="table table-striped table-bordered">
		<thead>			
			<tr>
			    <th>NIM</th>
			    <th>Nama Mahasiswa</th>
			    <th>Jenis Kelamin</th>
			    <th>Alamat</th>
			    <th>Program Studi</th>
			    <th>Aksi</th>
			
			</tr>			
		</thead>

		<tbody>

			<?php foreach($data->result() as $row){
				echo "
				<tr>
				<td>$row->nim</td>
				<td>$row->nama_mhs</td>
				<td>$row->jenis_kelamin</td>
				<td>$row->alamat</td>
				<td>$row->prodi</td>
				";
				echo'
				<td width="170px">';
				echo"
				".anchor('Mahasiswa/delete/'.$row->nim,'Hapus','class="btn btn-danger"')."
				";
				echo'
				</td>
				</tr>';
			}
				?>
				
			
		</tbody>
	</table>

</div>
	
<?php include'footer.php'?>