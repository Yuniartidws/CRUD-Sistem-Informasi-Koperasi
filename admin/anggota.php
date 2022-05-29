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
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah Anggota</a><p>
<?php
	if($_POST["anggota"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into anggota set  id_user='".$_POST["id_user"]."', username='".$_POST["usr"]."', password='".$_POST["pas"]."', nama='".$_POST["nma"]."', nik='".$_POST["nik"]."', tgl_lahir='".$_POST["tgl"]."', jenis_kelamin='".$_POST["jk"]."', pekerjaan='".$_POST["pj"]."',alamat='".$_POST["alt"]."', no_hp='".$_POST["np"]."'");
			mysql_query("insert into login set  id_user='".$_POST["id_user"]."', username='".$_POST["usr"]."', password='".$_POST["pas"]."', nama='".$_POST["nma"]."',hak_akses='Member'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=anggota'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["anggota"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}

anggota(); //memanggil function anggota
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar Anggota
	</div>
	<div class="panel-body">
		<div class="table-responsive">
		<form method="post" action="index.php?menu=pencarian">
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
						<th>Nama Lengkap</th>
						<th>NIK</th>
						<th>No HP</th>
						<th width="250">Aksi</th>
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
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=anggota&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>