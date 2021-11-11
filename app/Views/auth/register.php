<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="login-container">
    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Register</strong> Account</div>
            <?= view('Myth\Auth\Views\_message_block') ?>
            <form action="<?= route_to('register') ?>" class="form-horizontal" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="email"><?= lang('Auth.email') ?></label>
                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                        <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="username"><?= lang('Auth.username') ?></label>
                        <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="password"><?= lang('Auth.password') ?></label>
                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <br>
                        <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <button class="btn btn-info btn-block" type="submit"><?= lang('Auth.register') ?></button>
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