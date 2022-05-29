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
			die ("Error. Tidak ada ID User yang dipilih Silakan cek kembali! ");	
		}
	?>
<form action="index.php?menu=input-bayar" method="POST" name="form-bayar">
	<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="46">
				<td width="10%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="65%"><font color="orange" size="2"><b>Form Input Pembayaran Pinjaman</b></font></td>
			</tr>
		<tr>
			<td width="10%">&nbsp;</td>
			<td width="25%"><input type="button" value="Cancel" onclick=location.href="index.php?menu=pinjaman" title="Cancel"><br /><br /></td>
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
			<td>Tanggal Bayar</td>
			<td><input name="tgl" type="date"  /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Jumlah Bayar</td>
			<td><input type="text" name="bayar" size="25" maxlength="10" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Bayar">&nbsp;&nbsp;&nbsp;
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
</div>