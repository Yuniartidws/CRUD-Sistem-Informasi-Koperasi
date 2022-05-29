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
	$id_user	= $hasil['id_user'];
	$username	= $hasil['username'];
	$nama	= $hasil['nama'];
	$nik	= $hasil['nik'];
	$tgl_lahir =$hasil['tgl_lahir'];
	$jenis_kelamin	= $hasil['jenis_kelamin'];
	$pekerjaan	= $hasil['pekerjaan'];
	$alamat		= $hasil['alamat'];
	
	$no_hp		= $hasil['no_hp'];
	$simpan		= $hasil['simpan'];
	$pinjaman		= $hasil['pinjaman'];
?>
<form action="#" method="POST" name="profil-member" enctype="multipart/form-data">
	<input type="button" value="Kembali" onclick=location.href="index.php" title="Kembali">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Edit" onclick=location.href="index.php?menu=form-edit-profil&id_user=<?=$id_user?>" title="Edit">
	<table width="860" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#DFE6EF" height="30">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><b>Profil Member ID <u><i><?=$username?></i></u></b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>ID User</td>
			<td>:&nbsp;<input type="text" name="id_user" value="<?=$id_user?>" disabled="disabled" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Username</td>
			<td>:&nbsp;<input type="text" name="usr" value="<?=$username?>" disabled="disabled" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nama Member</td>
			<td>:&nbsp;<input type="text" name="nma" size="50" value="<?=$nama?>" disabled="disabled"></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>NIK</td>
			<td>:&nbsp;<input type="text" name="nik" size="40" value="<?=$nik?>" disabled="disabled"></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Tanggal Lahir</td>
			<td>:&nbsp;<input type="date" name="tgl" size="70" value="<?=$tgl_lahir?>" disabled="disabled"/></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Jenis Kelamin</td>
			<td>:&nbsp;<input type="radio" name="jk" value="L" <?php echo ($jenis_kelamin=='Laki-Laki')?"checked":""; ?> disabled="disabled" > Laki-laki &nbsp;&nbsp;
				<input type="radio" name="jk" value="P" <?php echo ($jenis_kelamin=='Perempuan')?"checked":""; ?> disabled="disabled" > Perempuan</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Pekerjaan</td>
			<td>:&nbsp;<input type="text" name="pj" size="25" value="<?=$pekerjaan?>" disabled="disabled" ></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Alamat</td>
			<td>:&nbsp;<input type="text" name="alt" size="70" value="<?=$alamat?>" disabled="disabled"/></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nomor HP</td>
			<td>:&nbsp;<input type="text" name="np" size="25" value="<?=$no_hp?>" disabled="disabled" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Simpanan</td>
			<td>:&nbsp;<input type="text" name="simpan" size="25" maxlength="20" value="<?=$simpan?>" disabled="disabled" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Pinjaman</td>
			<td>:&nbsp;<input type="text" name="pinjaman" size="40" maxlength="35" value="<?=$pinjaman?>" disabled="disabled" /></td>
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