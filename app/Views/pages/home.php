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
            <!-- START WIDGETS -->                    
            <div class="row">
                <div class="col-md-3">
                    
                    <!-- START WIDGET SLIDER -->
                    <div class="widget widget-default widget-carousel">
                        <div class="owl-carousel" id="owl-example">
                            <div>                                    
                                <div class="widget-title">Acara Aktif</div>                                                                        
                                <div class="widget-subtitle">Jumlah per Minggu</div>
                                <div class="widget-int"><?= $jumlah_acara_aktif->countAllResults();?></div>
                            </div>
                            <div>                                    
                                <div class="widget-title">Acara Segera</div>
                                <div class="widget-subtitle">Jumlah per Minggu</div>
                                <div class="widget-int"><?= $jumlah_acara_segera->countAllResults();?></div>
                            </div>
                            <div>                                    
                                <div class="widget-title">Acara Non aktif</div>
                                <div class="widget-subtitle">Jumlah per Minggu</div>
                                <div class="widget-int"><?= $jumlah_acara_arsip->countAllResults();?></div>
                            </div>
                        </div>                            
                        <div class="widget-controls">                                
                            <a href="#!" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>                             
                    </div>         
                    <!-- END WIDGET SLIDER -->
                    
                </div>
                <div class="col-md-3">
                    
                    <!-- START WIDGET MESSAGES -->
                    <div class="widget widget-default widget-item-icon" onclick="location.href='#!';">
                        <div class="widget-item-left">
                            <span class="fa fa-users"></span>
                        </div>                             
                        <div class="widget-data">
                            <div class="widget-int num-count"><?= $jumlah_penyiar->countAllResults();?></div>
                            <div class="widget-title">Penyiar</div>
                            <div class="widget-subtitle">di UMSU FM</div>
                        </div>      
                        <div class="widget-controls">                                
                            <a href="#!" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>
                    </div>                            
                    <!-- END WIDGET MESSAGES -->
                    
                </div>
                <div class="col-md-3">
                    
                    <!-- START WIDGET REGISTRED -->
                    <div class="widget widget-default widget-item-icon" onclick="location.href='#!';">
                        <div class="widget-item-left">
                            <span class="fa fa-inbox"></span>
                        </div>
                        <div class="widget-data">
                            <div class="widget-int num-count"><?= $jumlah_endors->countAllResults();?></div>
                            <div class="widget-title">Endorsement</div>
                            <div class="widget-subtitle">di UMSU FM</div>
                        </div>
                        <div class="widget-controls">                                
                            <a href="#!" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>                            
                    </div>                            
                    <!-- END WIDGET REGISTRED -->
                    
                </div>
                <div class="col-md-3">
                    
                    <!-- START WIDGET CLOCK -->
                    <div class="widget widget-danger widget-padding-sm">
                        <div class="widget-big-int plugin-clock">00:00</div>                            
                        <div class="widget-subtitle plugin-date">Loading...</div>
                        <div class="widget-controls">                                
                            <a href="#!" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>                            
                        <div class="widget-buttons widget-c3">
                            <div class="col">
                                <a href="#!"><span class="fa fa-clock-o"></span></a>
                            </div>
                            <div class="col">
                                <a href="#!"><span class="fa fa-bell"></span></a>
                            </div>
                            <div class="col">
                                <a href="#!"><span class="fa fa-calendar"></span></a>
                            </div>
                        </div>                            
                    </div>                        
                    <!-- END WIDGET CLOCK -->
                    
                </div>
            </div>
            <!-- END WIDGETS -->                    
            
            <div class="row">
                <div class="col-md-12">
                    <!-- START PROJECTS BLOCK -->
                    
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