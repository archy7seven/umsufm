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
                                <h3>Projects</h3>
                                <span>Activity of projects by members</span>
                            </div>
                            <ul class="panel-controls" style="margin-top: 2px;">
                                <li><a href="index.html#" class="panel-refresh" data-toggle="tooltip" data-placement="top" title="Refresh"><span class="fa fa-refresh"></span></a></li>
                                <li class="dropdown">
                                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                        <li><a href="index.html#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                    </ul>                                        
                                </li>                                        
                            </ul>
                        </div>
                        <div class="panel-body panel-body-table">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50%">Project</th>
                                            <th width="20%">Status</th>
                                            <th width="30%">Activity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Atlant</strong></td>
                                            <td><span class="label label-danger">Developing</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Gemini</strong></td>
                                            <td><span class="label label-warning">Updating</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%</div>
                                                </div>
                                            </td>
                                        </tr>                                                
                                        <tr>
                                            <td><strong>Taurus</strong></td>
                                            <td><span class="label label-warning">Updating</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 72%;">72%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Leo</strong></td>
                                            <td><span class="label label-success">Support</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Virgo</strong></td>
                                            <td><span class="label label-success">Support</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                </div>
                                            </td>
                                        </tr>                                                
                                        <tr>
                                            <td><strong>Aquarius</strong></td>
                                            <td><span class="label label-success">Support</span></td>
                                            <td>
                                                <div class="progress progress-small progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                                </div>
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