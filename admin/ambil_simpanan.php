<body bgcolor="#EEF2F7">
<?php
	include_once("../library/koneksi.php");
	$id_user	= $_POST['id_user'];
	$username	= $_POST['username'];
	$nama		= $_POST['nama'];
	$tgl	= $_POST['tgl'];
	$ambil_simpanan	= $_POST['ambil_simpanan'];
	//validasi data jika data kosong
	if (empty($_POST['ambil_simpanan'])) {
	?>
		<script language="JavaScript">
			alert('Masukan Jumlah Pengambilan!');
			document.location='index.php?menu=simpanan';
		</script>
	<?php
	}
	else {
	//Masukan data ke Table
	$input	="INSERT INTO koperasi (id_user, username, nama, tgl, ambil_simpanan,jenis) VALUES ('$id_user','$username','$nama','$tgl','$ambil_simpanan','ambil_simpanan')";
	$query_input =mysql_query($input);
	//Update simpanan di tabel anggota
	$update="UPDATE anggota SET simpan=simpan - $ambil_simpanan WHERE id_user='$id_user'";
	$query_update =mysql_query($update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Pengambilan Simpanan Berhasil Diinput!');
		document.location='index.php?menu=simpanan';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Pengambilan Gagal Diinput, Silahkan diulangi!";
	}
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>