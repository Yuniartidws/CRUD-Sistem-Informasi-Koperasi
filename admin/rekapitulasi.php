<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

#untuk paging (pembagian halamanan)
$row = 100;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$Cari = "SELECT * FROM anggota";
$Tampil = mysql_query($Cari);
$jml	 = mysql_num_rows($Tampil);
$max	 = ceil($jml/$row);
?>

<div class="panel panel-default">
	<div class="panel-heading">
		Manajemen Koperasi Rekapitulasi
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
						<th>Jumlah Pinjaman</th>

						
					</tr>
				</thead>
			<?php
				$Cari = "SELECT * FROM anggota ORDER BY id_user ASC LIMIT $hal, $row";
				$Tampil = mysql_query($Cari);
				$nomer  = 0; 
				while ($hasil = mysql_fetch_array ($Tampil)) {
						$id_user =  ($hasil['id_user']);
						$username = ($hasil['username']);
						$nama 	= ($hasil['nama']);
						$simpan 	= ($hasil['simpan']);
						$pinjaman	= ($hasil['pinjaman']);
				
						$nomer++;
					
			?>
				<tbody>
					<tr>
						<td><?php echo $nomer;?></td>
						<td><?php  echo $hasil['id_user'];?></td>
						<td><?php  echo $hasil['username'];?></td>
						<td><?php  echo $hasil['nama'];?></td>
						<td>Rp.<?php  echo number_format( $hasil['simpan']);?>,-</td>
						<td>Rp.<?php  echo number_format( $hasil['pinjaman']);?>,-</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="7" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=simpanan&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>
