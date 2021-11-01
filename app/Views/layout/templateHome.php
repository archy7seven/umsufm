<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title><?= $title . " | " . $appName; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="theme/css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->

</head>

<body>

    <?= $this->renderSection('content'); ?>

    <!-- START PRELOADS -->
    <audio id="audio-alert" src="theme/audio/alert.mp3" preload="auto"></audio>
    <audio id="audio-fail" src="theme/audio/fail.mp3" preload="auto"></audio>
    <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="theme/js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="theme/js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- <script type='text/javascript' src='theme/js/plugins/popper/popper.min.js'></script> -->
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src='theme/js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="theme/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="theme/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

    <script type="text/javascript" src="theme/js/plugins/morris/raphael-min.js"></script>
    <script type="text/javascript" src="theme/js/plugins/morris/morris.min.js"></script>
    <script type='text/javascript' src='theme/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
    <script type='text/javascript' src='theme/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
    <script type='text/javascript' src='theme/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
    <script type="text/javascript" src="theme/js/plugins/owl/owl.carousel.min.js"></script>
    <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-file-input.js"></script>
    <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-select.js"></script>
    <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript" src="theme/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="theme/js/plugins/dropzone/dropzone.min.js"></script>
    <script type='text/javascript' src='theme/js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="theme/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="theme/js/plugins/fileinput/fileinput.min.js"></script>
    <script>
        $(function(){
                $("#file-simple").fileinput({
                        showUpload: false,
                        showCaption: false,
                        browseClass: "btn btn-danger",
                        fileType: "any"
                });
            })            
    </script>

    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    <!-- <script type="text/javascript" src="theme/js/settings.js"></script> -->

    <script type="text/javascript" src="theme/js/plugins.js"></script>
    <script type="text/javascript" src="theme/js/actions.js"></script>

    <!-- <script type="text/javascript" src="theme/js/demo_dashboard.js"></script> -->
    <!-- END TEMPLATE -->
    <!-- END TIME -->
    <!-- END SCRIPTS -->


</body>

</html>