
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

				<form method="post" action="<?= base_url('auth/lupa_password'); ?>" class="login100-form validate-form">
					<span class="login100-form-title">
				RESET PASSWORD
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Email">
						<input class="input100" type="email" id="email" name="email" placeholder="email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Reset Password
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Sudah
						</span>
						<a class="txt2" href="<?= base_url('auth');?>">
							Punya Akun?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="<?= base_url('auth/daftar'); ?>">
							Buat Akun Baru
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
