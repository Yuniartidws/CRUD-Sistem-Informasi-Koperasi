<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 5;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$Cari = "SELECT * FROM anggota";
$Tampil = mysql_query($Cari);
$jml	 = mysql_num_rows($Tampil);
$max	 = ceil($jml/$row);
?>

<div class="panel panel-default">
	<div class="panel-heading">
		Daftar Simpanan Anggota
	</div>
	<div class="panel-body">
		<div class="table-responsive">
		<form method="post" action="index.php?menu=pencariansimpanan">
		 <input type="text" name="search" placeholder="Ketikkan Nama">
		 <input type="submit" name="submit" value="search"">
		</form>
		<br>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th>No</th>
						<th>ID User</th>
						<th>Username</th>
						<th>Nama Anggota</th>
						<th>Jumlah Simpanan</th>
						

						<th>Aksi</th>
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
						
						$nomer++;
				
			?>
				<tbody>
					<tr>
						<td><?php echo $nomer;?></td>
						<td><?php  echo $hasil['id_user'];?></td>
						<td><?php  echo $hasil['username'];?></td>
						<td><?php  echo $hasil['nama'];?></td>
						<td>Rp.<?php  echo number_format( $hasil['simpan']);?>,-</td>
						
						<td>
						<div class='btn-group'>
							<a href="index.php?menu=form-simpanan&id_user=<?php echo $hasil['id_user']; ?>"class="btn btn-primary btn-rect">Input Simpanan</a>
						</div>
						<div class='btn-group'>
						<a href="index.php?menu=form-ambil-simpanan&id_user=<?php echo $hasil['id_user']; ?>"class="btn btn-detail btn-rect">Ambil Simpanan</a>
						</div>
						</td>
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
