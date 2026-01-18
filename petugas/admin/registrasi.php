<?php

if ($_SESSION['level'] !== 'admin') {
	return;
}

?>

<div class="card card-dark">
	<div class="card-header">
		<h3 class="card-title">Registrasi Akun Baru</h3>
	</div>
	<form action="../functions/cek_login.php" method="post">
		<div class="card-body">
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="nama_petugas">Nama Petugas :</label>
						<input type="text" id="nama_petugas" minlength="5" value="<?= $namaDaftar; ?>" name="nama_petugas" class="form-control" placeholder="Nama Petugas" required>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="username">Username :</label>
						<input type="text" id="username" minlength="5" name="username" value="<?= $usernameDaftar; ?>" class="form-control" placeholder="Username Baru" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="password">Password :</label>
						<input type="password" minlength="5" id="password" name="password" class="form-control" placeholder="Password" required>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="ulangipassword">Ulangi Password :</label>
						<input type="password" minlength="5" id="ulangipassword" name="ulangipassword" class="form-control" placeholder="Ketikkan Ulang Password" required>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-sm-6">
					<div class="form-group">
						<label for="level">Level :</label>
						<select name="level" id="level" class="form-control">
							<option value="admin">Admin</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<div class="float-right">
				<button type="submit" name="admin_register" class="btn btn-dark">Daftar Sekarang</button>
			</div>
		</div>
	</form>
</div>