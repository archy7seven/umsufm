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
                                <h3>Acara</h3>
                                <span>Berikut data acara UMSU FM</span>
                            </div>
                            <ul class="panel-controls" style="margin-top: 2px;">
                                <button Type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahAcara">Tambah Data</button>
                                <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteSelectedAcara">Hapus Data</button>
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
                                            <th>Nama Acara</th>
                                            <th>Nama Penyiar</th>
                                            <th>Jadwal Acara</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Akhir</th>
                                            <th>Status Acara</th>
                                            <th>Status Arsip</th>
                                            <th style="text-align:center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($acara->findAll() as $row) : ?>
                                            <tr>
                                                <td style="text-align:center">
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </td>
                                                <td style="text-align:center"><?= $no++; ?></td>
                                                <td><?= $row->acaraNama; ?></td>
                                                <td><?= $row->penyiarNama; ?></td>
                                                <td><?= $row->acaraHari; ?></td>
                                                <td><?= $row->acaraJamMulai; ?></td>
                                                <td><?= $row->acaraJamAkhir; ?></td>
                                                <td><?= $row->acaraStatus == 1 ? "Tayang" : "Segera Tayang"; ?></td>
                                                <td><?= $row->acaraArsip == 1 ? "Tidak Diarsip" : "Diarsip"; ?>
                                                    <!-- START MODAL EDIT ACARA -->
                                                    <div class="modal fade" id="editAcara<?= $row->acaraId; ?>" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type=button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <h3 class="modal-title" id="modalLabel"><strong>Edit</strong> Data Acara</h3>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form role="form" class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Flayer Acara</label>
                                                                            <div class="col-md-9">
                                                                                <input type="file" accept="image/*" class="fileinput btn-danger" name="flayer" id="filename3" data-filename-placement="inside" title="Browse..." />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Nama Acara</label>
                                                                            <div class="col-md-9">
                                                                                <input type="text" class="form-control" value="<?= $row->acaraNama; ?>" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Nama Penyiar</label>
                                                                            <div class="col-md-8">
                                                                                <select class="form-control select">
                                                                                    <option value="88">Please Select One</option>
                                                                                    <?php foreach ($penyiar->findAll() as $mc) : ?>
                                                                                        <option value="<?= $mc->penyiarId; ?>" <?= $mc->penyiarId == $row->acaraPenyiar ? "selected" : ""; ?>><?= $mc->penyiarNama; ?></option>
                                                                                    <?php endforeach; ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Jadwal Acara</label>
                                                                            <div class="col-sm-9">
                                                                                <div class="btn-group" data-toggle="buttons">
                                                                                    <label class="btn btn-default <?= $row->acaraHari == "Senin" ? "active" : ""; ?>">
                                                                                        <input type="radio" name="hari" value="Senin" <?= $row->acaraHari == "Senin" ? "checked" : ""; ?> /> Sen
                                                                                    </label>
                                                                                    <label class="btn btn-default <?= $row->acaraHari == "Selasa" ? "active" : ""; ?>">
                                                                                        <input type="radio" name="hari" value="Selasa" <?= $row->acaraHari == "Selasa" ? "checked" : ""; ?> /> Sel
                                                                                    </label>
                                                                                    <label class="btn btn-default <?= $row->acaraHari == "Rabu" ? "active" : ""; ?>">
                                                                                        <input type="radio" name="hari" value="Rabu" <?= $row->acaraHari == "Rabu" ? "checked" : ""; ?> /> Rab
                                                                                    </label>
                                                                                    <label class="btn btn-default <?= $row->acaraHari == "Kamis" ? "active" : ""; ?>">
                                                                                        <input type="radio" name="hari" value="Kamis" <?= $row->acaraHari == "Kamis" ? "checked" : ""; ?> /> Kam
                                                                                    </label>
                                                                                    <label class="btn btn-default <?= $row->acaraHari == "Jumat" ? "active" : ""; ?> ">
                                                                                        <input type="radio" name="hari" value="Jumat" <?= $row->acaraHari == "Jumat" ? "checked" : ""; ?> /> Jum
                                                                                    </label>
                                                                                    <label class="btn btn-default <?= $row->acaraHari == "Sabtu" ? "active" : ""; ?>">
                                                                                        <input type="radio" name="hari" value="Sabtu" <?= $row->acaraHari == "Sabtu" ? "checked" : ""; ?> /> Sab
                                                                                    </label>
                                                                                    <label class="btn btn-default <?= $row->acaraHari == "Minggu" ? "active" : ""; ?>">
                                                                                        <input type="radio" name="hari" value="Minggu" <?= $row->acaraHari == "Minggu" ? "checked" : ""; ?> /> Min
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Jam Mulai</label>
                                                                            <div class="col-md-9">
                                                                                <div class="input-group bootstrap-timepicker">
                                                                                    <input type="time" class="form-control" value=<?= $row->acaraJamMulai; ?> />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Jam Akhir</label>
                                                                            <div class="col-md-9">
                                                                                <div class="input-group bootstrap-timepicker">
                                                                                    <input type="time" class="form-control" value=<?= $row->acaraJamAkhir; ?> />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Status Acara</label>
                                                                            <div class="col-sm-9">
                                                                                <div class="btn-group" data-toggle="buttons">
                                                                                    <label class="btn btn-default <?= $row->acaraStatus == 1 ? "active" : ""; ?>">
                                                                                        <input type="radio" name="status" value="1" <?= $row->acaraStatus == 1 ? "checked" : ""; ?> /> Tayang
                                                                                    </label>
                                                                                    <label class="btn btn-default <?= $row->acaraStatus == 0 ? "active" : ""; ?>">
                                                                                        <input type="radio" name="status" value="0" <?= $row->acaraStatus == 0 ? "checked" : ""; ?> /> Segera
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-3 control-label">Arsip Acara</label>
                                                                            <label class="switch col-md-9">
                                                                                <input type="checkbox" checked value="0"/>
                                                                                <span></span>
                                                                            </label>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END MODAL EDIT ACARA -->
                                                </td>
                                                <td style="text-align:center">
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editAcara<?= $row->acaraId; ?>"><span class="fa fa-edit"></span></button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusAcara"><span class="fa fa-trash-o"></span></button>
                                                    <button Type="button" class="btn btn-default"><span class="fa fa-eye"></span></button>

                                                </td>
                                            </tr>

                                        <?php endforeach; ?>
                                        <!-- START MODAL DELETE ACARA -->
                                        <div class="modal fade" id="hapusAcara" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type=button class="close" data-dismiss="modal" aria-label="Close">
                                                            <div aria-hidden="true">&times;</div>
                                                        </button>
                                                        <h3 class="modal-title" id="modalLabel"><strong>Hapus</strong> Data Acara</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah kamu yakin ingin menghapus data acara?</p>
                                                        <p class="text-warning"><small>This action cannot be undone</small></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END MODAL DELETE ACARA -->
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



