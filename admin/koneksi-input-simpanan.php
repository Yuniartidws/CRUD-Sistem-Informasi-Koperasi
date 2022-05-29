<body bgcolor="#EEF2F7">
<?php
	include_once("../library/koneksi.php");
	$id_user	= $_POST['id_user'];
	$username	= $_POST['username'];
	$nama		= $_POST['nama'];
	$tgl	= $_POST['tgl'];
	$simpanan	= $_POST['simpanan'];
	//validasi data jika data kosong
	if (empty($_POST['simpanan'])) {
	?>
		<script language="JavaScript">
			alert('Masukan Jumlah Simpanan!');
			document.location='index.php?menu=simpanan';
		</script>
	<?php
	}
	else {
	//Masukan data ke Table Koperasi
	$input	="INSERT INTO koperasi (id_user, username, nama, tgl, simpanan, jenis) VALUES ('$id_user','$username','$nama','$tgl','$simpanan'*0.1+'$simpanan','simpanan')";
	$query_input =mysql_query($input);
	//Update simpanan di tabel anggota
	$a=$simpanan*0.1;
	$update="UPDATE anggota SET simpan=simpan + $simpanan + $a WHERE id_user='$id_user'";
	$query_update =mysql_query($update);
		if ($query_update ) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Simpanan Berhasil Diinput!');
		document.location='index.php?menu=simpanan';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Simpanan Gagal Diinput, Silahkan diulangi!";
	}
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</body>