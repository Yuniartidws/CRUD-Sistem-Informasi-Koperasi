<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 10;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$Cari = "SELECT * FROM anggota";
$Tampil = mysql_query($Cari);
$jml	 = mysql_num_rows($Tampil);
$max	 = ceil($jml/$row);
?>
<br><br><br>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar Simpanan &nbsp;<?=$_SESSION["nama"]?>
				
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th>No</th>
						<th>ID User</th>
						<th>Username</th>
						<th>Nama Anggota</th>
						<th>Jumlah Simpanan</th>
						

						
					</tr>
				</thead>
			<?php
			include_once("../library/koneksi.php");
			if (isset($_GET["id_user"])) {
				$id_user = $_GET["id_user"];
			}
			else {
			die ("Error. No ID Selected! ");	
			}
				$Cari = "SELECT * FROM anggota WHERE id_user='$id_user'";
				$Tampil = mysql_query($Cari);
				$nomer  = 0; 
				
				 while ($hasil = mysql_fetch_array ($Tampil)) {
						$id_user =  ($hasil['id_user']);
						$username = ($hasil['username']);
						$nama 	= ($hasil['nama']);
						$simpan 	= ($hasil['simpan']);
						
						$nomer++;
				
			?>
				<tbody>
					<tr>
						<td><?php echo $nomer;?></td>
						<td><?php  echo $hasil['id_user'];?></td>
						<td><?php  echo $hasil['username'];?></td>
						<td><?php  echo $hasil['nama'];?></td>
						<td>Rp.<?php  echo number_format( $hasil['simpan']);?>,-</td>
						
						</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="7" align="right">
						<?php
						
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>
