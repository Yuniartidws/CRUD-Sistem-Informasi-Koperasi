<body onLoad="javascript:print()">
<?php

include "../library/koneksi.php";

?>
<?php
$tgl=date('Y-m-d');
$tgl1=$_POST['tgl1'];
$tgl2=$_POST['tgl2'];
?>
<h3 align="center" class="style1">Laporan Pinjaman Koperasi RIMUNJA </h3>

<div align="center">DARI TANGGAL  <?php echo"$tgl1";?> SAMPAI DENGAN TANGGAL  <?php echo"$tgl2";?> </div>
<table width="80%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#33CCFF">
<tr>
<td width="29%" align="center" valign="middle" bgcolor="#71DCFF"><strong>No </strong></td>
<td width="29%" align="center" valign="middle" bgcolor="#71DCFF"><strong>ID User </strong></td>
<td width="14%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Nama Anggota </strong></td>
<td width="14%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Tanggal </strong></td>
<td width="12%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Pinjaman </strong></td>
<td width="12%" align="center" valign="middle" bgcolor="#71DCFF"><strong>Pinjaman Yang Sudah Dibayarkan </strong></td>
</tr>
<?php
$nomer = 1;
$data=mysql_query("SELECT * FROM koperasi WHERE tgl between '$tgl1' AND '$tgl2' and jenis in ('pinjaman','bayar') order by id_user asc");
$cekdata=mysql_num_rows($data);
if($cekdata=='0'){
echo "Maaf Data Yang anda cari tidak ada";
}
while($cetakdata=mysql_fetch_array($data)){
$total_pinjam=$cetakdata['pinjaman'];
@$hitung+=$total_pinjam;
$total_bayar=$cetakdata['bayar'];
@$hitung1+=$total_bayar;
$keseluruhan=$hitung-$hitung1;

?>

<tr>
<td bgcolor="#FFFFFF"><?php echo $nomer++; ?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata['id_user']?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata['nama']?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata['tgl']?></td>


<td bgcolor="#FFFFFF" style="color:blue;">Rp.<?php  echo  $cetakdata['pinjaman']?>,-</td>
<td bgcolor="#FFFFFF" style="color:blue;">Rp.<?php  echo  $cetakdata['bayar']?>,-</td>
 

</tr>
<?php } ?>
<tr>
<td colspan="4" align="left" valign="middle" bgcolor="#71DCFF"><div align="left"><strong>Total Pinjaman Anggota</strong></div>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$hitung);?>,- </strong></td>
</tr>
<tr>
<td colspan="5" align="left" valign="middle" bgcolor="#71DCFF"><div align="left"><strong>Total Pinjaman Yang Sudah Dibayarkan</strong></div>
  <div align="center"><strong></strong></div>  <div align="center"><strong></strong></div>  <div align="center"><strong> </strong></div>  <div align="center"><strong> </strong></div></td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$hitung1);?>,- </strong></td>
</tr>
<tr>
<td colspan="4" align="left" valign="middle" bgcolor="#71DCFF"><strong>
  <div align="left"><strong>Total Saldo Pinjaman </strong></div></td>
  <td bgcolor="#71DCFF">Total Pinjaman - Total Pinjaman Yang Sudah Dibayarkan</td>
<td align="left" valign="middle" bgcolor="#71DCFF"><strong>Rp.<?php echo number_format(@$keseluruhan);?>,-  </strong></td>
</tr>
</table>

<br>
							  <div class="col-lg-12 col-md-4" align="right" style="font-style:italic;">
								Koperasi RIMUNJA, <?php echo $tgl; ?> <br/><br/><br/><br/>
								Koordinator, <br>
								Yuniarti Dewi Savitri
							  </div>
