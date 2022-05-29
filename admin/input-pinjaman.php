<body bgcolor="#EEF2F7">
<?php
	include_once("../library/koneksi.php");
	$id_user	= $_POST['id_user'];
	$username	= $_POST['username'];
	$nama		= $_POST['nama'];
	$tgl	= $_POST['tgl'];
	$pinjaman	= $_POST['pinjaman'];
	//validasi data jika data kosong
	if (empty($_POST['pinjaman'])) {
	?>
		<script language="JavaScript">
			alert('Masukan Jumlah Pinjaman!');
			document.location='index.php?menu=pinjaman';
		</script>
	<?php
	}
	else {
	//Masukan data ke Table koperasi
	$input	="INSERT INTO koperasi (id_user, username, nama, tgl, pinjaman, jenis) VALUES ('$id_user','$username','$nama','$tgl','$pinjaman','pinjaman')";
	$query_input =mysql_query($input);
	//Update pinjaman di tabel anggota
	$update="UPDATE anggota SET pinjaman=pinjaman + $pinjaman WHERE id_user='$id_user'";
	$query_update =mysql_query($update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Pinjaman Berhasil Diinput!');
		document.location='index.php?menu=pinjaman';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Pinjaman Gagal Diinput, Silahkan diulangi!";
	}
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>