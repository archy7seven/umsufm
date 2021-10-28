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
                                            <th width=2%>
                                                <center>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="selectAll">
                                                        <label for="selectAll"></label>
                                                    </span>
                                                </center>
                                            </th>
                                            <th width="5%">ID Acara</th>
                                            <th width="10%">Flayer Acara</th>
                                            <th width="15%">Nama Acara</th>
                                            <th width="15%">Nama Penyiar</th>
                                            <th width="15%">Jadwal Acara</th>
                                            <th width="15%">Waktu Acara</th>
                                            <th width="10%">Status Acara</th>
                                            <th width="15%"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
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