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
		Hasil Pencarian Data Anggota
	</div>
	<div class="panel-body">
		<div class="table-responsive">
		
		
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>ID User</th>
						<th>Username</th>
						<th>Nama Lengkap</th>
						<th>NIK</th>
						<th>No HP</th>
						<th width="250">Aksi</th>
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
						$nik 	= ($hasil['nik']);
						$no_hp	= ($hasil['no_hp']);
				
						$nomer++;
					
			?>
				<tbody>
					<tr>
						<td><?php echo $nomer;?></td>
						<td><?php  echo $hasil['id_user'];?></td>
						<td><?php  echo $hasil['username'];?></td>
						<td><?php  echo $hasil['nama'];?></td>
						<td><?php  echo $hasil['nik'];?></td>
						<td><?php  echo $hasil['no_hp'];?></td>
						
						
						<td>
						<div class='btn-group'>
							<a href="?menu=user_del&aksi=hapus&id_user=<?php echo $hasil['id_user']; ?>" class="btn btn-hapus btn-rect" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')">Hapus</a>
						</div>
						<div class='btn-group'>
						  <a href="?menu=view-detail-anggota&aksi=detail&id_user=<?php echo $hasil['id_user']; ?>"class="btn btn-detail btn-rect">Detail</a>
						</div>
						<div class='btn-group'>
						<a href="?menu=edit-anggota&aksi=edit&id_user=<?php echo $hasil['id_user']; ?>"class="btn btn-edit btn-rect">Edit</a>
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