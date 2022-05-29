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
		Hasil Pencarian Data Simpanan Anggota
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
						<th>Jumlah Pinjaman</th>

						<th>Aksi</th>
					</tr>
				</thead>
			<?php
				 
				 include_once("../library/koneksi.php");
				 $nomer = 0;
				 $search = $_POST['search'];
				 $Cari = "SELECT * FROM anggota WHERE nama LIKE '%$search%'";
				 $Tampil = mysql_query($Cari);
				 while($hasil = mysql_fetch_array($Tampil)) {
				 $id_user =  ($hasil['id_user']);
						$username = ($hasil['username']);
						$nama 	= ($hasil['nama']);
						$pinjaman 	= ($hasil['pinjaman']);
						
						$nomer++;
			
			?>
				<tbody>
					<tr>
							<td><?php echo $nomer;?></td>
						<td><?php  echo $hasil['id_user'];?></td>
						<td><?php  echo $hasil['username'];?></td>
						<td><?php  echo $hasil['nama'];?></td>
						<td>Rp.<?php  echo number_format( $hasil['pinjaman']);?>,-</td>
						<td>
						<div class='btn-group'>
						  <a href="?menu=form-pinjam&id_user=<?php echo $hasil['id_user']; ?>"class="btn btn-primary btn-rect">Pinjam</a>
						  </div>
						  <div class='btn-group'>
						  <a href="?menu=form-bayar&id_user=<?php echo $hasil['id_user']; ?>"class="btn btn-detail btn-rect">Bayar Pinjaman</a>
						  </div>
						  
						</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="8" align="right">
						<?php
						
						
						?></td>
					</tr>
					
			</table>
		</div>
	</div>
</div>