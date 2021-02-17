<main class="vh-100" style="background-color: #363636">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card mt-5">
					<div class="card-body">
						<form action="" method="POST">
							<center><h3>Form Register</h3></center><hr>
							<div class="form-group">
    							<label for="name">Nama Lengkap</label>
    							<input type="name" name="name" class="form-control" id="name" value="<?= set_value('name'); ?>"><?= form_error('name', '<small class="pl-3 text-danger">', '</small>'); ?>
  							</div>
  							<div class="form-group">
    							<label for="email">Email address</label>
    							<input type="email" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="pl-3 text-danger">', '</small>'); ?>
  							</div>
  							<div class="form-row mb-3">
  								<div class="col">
  									<div class="form-group">
    									<label for="password">Password</label>
    									<input type="password"  name="password1" class="form-control" id="password">
    									<?= form_error('password1', '<small class="pl-3 text-danger">', '</small>'); ?>
  									</div>
  								</div>
  								<div class="col">
  									<div class="form-group">
    									<label for="password">Konfirmasi Password</label>
    									<input type="password"  name="password2" class="form-control" id="password">
    									<?= form_error('password2', '<small class="pl-3 text-danger">', '</small>'); ?>
  									</div>
  								</div>
  							</div>
  							
  							<center><button type="submit" class="btn btn-primary">Daftar</button></center>
						</form><hr>

						<small class="row justify-content-center">
              Sudah punya akun?<a href="<?= base_url('auth/')?>" class="font-weight-bold">&nbspMasuk</a>&nbsp
              Kembali?<a href="<?= base_url('')?>" class="font-weight-bold" style="color: red;">&nbspDunia Artikel</a>
            </small>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>