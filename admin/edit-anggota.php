<?php
if($_GET["aksi"] && $_GET["id_user"]){
include_once("../library/koneksi.php");
$query = mysql_query("select * from anggota where id_user='".$_GET["id_user"]."'");
$hasil = mysql_fetch_array ($query);
	
	if($_POST["anggota"]){
			include_once("../library/koneksi.php");
			mysql_query("update anggota set username='".$_POST["usr"]."', password='".$_POST["pas"]."', nama='".$_POST["nma"]."', nik='".$_POST["nik"]."', tgl_lahir='".$_POST["tgl"]."', jenis_kelamin='".$_POST["jk"]."', pekerjaan='".$_POST["pj"]."',alamat='".$_POST["alt"]."', no_hp='".$_POST["np"]."' where id_user='".$_GET["id_user"]."'");
			mysql_query("update login set username='".$_POST["usr"]."', password='".$_POST["pas"]."', nama='".$_POST["nma"]."',hak_akses='Member' where id_user='".$_GET["id_user"]."'");
			mysql_query("update koperasi set nama='".$_POST["nma"]."' where id_user='".$_GET["id_user"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=anggota'>";

	}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit Anggota<u><i><?=$id_user?></i></u></b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
										
						<div class="form-group">
							<label class="control-label col-lg-4">Username</label>
							<div class="col-lg-4">
								<input type="text" name="usr" value="<?php echo $hasil["username"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Password</label>
							<div class="col-lg-4">
								<input type="text" name="pas" value="<?php echo $hasil["password"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Nama</label>
							<div class="col-lg-4">
								<input type="text" name="nma" value="<?php echo $hasil["nama"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">NIK</label>
							<div class="col-lg-4">
								<input type="text" name="nik" value="<?php echo $hasil["nik"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp1">Tanggal Lahir</label>
							<div class="col-lg-4">
								<input type="date" required name="tgl" value="<?php echo $hasil["tgl_lahir"];?>" class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Jenis Kelamin</label>
							<div class="col-lg-4">
								<input type="text" name="jk" value="<?php echo $hasil["jenis_kelamin"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Pekerjaan</label>
							<div class="col-lg-4">
								<input type="text" name="pj" value="<?php echo $hasil["pekerjaan"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" name="alt" value="<?php echo $hasil["alamat"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">No HP</label>
							<div class="col-lg-4">
								<input type="text" name="np" value="<?php echo $hasil["no_hp"];?>" required class="form-control" />
							</div>
						</div>
						
						


						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="anggota" value="Update" class="btn btn-primary" /> <a href="?menu=anggota" class="btn btn-warning">Batal</a>
						</div>

					</form>
	</div>
</div>
<?php } ?>
