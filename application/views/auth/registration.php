<div class="container">
	<div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Halaman Daftar</h1>
						</div>
						<?=$this->session->flashdata('pesan');?>
						<form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="Masukkan NIK anda" value="<?= set_value('nik');?>">
								<?= form_error('nik','<small class="text-danger pl-3">','</small>'); ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama lengkap anda" value="<?= set_value('name');?>">
								<?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value ('email');?>">
								<?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" id="password1"
										name="password1" placeholder="Password">
									<?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" id="password2"
										name="password2" placeholder="Repeat Password">
								</div>
							</div>
							<button type="submit" class="btn btn-info btn-user btn-block"> Daftar Akun
							</button>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="<?= base_url('auth'); ?>">Sudah mempunyai akun? Masuk!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
