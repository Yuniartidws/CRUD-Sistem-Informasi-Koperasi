<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 5;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$Cari = "SELECT * FROM pegawai";
$Tampil = mysql_query($Cari);
$jml	 = mysql_num_rows($Tampil);
$max	 = ceil($jml/$row);
?>
<a href="#myModal" class="btn btn-primary btn-rect" data-toggle="modal"><i class='icon icon-white icon-plus'></i> Tambah Pegawai</a><p>
<?php
	if($_POST["pegawai"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into pegawai set id_peg='".$_POST["id_peg"]."',nama='".$_POST["nma"]."', ttl='".$_POST["tanggal"]."', alamat='".$_POST["alm"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=pegawai'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>";
	}else if(isset($_POST["pegawai"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}

pegawai(); //memanggil function pegawai
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar Pegawai
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Pegawai</th>
						<th>Nama Lengkap</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th width="90">Aksi</th>
					</tr>
				</thead>
			<?php
				$Cari = "SELECT * FROM pegawai ORDER BY id_peg ASC LIMIT $hal, $row";
				$Tampil = mysql_query($Cari);
				$nomer  = 0; 
				
				while ($hasil = mysql_fetch_array($Tampil)) {
					$nomer++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomer;?></td>
						<td><?php echo $hasil['id_peg'];?></td>
						<td><?php echo $hasil['nama'];?></td>
						<td><?php echo $hasil['ttl'];?></td>
						<td><?php echo $hasil['alamat'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=pegawai_del&aksi=hapus&id_peg=<?php echo $hasil['id_peg']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a>
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
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=pegawai&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>