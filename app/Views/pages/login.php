<?= $this->extend('layout/templateLogin');?>

<?= $this->section('content');?>

<div class="login-container">   
    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Welcome</strong>, Please login</div>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong>Maaf!</strong> <?php echo session()->getFlashdata('error'); ?>
                </div> 
            <?php endif; ?>
            <form action="/operator/auth" class="form-horizontal" method="post">
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Username" name="username"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <a href="#!" class="btn btn-link btn-block">Forgot your password?</a>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-info btn-block">Log In</button>
                </div>
            </div>
            </form>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2021 <?= $appName;?>
            </div>
            <div class="pull-right">
                <a href="#!">About</a> |
                <a href="#!">Privacy</a> |
                <a href="#!">Contact Us</a>
            </div>
        </div>
    </div>
    
</div>

<?= $this->endSection();?>