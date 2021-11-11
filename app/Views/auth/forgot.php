<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="login-container">
    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Forgot</strong> Your Password?</div>
            <?= view('Myth\Auth\Views\_message_block') ?>
            <p class="form-text text-muted"><?= lang('Auth.enterEmailForInstructions') ?></p>
            <form action="<?= route_to('forgot') ?>" class="form-horizontal" method="post">
                <?= csrf_field() ?>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="email"><?= lang('Auth.emailAddress') ?></label>
                        <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.email') ?>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-info btn-block"><?= lang('Auth.sendInstructions') ?></button>
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