<!-- START MODAL TAMBAH ACARA -->
<!-- <div class="modal fade" id="tambahAcara" role="dialog" tabindex="-1" aria-labelledby="defModalHead" aria-hidden="true"> -->
<div class="modal fade" id="tambahAcara" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="" method="post" class="form-horizontal">
                <div class="modal-header">
                    <button type=button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="modalLabel"><strong>Tambah</strong> Data Acara</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Flayer Acara</label>
                        <div class="col-md-9">
                            <input type="file" accept="image/*" class="fileinput btn-danger" name="flayer" id="filename3" data-filename-placement="inside" title="Browse..." />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Acara</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Penyiar</label>
                        <div class="col-md-9">
                            <select class="form-control select">
                                <option value="88">Please Select One</option>
                                <?php foreach ($penyiar->findAll() as $row) : ?>
                                    <option value="<?= $row->penyiarId; ?>"><?= $row->penyiarNama; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jadwal Acara</label>
                        <div class="col-sm-9">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default">
                                    <input type="radio" name="hari" value="Senin" /> Sen
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="hari" value="Selasa" /> Sel
                                </label>
                                <label class="btn btn-default ">
                                    <input type="radio" name="hari" value="Rabu" /> Rab
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="hari" value="Kamis" /> Kam
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="hari" value="Jumat" /> Jum
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="hari" value="Sabtu" /> Sab
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="hari" value="Minggu" /> Min
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jam Mulai</label>
                        <div class="col-md-9">
                            <div class="input-group bootstrap-timepicker">
                                <input type="time" class="form-control" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Jam Akhir </label>
                        <div class="col-md-9">
                            <div class="input-group bootstrap-timepicker">
                                <input type="time" class="form-control" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Status Acara</label>
                        <div class="col-sm-9">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default">
                                    <input type="radio" name="status" value="1" /> Tayang
                                </label>
                                <label class="btn btn-default">
                                    <input type="radio" name="status" value="0" /> Segera
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Arsip Acara</label>
                        <label class="switch col-md-9">
                            <input type="checkbox" checked value="0"/>
                            <span></span>
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
<!-- END MODAL TAMBAH ACARA -->


<!-- START MODAL DELETE SELECTED ACARA -->
<div class="modal fade" id="deleteSelectedAcara" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss="modal" aria-label="Close">
                    <div aria-hidden="true">&times;</div>
                </button>
                <h3 class="modal-title" id="modalLabel"><strong>Hapus</strong> Data Acara</h3>
            </div>
            <div class="modal-body">
                <p>Apakah kamu yakin ingin menghapus data acara?</p>
                <p class="text-warning"><small>This action cannot be undone</small></p>
            </div>
            <div class="modal-footer">
                <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL DELETE SELECTED ACARA -->

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