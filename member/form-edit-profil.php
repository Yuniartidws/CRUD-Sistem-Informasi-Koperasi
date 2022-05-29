<div style="border:0; padding:10px; width:924px; height:auto;">
	<?php
	include_once("../library/koneksi.php");
	if (isset($_GET["id_user"])) {
		$id_user = $_GET["id_user"];
	}
	else {
	die ("Error. No ID User Selected! ");	
	}
//Tampilkan data dari tabel anggota
	$query = "SELECT * FROM anggota WHERE id_user='$id_user'";
	$sql = mysql_query ($query);
	$hasil = mysql_fetch_array ($sql);
	
	if($_POST["anggota"]){
			include_once("../library/koneksi.php");
			mysql_query("update anggota set nama='".$_POST["nma"]."', nik='".$_POST["nik"]."', tgl_lahir='".$_POST["tgl"]."', jenis_kelamin='".$_POST["jk"]."', pekerjaan='".$_POST["pj"]."',alamat='".$_POST["alt"]."', no_hp='".$_POST["np"]."' where id_user='".$_GET["id_user"]."'");
			mysql_query("update login set  nama='".$_POST["nma"]."',hak_akses='Member' where id_user='".$_GET["id_user"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=profil&id_user=". $_SESSION['id_user'] ."'>";

	}
	
	$id_user	= $hasil['id_user'];
	$username	= $hasil['username'];
	$nama	= $hasil['nama'];
	$nik	= $hasil['nik'];
	$tgl_lahir =$hasil['tgl_lahir'];
	$jenis_kelamin	= $hasil['jenis_kelamin'];
	$pekerjaan	= $hasil['pekerjaan'];
	$alamat		= $hasil['alamat'];
	$no_hp		= $hasil['no_hp'];
	
	
?>
<form action="#" method="POST" name="form-edit-profil" enctype="multipart/form-data">
	<input type="button" value="Kembali" onclick=location.href="index.php" title="Kembali">
	<table width="860" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#DFE6EF" height="30">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><b>Edit Data Anggota <u><i><?=$id_user?></i></u></b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>ID User</td>
			<td>:&nbsp;<?=$id_user?><input type="hidden" name="id_user" value="<?=$id_user?>"></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Username</td>
			<td>:&nbsp;<?=$username?><input type="hidden" name="usr" value="<?=$username?>"></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nama Member</td>
			<td>:&nbsp;<input type="text" name="nma" size="50" value="<?=$nama?>"></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>NIK</td>
			<td>:&nbsp;<input type="text" name="nik" size="40" value="<?=$nik?>"></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Tanggal Lahir</td>
			<td>:&nbsp;<input type="date" name="tgl" size="70" value="<?=$tgl_lahir?>"/></td>
		</tr>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Jenis Kelamin</td>
			<td>:&nbsp;<input type="radio" name="jk" value="L" <?php echo ($jenis_kelamin=='Laki-Laki')?"checked":""; ?>> Laki-laki &nbsp;&nbsp;
				<input type="radio" name="jk" value="P" <?php echo ($jenis_kelamin=='Perempuan')?"checked":""; ?>> Perempuan</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Pekerjaan</td>
			<td>:&nbsp;<input type="text" name="pj" size="25" value="<?=$pekerjaan?>"></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Alamat</td>
			<td>:&nbsp;<input type="text" name="alt" size="70" value="<?=$alamat?>" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nomor HP</td>
			<td>:&nbsp;<input type="text" name="np" size="25" value="<?=$no_hp?>" /></td>
		</tr>
		<tr height="46">
		<td></td>
		<td></td>
		<td>&nbsp;<input type="submit" name="anggota" value="Update" class="btn btn-primary" /> <a href="?menu=profil&id_user=<?=$_SESSION["id_user"]?>" class="btn btn-warning">Batal</a></td>				
			
		</tr>
		
		<tr>
			<td>&nbsp;</td>
			<td height="32">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>
<?php
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</div>