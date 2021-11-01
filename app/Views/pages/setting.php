<?= $this->extend('layout/templateHome'); ?>

<?= $this->section('content'); ?>
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <?= $this->include('layout/templateSidebar'); ?>

    <!-- PAGE CONTENT -->
    <div class="page-content">

        <?= $this->include('layout/templateHead'); ?>

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="/home"><?= $breadcrumb[0]; ?></a></li>
            <li class="active"><?= $breadcrumb[1]; ?></li>
        </ul>
        <!-- END BREADCRUMB -->

        <!-- PAGE CONTENT WRAPPER -->
        <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title">Stream Address</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?= $setting->findAll()[0]->configValue; ?>" />
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Save</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title">Live Chat Address</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?= $setting->findAll()[2]->configValue; ?>" />
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Save</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title">Whatsapp Address</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <input type="text" class="form-control" value="<?= $setting->findAll()[3]->configValue; ?>" />
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title">Logo Aplikasi</h3>
                        </div>
                        <div class="panel-body">
                            <p>Click or drag some file below</p>
                            <form action="form-file-handling-html#" class="dropzone dropzone-mini dz-clickable">
                                <div class="dz-default dz-message">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Save</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title">Logo Ruang Dengar</h3>
                        </div>
                        <div class="panel-body">
                            <p>Click or drag some file below</p>
                            <form action="form-file-handling-html#" class="dropzone dropzone-mini dz-clickable">
                                <div class="dz-default dz-message">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Save</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title">Logo Homescreen</h3>
                        </div>
                        <div class="panel-body">
                            <p>Click or drag some file below</p>
                            <form action="form-file-handling-html#" class="dropzone dropzone-mini dz-clickable">
                                <div class="dz-default dz-message">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Save</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-colorful">
                        <div class="panel-heading">
                            <h3 class="panel-title">Flayer Default Siaran</h3>
                        </div>
                        <div class="panel-body">
                            <p>Click or drag some file below</p>
                            <form action="form-file-handling-html#" class="dropzone dropzone-mini dz-clickable">
                                <div class="dz-default dz-message">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="operator/logout" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->
<?= $this->endSection(); ?>