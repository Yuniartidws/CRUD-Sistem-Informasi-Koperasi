<?php
include_once("../library/koneksi.php");
	if (isset($_GET['id_user'])) {
		$id_user = $_GET['id_user'];
	}
	else {
	die ("Error. Tidak Ada ID Anggota Yang Dipilih! ");	
	}
//Tampilkan data dari tabel member
	$query = "SELECT * FROM anggota WHERE id_user='$id_user'";
	$sql = mysql_query ($query);
	$hasil = mysql_fetch_array ($sql);
	$id_user	= $hasil['id_user'];
	$username	= $hasil['username'];
	$password	= $hasil['password'];
	$nama	= $hasil['nama'];
	$nik	= $hasil['nik'];
	$tgl_lahir = $hasil['tgl_lahir'];
	$jenis_kelamin	= $hasil['jenis_kelamin'];
	$pekerjaan	= $hasil['pekerjaan'];
	$alamat		= $hasil['alamat'];
	$email		= $hasil['email'];
	$no_hp		= $hasil['no_hp'];
	$simpan		= $hasil['simpan'];
	$pinjaman		= $hasil['pinjaman'];
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Detail Anggota
	</div>
	<div class="panel-body">
	<input type="button" class="btn btn-primary btn-rect" value="Kembali" onclick=location.href="index.php?menu=anggota" title="Kembali">
	<table width="860" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#DFE6EF" height="30">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><b>Detail Data Anggota <u><i><?=$id_user?></i></u></b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>ID User</td>
			<td>:&nbsp;<?=$id_user?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Username</td>
			<td>:&nbsp;<?=$username?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Password</td>
			<td>:&nbsp;<?=$password?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nama Anggota</td>
			<td>:&nbsp;<?=$nama?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>NIK</td>
			<td>:&nbsp;<?=$nik?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Tanggal Lahir</td>
			<td>:&nbsp;<?=$tgl_lahir?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Jenis Kelamin</td>
			<td>:&nbsp;<?=$jenis_kelamin?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Pekerjaan</td>
			<td>:&nbsp;<?=$pekerjaan?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Alamat</td>
			<td>:&nbsp;<?=$alamat?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nomor HP</td>
			<td>:&nbsp;<?=$no_hp?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Simpanan</td>
			<td>:&nbsp;<?=$simpan?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Pinjaman</td>
			<td>:&nbsp;<?=$pinjaman?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="32">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
<?php
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
	</div>
</div>