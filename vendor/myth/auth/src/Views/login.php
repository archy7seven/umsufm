<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="login-container">
	<div class="login-box animated fadeInDown">
		<div class="login-logo"></div>
		<div class="login-body">
			<div class="login-title"><strong>Welcome</strong>, Please login</div>
			<?= view('Myth\Auth\Views\_message_block') ?>
			<form action="<?= route_to('login') ?>" class="form-horizontal" method="post">
				<?= csrf_field() ?>

				<?php if ($config->validFields === ['email']) : ?>
					<div class="form-group">
						<div class="col-md-12">
							<input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
						</div>
						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>
					</div>
				<?php else : ?>
					<div class="form-group">
						<div class="col-md-12">
							<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
						</div>

						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>
					</div>
				<?php endif; ?>
				<div class="form-group">
					<div class="col-md-12">
						<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
					</div>
					<div class="invalid-feedback">
						<?= session('errors.password') ?>
					</div>
				</div>
				<?php if ($config->allowRemembering) : ?>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
							<?= lang('Auth.rememberMe') ?>
						</label>
					</div>
				<?php endif; ?>
				<div class="form-group">
					<div class="col-md-6">
						<?php if ($config->allowRegistration) : ?>
							<a href="<?= route_to('register') ?>" class="btn btn-link btn-block"><?= lang('Auth.needAnAccount') ?></a>
						<?php endif; ?>
						<?php if ($config->activeResetter) : ?>
							<a href="<?= route_to('forgot') ?>" class="btn btn-link btn-block"><?= lang('Auth.forgotYourPassword') ?></a>
						<?php endif; ?>
					</div>
					<div class="col-md-6">
						<button type="submit" class="btn btn-info btn-block"><?= lang('Auth.loginAction') ?></button>
					</div>
				</div>
			</form>
		</div>
		<div class="login-footer">
			<div class="pull-left">
				&copy; 2021 <?= lang('Auth.appName') ?>
			</div>
			<div class="pull-right">
				<a href="#!">About</a> |
				<a href="#!">Privacy</a> |
				<a href="#!">Contact Us</a>
			</div>
		</div>
	</div>

</div>


<?= $this->endSection() ?>