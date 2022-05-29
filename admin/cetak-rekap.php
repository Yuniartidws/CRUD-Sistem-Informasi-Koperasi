<body onLoad="javascript:print()">
<?php
include "../library/koneksi.php";

?>
<?php
$tgl=date('Y-m-d');
$tgl1=$_POST['tgl1'];
$tgl2=$_POST['tgl2'];
?>
<h3 align="center" class="style1">Laporan REKAPITULASI Koperasi RIMUNJA </h3>

<div align="center">DARI TANGGAL  <?php echo"$tgl1";?> SAMPAI DENGAN TANGGAL  <?php echo"$tgl2";?> </div>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#33CCFF">
<tr>
<td width="29%" align="center" valign="middle" bgcolor="#71DCFF"><strong>No </strong></td>
<td width="29%" align="center" valign="middle" bgcolor="#71DCFF"><strong>ID User </strong></td>
<td width="14%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Nama Anggota </strong></td>
<td width="14%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Tanggal </strong></td>
<td width="12%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Simpanan Masuk </strong></td>
<td width="12%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Simpanan Keluar </strong></td>
<td width="12%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Pinjaman </strong></td>
<td width="12%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Pinjaman Yang Sudah Dibayarkan</strong></td>
</tr>
<?php
$nomer = 1;
$ambildata=mysql_query("SELECT * FROM koperasi WHERE tgl between '$tgl1' AND '$tgl2' and jenis in ('simpanan','ambil_simpanan','pinjaman','bayar') order by id_user asc");
$cekdata=mysql_num_rows($ambildata);
if($cekdata=='0'){
echo "Maaf Data Yang anda cari tidak ada";
}
while($cetakdata=mysql_fetch_array($ambildata)){
$total_masuk=$cetakdata['simpanan'];
@$hitung+=$total_masuk;
$total_ambil_simpan=$cetakdata['ambil_simpanan'];
@$hitung1+=$total_ambil_simpan;
$total_keluar=$cetakdata['pinjaman'];
@$hitung2+=$total_keluar;
$total_bayar=$cetakdata['bayar'];
@$hitung3+=$total_bayar;
$keseluruhan=$hitung+$hitung3-$hitung1-$hitung2;
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $nomer++; ?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata['id_user']?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata['nama']?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata['tgl']?></td>
<td bgcolor="#FFFFFF">Rp.<?php  echo  $cetakdata['simpanan']?>,-</td>
<td bgcolor="#FFFFFF">Rp.<?php  echo  $cetakdata['pinjaman']?>,-</td>
<td bgcolor="#FFFFFF">Rp.<?php  echo  $cetakdata['ambil_simpanan']?>,-</td>
<td bgcolor="#FFFFFF">Rp.<?php  echo  $cetakdata['bayar']?>,-</td>

</tr>
<?php } ?>
<tr>
<td colspan="7" align="left" valign="middle" bgcolor="#71DCFF"><div align="left"><strong>Total Simpanan</strong></div>
  <div align="center"><strong></strong></div>  <div align="center"><strong></strong></div>  <div align="center"><strong> </strong></div>  <div align="center"><strong> </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$hitung);?>,- </strong></td>
</tr>
<tr>
<td colspan="7" align="left" valign="middle" bgcolor="#71DCFF"><div align="left"><strong>Total Simpanan Yang Diambil</strong></div>
  <div align="center"><strong></strong></div>  <div align="center"><strong></strong></div>  <div align="center"><strong> </strong></div>  <div align="center"><strong> </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$hitung1);?>,- </strong></td>
</tr>
<tr>
<td colspan="7" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Pinjaman   </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$hitung2);?>,-  </strong></td>
</tr>
<tr>
<td colspan="7" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Pinjaman Yang Sudah Dibayarkan  </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$hitung3);?>,-  </strong></td>
</tr>

<tr>
<td colspan="6" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Saldo Koperasi </strong></div></td>
  <td bgcolor="#71DCFF">Total Simpanan + Total Pinjaman Yang Sudah Dibayarkan - Total Simpanan Yang Diambil - Total Pinjaman</td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$keseluruhan);?>,-  </strong></td>
</tr>
</table>

<br>
							  <div class="col-lg-12 col-md-4" align="right" style="font-style:italic;">
								Koperasi RIMUNJA, <?php echo $tgl; ?> <br/><br/><br/><br/>
								Koordinator, <br>
								Yuniarti Dewi Savitri
							  </div>
