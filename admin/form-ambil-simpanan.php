<div style="border:0; padding:10px; width:924px; height:auto;">
	<?php
		include_once("../library/koneksi.php");
		if (isset($_GET['id_user'])) {
			$id_user = $_GET['id_user'];
			$query   = "SELECT * FROM anggota WHERE id_user='$id_user'";
			$hasil   = mysql_query($query);
			$data    = mysql_fetch_array($hasil);
			$id_user	= $data['id_user'];
			$username	= $data['username'];
			$nama	= $data['nama'];
		}
		else {
			die ("Error. Tidak ada USERNAME yang dipilih Silakan cek kembali! ");	
		}
		//cek simpanan
		$cek= "SELECT simpan FROM anggota WHERE id_user='$_GET[id_user]'";
		$query=mysql_query($cek);
		$data=mysql_fetch_array($query);
		$simpan=$data['simpan'];
		if ($simpan == 0) {
		?>
				<script language="JavaScript">
				alert('Maaf, member ini tidak memiliki simpanan!');
				document.location='index.php?menu=simpanan';
				</script>
		<?php
		} else { //tampil form pengambilan simpanan
	?>
	<br><br><br>
<form action="index.php?menu=ambil_simpanan" method="POST" name="form-ambil-simpanan">
	<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="46">
				<td width="10%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="65%"><font color="orange" size="2"><b>Form Pengambilan Simpanan</b></font></td>
			</tr>
		<tr>
			<td width="10%">&nbsp;</td>
			<td width="25%"><input type="button" value="Cancel" onclick=location.href="index.php?menu=simpanan" title="Cancel"><br /><br /></td>
			<td width="65%">&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>ID User</td>
			<td><input name="id_user" type="text" size="25" value="<?=$id_user?>" disabled="disabled" />
				<input name="id_user" type="hidden" size="25" value="<?=$id_user?>" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Username</td>
			<td><input name="username" type="text" size="25" value="<?=$username?>" disabled="disabled" />
				<input name="username" type="hidden" size="25" value="<?=$username?>" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nama</td>
			<td><input name="nama" type="text" size="25" value="<?=$nama?>" disabled="disabled" />
				<input name="nama" type="hidden" value="<?=$nama?>" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Tanggal Ambil</td>
			<td><input type="date" name="tgl" size="25" maxlength="10" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Jumlah Ambil</td>
			<td><input type="text" name="ambil_simpanan" size="25" maxlength="10" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Ambil">&nbsp;&nbsp;&nbsp;
				<input type="reset" name="reset" value="Reset"></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>
<?php
	}
?>
</div>