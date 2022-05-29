<?php
include_once("../library/koneksi.php");
if (isset($_GET['id_peg'])) {
		$id_peg = $_GET['id_peg'];
	//membaca nama file yang akan dihapus
	$query   = "SELECT * FROM pegawai WHERE id_peg='$id_peg'";
	$hasil   = mysql_query($query);
	$data    = mysql_fetch_array($hasil);
	}
	else {
		die ("Error. Tidak ada ID User yang dipilih Silakan cek kembali! ");	
	}
	//proses delete data
		if (!empty($id_peg) && $id_peg != "") {
			$hapus = "DELETE FROM pegawai WHERE id_peg='$id_peg'";
			$sql = mysql_query ($hapus);
			if ($sql) {		
				?>
					<script language="JavaScript">
					alert('id_peg <?=$id_peg?> Berhasil dihapus!');
					document.location='index.php?menu=pegawai';
					</script>
				<?php		
			} else {
				echo "<h2><font color=red><center>Data gagal dihapus!</center></font></h2>";	
			}
		}
	mysql_close($Open);
?>

