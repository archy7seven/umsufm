<?= $this->extend('layout/templateHome');?>

<?= $this->section('content');?>
<!-- START PAGE CONTAINER -->
<div class="page-container">
    
    <?= $this->include('layout/templateSidebar');?>
    
    <!-- PAGE CONTENT -->
    <div class="page-content">
        
        <?= $this->include('layout/templateHead');?>                  

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
                                <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusAcara">Hapus Data</button>                                        
                            </ul>
                        </div>
                        <div class="panel-body panel-body-table">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width=5%>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="selectAll">
                                                        <label for="selectAll"></label>
                                                    </span>
                                                </center>
                                            </th>
                                            <th width="15%">Nama Acara</th>
                                            <th width="15%">Nama Penyiar</th>
                                            <th width="15%">Jadwal Acara</th>
                                            <th width="15%">Waktu Acara</th>
                                            <th width="15%">Status Acara</th>
                                            <th width="35%"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Opening Siaran, Azan Subuh, Tausiah & Tembang </td>
                                            <td>Wan Khafi</td>
                                            <td>Senin, Selasa, Rabu, Kamis, Jum'at, Sabtu, Minggu</td>
                                            <td>05:00:00 - 06:00:00</td>
                                            <td>Tayang</td>
                                            <td>
                                                 <center>
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar">Edit Data</button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>
                                                </center>
                                            </td>
                                        </tr>

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
<div class="modal fade" id="tambahAcara" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="modalLabel"><strong>Tambah</strong> Data Acara</h3>
            </div>
            <div class="modal-body">
                <form>
                    <div clas="form-check">
                        <label>Flayer Acara</label>
                        <form method="post" enctype="multipart/form-data"> <input type="file" id="files" name="files" multiple="multiple" />
                    </div>
                    <br>
                    <div class="form-check">
                        <label>Nama Acara</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-check">
                    <label for="pilihPenyiar">Nama Penyiar</label>
                        <select class="form-control" id="pilihPenyiar">
                            <option></option>
                            <option>Wan Khafi</option>
                            <option>Bess</option>
                            <option>Rara</option>
                            <option>Dian</option>
                            <option>Putri</option>
                            <option>Rara dan Putri</option>
                            <option>Rara dan Dian</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="hariCheck1">
                        <label class="form-check-label" for="hariCheck1">Senin</label>
                        <input type="checkbox" class="form-check-input" id="hariCheck2">
                        <label class="form-check-label" for="hariCheck2">Selasa</label>
                        <input type="checkbox" class="form-check-input" id="hariCheck3">
                        <label class="form-check-label" for="hariCheck3">Rabu</label>
                        <input type="checkbox" class="form-check-input" id="hariCheck4">
                        <label class="form-check-label" for="hariCheck4">Kamis</label>
                        <input type="checkbox" class="form-check-input" id="hariCheck5">
                        <label class="form-check-label" for="hariCheck5">Jumat</label>
                        <input type="checkbox" class="form-check-input" id="hariCheck6">
                        <label class="form-check-label" for="hariCheck6">Sabtu</label>
                    </div>
                    <br>
                    <div class="form-check">
                        <input type="text" id="manual-operations-input" class="form-control" placeholder="Jam Mulai"> 
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1">
                        <label class="form-check-label" for="radio1">
                            Tayang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1">
                        <label class="form-check-label" for="radio1">
                            Segera Tayang
                        </label>
                    </div>
                    <br>
                    <div class="form-check">
                        <div><label>Arsipkan acara?</label></div>
                        <span class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1">
                            <label class="form-check-label" for="radio1">
                                Ya
                            </label>
                        </span>
                        <span class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1">
                            <label class="form-check-label" for="radio1">
                                Tidak
                            </label>
                        </span>
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
<!-- END MODAL TAMBAH ACARA -->

<!-- START MODAL DELETE PENYIAR -->
<div class="modal fade" id="hapusAcara" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss="modal" aria-label="Close"><div aria-hidden="true">&times;</div></button>
                <h3 class="modal-title" id="modalLabel"><strong>Hapus</strong> Data Acara</h3>
            </div>
            <div class="modal-body">
                <p>Apakah kamu yakin ingin menghapus data acara?</p>
                <p class="text-warning"><small>This action cannot be undone</small></p>
            </div>
            <div class="modal-footer">
                <button type="close" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="simpan" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL DELETE PENYIAR -->

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
<?= $this->endSection();?>