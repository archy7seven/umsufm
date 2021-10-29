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
                                <h3>Penyiar</h3>
                                <span>Berikut Data Penyiar UMSU FM</span>
                            </div>
                            <ul class="panel-controls" style="margin-top: 2px;">
                                <button Type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahPenyiar">Tambah Data</button>
                                <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>                                     
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
                                            <th width="75%">Nama Penyiar</th>
                                            <th width="20%"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody style=>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                        <label for="checkbox1"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Wan Khafi</td>
                                            <td>
                                                 <center>
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar">Edit Data</button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                                        <label for="checkbox2"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Bess</td>
                                            <td>
                                                 <center>
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar">Edit Data</button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                                        <label for="checkbox3"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Putri</td>
                                            <td>
                                                 <center>
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar">Edit Data</button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                                        <label for="checkbox4"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Rara</td>
                                            <td>
                                                 <center>
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar">Edit Data</button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                                        <label for="checkbox5"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Dian
                                            <td>
                                                 <center>
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar">Edit Data</button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox6" name="options[]" value="1">
                                                        <label for="checkbox6"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Rara dan Putri</td>
                                            <td>
                                                 <center>
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar">Edit Data</button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox7" name="options[]" value="1">
                                                        <label for="checkbox7"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Rara dan Dian</td>
                                            <td>
                                                 <center>
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar">Edit Data</button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox8" name="options[]" value="1">
                                                        <label for="checkbox8"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Play Record</td>
                                            <td>
                                                 <center>
                                                    <button Type="button" class="btn btn-primary" data-toggle="modal" data-target="#editPenyiar">Edit Data</button>
                                                    <button Type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusPenyiar">Hapus Data</button>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="checkbox9" name="options[]" value="1">
                                                        <label for="checkbox9"></label>
                                                    </span>
                                                </center>
                                            </td>
                                            <td>Operator</td>
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

<!-- START MODAL TAMBAH PENYIAR -->
<div class="modal fade" id="tambahPenyiar" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="modalLabel"><strong>Tambah</strong> Data Penyiar</h3>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Nama Penyiar</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Satu orang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Lebih dari satu orang
                        </label>
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
<!-- END MODAL TAMBAH PENYIAR -->

<!-- START MODAL DELETE PENYIAR -->
<div class="modal fade" id="hapusPenyiar" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss="modal" aria-label="Close"><div aria-hidden="true">&times;</div></button>
                <h3 class="modal-title" id="modalLabel"><strong>Hapus</strong> Data Penyiar</h3>
            </div>
            <div class="modal-body">
                <p>Apakah kamu yakin ingin menghapus data penyiar?</p>
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

<!-- START MODAL EDIT PENYIAR -->
<div class="modal fade" id="editPenyiar" arialabelledby="staticBackdropLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type=button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="modalLabel"><strong>Edit</strong> Data Penyiar</h3>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Nama Penyiar</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Satu orang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Lebih dari satu orang
                        </label>
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
<!-- END MODAL EDIT PENYIAR -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>                    
                <p>Press No if you want to continue work. Press Yes to logout current user.</p>
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

<!-- START TIME -->
var input = $('#manual-operations-input').pickatime({
autoclose: true,
'default': 'now'
});

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
e.stopPropagation();
input.pickatime('show').pickatime('toggleView', 'minutes');
});
<!-- END TIME -->
<?= $this->endSection();?>