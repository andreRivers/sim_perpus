
<body>
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash_login'); ?>"></div>
    <?php if ($this->session->flashdata('flash_login')) : ?>

    <?php endif; ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url('assets/login/'); ?>images/img-01.png" alt="IMG">
				</div>

				<form method="post" action="<?= base_url('auth'); ?>" class="login100-form validate-form">
					<span class="login100-form-title">
			Buat Akun Baru
					</span>

					<div class="wrap-input100 validate-input" data-validate = "npm">
						<input class="input100" type="text" id="npm" name="npm" placeholder="NPM" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "nama">
						<input class="input100" type="text" id="nama" name="nama" placeholder="Nama Lengkap" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "email">
						<input class="input100" type="text" id="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "nama">
					<select name="cars" id="kode_fakultas" nama="fakultas" class="input100">
					<option selected disabled value="">Pilih Fakultas</option>
                            <?php
                            foreach ($fakultas as $data) { // Lakukan looping pada variabel siswa dari controller
                                echo "<option value='" . $data->kode_fakultas . "'>" . $data->fakultas . "</option>";
                            }
                            ?>
 					 </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "nama">
					<select type="text" class="input100" id="kode_prodi" name="kode_prodi">
                        </select>
                        <?= form_error('kode_prodi', '<small class="text-danger pl-3">', '</small>'); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password1" name="password1" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password2" name="password2" placeholder="Ulangi Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="<?= base_url('auth');?>">
							Sudah Memiliki Akun!
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
