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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title-box">
                                <h3>Endorsement</h3>
                                <span>Berikut data Endorsement UMSU FM</span>
                            </div>
                            <ul class="panel-controls" style="margin-top: 2px;">
                                <button Type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahEndorsement">Tambah Data</button>
                                <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteSelectedEndorsement">Hapus Data</button>
                            </ul>
                        </div>
                        <div class="panel-body panel-body-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">
                                                <span class="custom-checkbox">
                                                    <input type="checkbox" id="selectAll">
                                                    <label for="selectAll"></label>
                                                </span>
                                            </th>
                                            <th style="text-align:center">No</th>
                                            <th>Nama Endorsement</th>
                                            <th>Tanggal Awal</th>
                                            <th>Tanggal Akhir</th>
                                            <th width="45%">Deskripsi</th>
                                            <th style="text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($endorse->findAll() as $row) : ?>
                                            <tr>
                                                <td style="text-align:center">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </td>
                                                <td style="text-align:center"><?= $no++; ?></td>
                                                <td><?= $row->endorsementNama; ?></td>
                                                <td><?= gmdate("Y-m-d h:i:s", $row->endorsementTanggalAwal); ?></td>
                                                <td><?= gmdate("Y-m-d h:i:s", $row->endorsementTanggalAkhir); ?></td>
                                                <td><?= $row->endorsementDeskripsi; ?></td>
                                                <td style="text-align:center">
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editEndorsement"><span class="fa fa-edit"></span></button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusEndorsement"><span class="fa fa-trash-o"></span></button>
                                                    <button Type="button" class="btn btn-default"><span class="fa fa-eye"></span></button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <!-- START MODAL DELETE ENDORSEMENT -->
                                        <div class="modal fade" id="hapusEndorsement" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type=button class="close" data-dismiss="modal" aria-label="Close">
                                                            <div aria-hidden="true">&times;</div>
                                                        </button>
                                                        <h3 class="modal-title" id="modalLabel"><strong>Hapus</strong> Data Endorsement</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah kamu yakin ingin menghapus data Endorsement?</p>
                                                        <p class="text-warning"><small>This action cannot be undone</small></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="simpan" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END MODAL DELETE ENDORSEMENT -->
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

<!-- START MODAL DELETE SELECTED ENDORSEMENT -->
<div class="modal fade" id="deleteSelectedEndorsement" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss="modal" aria-label="Close">
                    <div aria-hidden="true">&times;</div>
                </button>
                <h3 class="modal-title" id="modalLabel"><strong>Hapus</strong> Data Endorsement</h3>
            </div>
            <div class="modal-body">
                <p>Apakah kamu yakin ingin menghapus data Endorsement?</p>
                <p class="text-warning"><small>This action cannot be undone</small></p>
            </div>
            <div class="modal-footer">
                <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="simpan" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL DELETE SELECTED ENDORSEMENT -->

<!-- START MODAL TAMBAH ENDORSEMENT -->
<div class="modal fade" id="tambahEndorsement" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="modalLabel"><strong>Tambah</strong> Data Endorsement</h3>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Flayer endorsement</label>
                        <div class="col-md-9">
                            <input type="file" accept="image/*" class="fileinput btn-default" name="filename3" id="filename3" data-filename-placement="inside" title="Browse" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Endorsement</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Fill this field please" require />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal Awal</label>
                        <div class="col-md-9">
                            <div class="input-group date" id="dp-2" data-date="17-08-2021" data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control" value="17-08-2021" />
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal Akhir</label>
                        <div class="col-md-9">
                            <div class="input-group date" id="dp-2" data-date="17-08-2021" data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control" value="17-08-2021" />
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Deskripsi</label>
                        <div class="col-md-9">
                            <textarea class="form-control" require></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="simpan" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL TAMBAH DATA ENDORSEMENT -->

<!-- START MODAL EDIT ENDORSEMENT -->
<div class="modal fade" id="editEndorsement" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="modalLabel"><strong>Edit</strong> Data Endorsement</h3>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Flayer endorsement</label>
                        <div class="col-md-9">
                            <input type="file" accept="image/*" class="fileinput btn-default" name="filename3" id="filename3" data-filename-placement="inside" title="Browse" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Endorsement</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Fill this field please" require />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal Awal</label>
                        <div class="col-md-9">
                            <div class="input-group date" id="dp-2" data-date="17-08-2021" data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control" value="17-08-2021" />
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Tanggal Akhir</label>
                        <div class="col-md-9">
                            <div class="input-group date" id="dp-2" data-date="17-08-2021" data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control" value="17-08-2021" />
                                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Deskripsi</label>
                        <div class="col-md-9">
                            <textarea class="form-control" require></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="simpan" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL EDIT DATA ENDORSEMENT -->

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