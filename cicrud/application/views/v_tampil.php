

<!-- view v_tampil digunakan untuk menampilkan data dari databse yang diambil oleh model m_data
	menggunakan fungsi tampil_data. data yang ditampilkan untuk kasus saya ini adalah data user. -->

<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<!-- anchor digunakan untuk membuat hyperlink, diibawah ini membuat hyperlink yang mengarah pada fungi tambah di controller crud.php -->
	<!-- catatan: parameter pertama pada fungsi anchor untuk link tujuan, parameter kedua berisi txt yang akan ditampilkan, untuk mengunakan anchor harus mengaktifkan helper url terlebIH dahulu. -->
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>

	<!-- tabel data yang akan di tampilkan -->
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;  //medelarasikan no tabel dimuai dari 1
		foreach($user as $u){ 
		?>
		<tr>
			<!-- echo digunakan menampilkan data, disini berupa user -->
			<td><?php echo $no++ ?></td> 
			<td><?php echo $u->nama ?></td> 
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
			<!-- membuat hyperlink yang mengarah pada fungi edit di controller crud.php-->
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>   
			 <!-- membuat hyperlink yang mengarah pada fungi hapus di controller crud.php-->
                 `<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?> 
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>