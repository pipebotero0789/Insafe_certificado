<!DOCTYPE html>  
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>File/plugins/images/favicon.png">
	<title>Admin - <?= $this->NombreApp.' '.$this->Titulo; ?></title>
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url() ?>File/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>File/plugins/bower_components/css-chart/css-chart.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>File/plugins/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>File/plugins/bower_components/gallery/css/animated-masonry-gallery.css" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/fancybox/ekko-lightbox.min.css" />
    <!-- Editable CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/jsgrid/dist/jsgrid.min.css" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css" />
    <!-- Popup CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!--alerts CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Wizard CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/jquery-wizard-master/css/wizard.css" rel="stylesheet">
    <!-- Typehead CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/typeahead.js-master/dist/typehead-min.css" rel="stylesheet">
    <!-- summernotes CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/summernote/dist/summernote.css" rel="stylesheet" />
    <!-- Cropper CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/cropper/cropper.min.css" rel="stylesheet">
    <!-- Page plugins css -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    <!-- FormValidation -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/jquery-wizard-master/libs/formvalidation/formValidation.min.css" rel="stylesheet">
    <!-- Color picker plugins css -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    <!-- Date picker plugins css -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker plugins css -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>File/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!--Range slider CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>File/plugins/bower_components/ion-rangeslider/css/ion.rangeSlider.skinModern.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/horizontal-timeline/css/horizontal-timeline.css" rel="stylesheet">
    <!--Gauge chart CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/Minimal-Gauge-chart/css/cmGauge.css" rel="stylesheet" type="text/css" />
    <!-- xeditable css -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />
    <!-- Table CSS-->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!--Owl carousel CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- Morris CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>File/plugins/bower_components/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>File/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- wysihtml5 CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" rel="stylesheet" />
    <!-- Dropzone css -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <!-- Footable CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/footable/css/footable.core.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>File/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <!-- Editable CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/jquery-datatables-editable/datatables.css" rel="stylesheet"/>
    <!-- Calendar CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <!-- page CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>File/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!--nestable CSS -->
    <link href="<?php echo base_url() ?>File/plugins/bower_components/nestable/nestable.css" rel="stylesheet" type="text/css" />
    <!-- animation CSS -->
    <link href="<?php echo base_url() ?>File/css/admin/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>File/css/admin/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url() ?>File/css/admin/colors/<?= $this->styleColor; ?>.css" id="theme" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
        <?php
            if ($this->session->userdata('rol_id') ==  $this->menutotal) 
            {
        ?>
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme working">12</a></li>
                            </ul>
                            <ul class="m-t-20 all-demos">
                                <li>
                                    <form action="<?= base_url() ?>admin/Home/cambioColor" method="post">
                                        <input type="hidden" name="colorGuardado" id="colorGuardado" value="<?= $this->styleColor; ?>">
                                        <input class="btn btn-success waves-effect waves-light" type="submit" value="Guardar">
                                        
                                    </form>
                                    
                                </li>
                            </ul>
                            <!--
                            <ul class="m-t-20 all-demos">
                                <li><b>Choose other demos</b></li>
                            </ul>
                            
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>File/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>File/plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>File/plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>File/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>File/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>File/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>File/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="<?php echo base_url() ?>File/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                            -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
        <?php
            }
        ?>