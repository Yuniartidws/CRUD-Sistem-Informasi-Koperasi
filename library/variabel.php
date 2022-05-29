<?php
function pegawai(){
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Pegawai</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Nama Lengkap</label>
						<input type="text"  required class="form-control" name="nma"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Tanggal Lahir</label>
						<input type="date" required class="form-control" name="tanggal"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Alamat</label>
						<input type="text"  required class="form-control" name="alm"/>
					</div>
						<input type="submit" class="btn btn-primary" name="pegawai" value="Tambah"/>
						<input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php }
function anggota(){
?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Tambah Anggota</h4>
            </div>
            <div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label class="control-label col-lg">Username</label>
						<input type="text"  required class="form-control" name="usr"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Password</label>
						<input type="password" required class="form-control" name="pas"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Nama Lengkap</label>
						<input type="text" required class="form-control" name="nma"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">NIK</label>
						<input type="text"  required class="form-control" name="nik"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Tanggal Lahir</label>
						<input type="date"  required class="form-control" name="tgl"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Jenis Kelamin</label>
						<input type="text" required class="form-control" name="jk"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Pekerjaan</label>
						<input type="text" required class="form-control" name="pj"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Alamat</label>
						<input type="text" required class="form-control" name="alt"/>
					</div>
					<div class="form-group">
						<label class="control-label col-lg">Nomor HP</label>
						<input type="text" required class="form-control" name="np"/>
					</div>
					
						<input type="submit" class="btn btn-primary" name="anggota" value="Tambah"/>
						<input type="reset" class="btn btn-warning" value="Close" data-dismiss="modal"/>
				</form>
            </div>
        </div>
    </div>
</div>
<?php
}

?>