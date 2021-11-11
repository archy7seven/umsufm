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
                <div class="col-md-12">
                    <!-- START PROJECTS BLOCK -->
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <?php echo session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($validation->hasError('penyiarNama')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <strong>Failed ! </strong><?= $validation->getError('penyiarNama'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($validation->hasError('isHuman')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <strong>Failed ! </strong><?= $validation->getError('isHuman'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title-box">
                                <h3>Penyiar</h3>
                                <span>Berikut Data Penyiar UMSU FM</span>
                            </div>
                            <ul class="panel-controls" style="margin-top: 2px;">
                                <button Type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahPenyiar"><span class="fa fa-plus"></span> Tambah Data</button>
                            </ul>
                        </div>
                        <div class="panel-body panel-body-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="5%" style="text-align:center">No</th>
                                            <th width="75%">Nama Penyiar</th>
                                            <th width="15%" style="text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($penyiar as $row) : ?>
                                            <tr>
                                                <td style="text-align:center"><?= $no++; ?></td>
                                                <td><?= $row->penyiarNama; ?></td>
                                                <td style="text-align:center">
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar<?= $row->penyiarId; ?>"><span class="fa fa-edit"></span></button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar<?= $row->penyiarId; ?>"><span class="fa fa-trash-o"></span></button>
                                                </td>
                                            </tr>
                                            <!-- START MODAL DELETE PENYIAR -->
                                            <div class="modal fade" id="hapusPenyiar<?= $row->penyiarId; ?>" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <button type=button class="close" data-dismiss="modal" aria-label="Close">
                                                                <div aria-hidden="true">&times;</div>
                                                            </button>
                                                            <h3 class="modal-title" id="modalLabel"><strong>Hapus</strong> Data Penyiar</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah kamu yakin ingin menghapus data penyiar <strong><?= $row->penyiarNama; ?></strong>?</p>
                                                            <p class="text-warning"><small>This action cannot be undone</small></p>
                                                        </div>
                                                        <form action="/penyiar/<?= $row->penyiarId; ?>" method="post">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <div class="modal-footer">
                                                                <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL DELETE PENYIAR -->
                                            <!-- START MODAL EDIT PENYIAR -->
                                            <div class="modal fade" id="editPenyiar<?= $row->penyiarId; ?>" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type=button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h3 class="modal-title" id="modalLabel"><strong>Edit</strong> Data Penyiar</h3>
                                                        </div>
                                                        <form action="/penyiar/<?= $row->penyiarId; ?>/edit" method="post">
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label>Nama Penyiar</label>
                                                                    <input type="text" name="penyiarNama" class="form-control" value="<?= $row->penyiarNama; ?>" required>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input value="1" class="form-check-input" type="radio" name="isHuman" id="flexRadioDefault1" <?php if ($row->penyiarStatus == 1) echo "checked"; ?> />
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Satu orang
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input value="0" class="form-check-input" type="radio" name="isHuman" id="flexRadioDefault2" <?php if ($row->penyiarStatus == 0) echo "checked"; ?> />
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Lebih dari satu orang
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL EDIT PENYIAR -->
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END PROJECTS BLOCK -->
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- START MODAL TAMBAH PENYIAR -->
<div class="modal fade" id="tambahPenyiar" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/penyiar" method="POST">
                <?= csrf_field() ?>
                <div class="modal-header">
                    <button type=button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="modalLabel"><strong>Tambah</strong> Data Penyiar</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Penyiar</label>
                        <input type="text" name="penyiarNama" class="form-control">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="isHuman" value="1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Satu orang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="isHuman" value="0" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Lebih dari satu orang
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END MODAL TAMBAH PENYIAR -->


<?= $this->endSection(); ?>