<?php
include_once("../library/koneksi.php");
if (isset($_GET['id_user'])) {
		$id_user = $_GET['id_user'];
	//membaca nama file yang akan dihapus
	$query   = "SELECT * FROM anggota WHERE id_user='$id_user'";
	$hasil   = mysql_query($query);
	$data    = mysql_fetch_array($hasil);
	}
	else {
		die ("Error. Tidak ada ID User yang dipilih Silakan cek kembali! ");	
	}
	//proses delete data
		if (!empty($id_user) && $id_user != "") {
			$hapus = "DELETE FROM anggota WHERE id_user='$id_user'";
			$sql = mysql_query ($hapus);
			$hapus = "DELETE FROM login WHERE id_user='$id_user'";
			$sql = mysql_query ($hapus);
			if ($sql) {		
				?>
					<script language="JavaScript">
					alert('id_user <?=$id_user?> Berhasil dihapus!');
					document.location='index.php?menu=anggota';
					</script>
				<?php		
			} else {
				echo "<h2><font color=red><center>Data gagal dihapus!</center></font></h2>";	
			}
		}
	mysql_close($Open);
?>

