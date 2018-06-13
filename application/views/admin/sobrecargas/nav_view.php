
<!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="<?= base_url().$this->session->userdata('rol_index'); ?>">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="<?php echo base_url()?>File/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo base_url()?>File/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo base_url()?>File/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo base_url()?>File/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-gmail"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">

                            <li>
                                <div class="drop-title">You have <?php echo(count($datos["noticias"])); ?> new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <?php
                                    if (!is_null($datos["noticias"])) {
                                        foreach ($datos["noticias"] as $key) 
                                        {
                                            $date = new DateTime($key->noticia_fecha);
                                            $retVal = ((int) $key->noticia_vista = 0 ) ? 'pawandeep.jpg' : 'pawandeep.jpg' ;
                                    ?>
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo base_url()?>File/plugins/images/users/<?= $retVal ?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5><?= $key->noticia_texto ?></h5> <span class="mail-desc"><?= substr($key->noticia_descripcion,0,20) ?></span> <span class="time"><?= $date->format('H:i  A')?></span> </div>
                                    </a>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- .Task dropdown -->
                    <!--
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-check-circle"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    -->
                    <!-- .Megamenu -->
                    <!--
                    <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Forms Elements</li>
                                    <li><a href="form-basic.html">Basic Forms</a></li>
                                    <li><a href="form-layout.html">Form Layout</a></li>
                                    <li><a href="form-advanced.html">Form Addons</a></li>
                                    <li><a href="form-material-elements.html">Form Material</a></li>
                                    <li><a href="form-float-input.html">Form Float Input</a></li>
                                    <li><a href="form-upload.html">File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-img-cropper.html">Image Cropping</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Advance Forms</li>
                                    <li><a href="form-dropzone.html">File Dropzone</a></li>
                                    <li><a href="form-pickers.html">Form-pickers</a></li>
                                    <li><a href="form-wizard.html">Form-wizards</a></li>
                                    <li><a href="form-typehead.html">Typehead</a></li>
                                    <li><a href="form-xeditable.html">X-editable</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                                    <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Table Example</li>
                                    <li><a href="basic-table.html">Basic Tables</a></li>
                                    <li><a href="table-layouts.html">Table Layouts</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                    <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                                    <li><a href="responsive-tables.html">Responsive Tables</a></li>
                                    <li><a href="editable-tables.html">Editable Tables</a></li>
                                    <li><a href="foo-tables.html">FooTables</a></li>
                                    <li><a href="jsgrid.html">JsGrid Tables</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Charts</li>
                                    <li> <a href="flot.html">Flot Charts</a> </li>
                                    <li><a href="morris-chart.html">Morris Chart</a></li>
                                    <li><a href="chart-js.html">Chart-js</a></li>
                                    <li><a href="peity-chart.html">Peity Charts</a></li>
                                    <li><a href="knob-chart.html">Knob Charts</a></li>
                                    <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                                    <li><a href="extra-charts.html">Extra Charts</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    -->
                    <!-- /.Megamenu -->
                    
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <?php 
                    if ($this->session->userdata('rol_nombre') == "Promotor" and is_null($this->session->userdata('id_usuariosBusqueda')) ) {
                    ?>
                    <li>
                        <form action="<?= base_url(); ?>admin/Usuario/buscarusuario" method="POST" class="app-search m-r-10">
                            <input type="text" class="form-control" placeholder="Buscar Cedula..." class="form-control" name="usuario"> 
                            <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button> 
                        </form>
                    </li>
                    <?php 
                    }
                    else
                    {
                        if (!is_null($this->session->userdata('id_usuariosBusqueda'))) {
                            $datosSessionArray = $this->session->userdata('id_usuariosBusqueda'); ?>
                            <li>
                                <h4 class="pull-right"><?php echo $datosSessionArray->usuario_nombre.' '.$datosSessionArray->usuario_apellido; ?>
                                    <a class='btn btn-warning' onclick="cerrarSesionSecundaria()">
                                    Cambiar Usuario <i class="fa fa-close"></i></a>
                                </h4>
                            </li>
                    <?php  
                        }
                    } ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="<?php echo base_url()?>File/plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $this->session->userdata('nombre'); ?> <?php echo $this->session->userdata('apellido'); ?></b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="<?php echo base_url()?>File/plugins/images/users/varun.jpg" alt="user" /></div>
                                    <div class="u-text">
                                        <h4><?php echo $this->session->userdata('nombre'); ?> <?php echo $this->session->userdata('apellido'); ?></h4>
                                        <p class="text-muted"><?php echo $this->session->userdata('correo'); ?> </p><a href="" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href=""><i class="ti-user"></i> Ver Perfil</a></li>
                            <!--
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            -->
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url() ?>login/cerrarSesion"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="<?php echo base_url()?>File/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('nombre'); ?> <?php echo $this->session->userdata('apellido'); ?><span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href=""><i class="ti-user"></i> Ver Perfil</a></li>
                            <!--
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            -->
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url() ?>login/cerrarSesion"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                     <?php
                if ($this->session->userdata('estado_nombre') == "Activado") {
                    foreach ($datos["listadomenu"] as $key) { 
                ?>  
                    <li>
                        <a href="<?= ($key['link']=="" or is_null($key['link'])) ? '#' : base_url().$key['link']?>" class="waves-effect">
                            <i class="<?php echo $key['logo'] ?> fa-fw" data-icon="v"></i> 
                            <span class="hide-menu"><?php echo $key['Nombre'] ?> 
                                <?= ($key['link']=="" or is_null($key['link'])) ? '<span class="fa arrow"></span> ' : ''?>
                            </span>
                        </a> 
                        <?php                   
                        if ($key['link']== "" or is_null($key['link'])) {  
                            foreach ($key['menu'] as $key1) { 
                        ?> 
                            <ul class="nav nav-second-level">
                                <li> 
                                    <a href="<?= ($key1['link']=="" or is_null($key1['link'])) ? '#' : base_url().$key1['link']?>">
                                        <i class="<?php echo $key1['logo'] ?> fa-fw"></i>
                                        <span class="hide-menu"><?php echo $key1['Nombre'] ?>
                                            <?= ($key1['link']=="" or is_null($key1['link'])) ? '<span class="fa arrow"></span> ' : ''?>
                                        </span>
                                    </a> 
                                    <?php
                                    if ($key1['link']== "" or is_null($key1['link'])) 
                                    {
                                        echo '<ul class="nav nav-third-level">';
                                        foreach ($key1['submenu'] as $key2) { 
                                            if (!is_null($key2["Nombre"]) ) {
                                        ?>
                                        
                                            <li>
                                                <a href="<?php echo base_url().$key2['link']; ?>"><i class="<?php echo $key2['logo'] ?> fa-fw"></i> 
                                                    <span class="hide-menu"><?php echo $key2['Nombre'] ?></span>
                                                </a>
                                            </li> 
                                        
                                        <?php 
                                            }
                                        }
                                        echo '</ul>';
                                    }
                                    ?>
                                </li>
                            </ul>
                        <?php 
                            } 
                        }
                        ?> 
                    </li>
                
                <?php 
                    }
                } 
                if ($this->session->userdata('rol_id') ==  2) {
                ?>
                    <li>
                        <a href="<?= base_url().$this->session->userdata('rol_index'); ?>" class="waves-effect">
                            <i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> 
                            <span class="hide-menu"> Dashboard <span class="fa arrow"></span> </span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/index.php/datos_js_20.php"><i class=" fa-fw">1</i><span class="hide-menu">Dashboard 1</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/index2.php/datos_js_21.php"><i class=" fa-fw">2</i><span class="hide-menu">Dashboard 2</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/index3.php/datos_js_22.php"><i class=" fa-fw">3</i><span class="hide-menu">Dashboard 3</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cart-outline fa-fw" data-icon="v"></i> <span class="hide-menu"> eCommerce <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/products.php"><i class="fa-fw">P</i><span class="hide-menu">Products</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/product-orders.php"><i class="fa-fw">PO</i><span class="hide-menu">Product Orders</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/product-details.php"><i class="fa-fw">PD</i><span class="hide-menu">Product Details</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/product-edit.php"><i class="fa-fw">PE</i><span class="hide-menu">Product Edit</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/product-cart.php"><i class="fa-fw">PC</i><span class="hide-menu">Product Cart</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/product-checkout.php"><i class="fa-fw">PC</i><span class="hide-menu">Product Checkout</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">20</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/panels-wells.php"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Panels and Wells</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/panel-ui-block.php/datos_js_31.php"><i data-icon="&#xe025;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Panels With BlockUI</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/buttons.php/"><i class="ti-layout-menu fa-fw"></i> <span class="hide-menu">Buttons</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/sweatalert.php"><i class="ti-alert fa-fw"></i> <span class="hide-menu">Sweat alert</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/typography.php"><i data-icon="k" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Typography</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/grid.php"><i data-icon="&#xe009;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Grid</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/tabs.php"><i  class="ti-layers fa-fw"></i> <span class="hide-menu">Tabs</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/tab-stylish.php/datos_js_33"><i class=" ti-layers-alt fa-fw"></i> <span class="hide-menu">Stylish Tabs</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/modals.php"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Modals</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/progressbar.php"><i class="ti-line-double fa-fw"></i> <span class="hide-menu">Progress Bars</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/notification.php/datos_js_30.php"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Notifications</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/carousel.php/"><i class="ti-layout-slider fa-fw"></i> <span class="hide-menu">Carousel</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/list-style.php"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">List & Media object</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/user-cards.php"><i class="ti-user fa-fw"></i> <span class="hide-menu">User Cards</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/timeline.php"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Timeline</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/timeline-horizontal.php/datos_js_34.php"><i class="ti-layout-list-thumb fa-fw"></i> <span class="hide-menu">Horizontal Timeline</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/nestable.php/datos_js_29.php"><i class="ti-layout-accordion-separated fa-fw"></i> <span class="hide-menu">Nesteble</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/range-slider.php"><i class=" ti-layout-slider-alt fa-fw"></i> <span class="hide-menu">Range Slider</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/tooltip-stylish.php"><i class="ti-comments-smiley fa-fw"></i> <span class="hide-menu">Stylish Tooltip</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/bootstrap.php/"><i class="ti-rocket fa-fw"></i> <span class="hide-menu">Bootstrap UI</span></a></li>
                        </ul>
                    </li>
                    <li> 
                        <a href="#" class="waves-effect active">
                            <i class="mdi mdi-content-copy fa-fw"></i> 
                            <span class="hide-menu">Sample Pages<span class="fa arrow"></span>
                            <span class="label label-rouded label-warning pull-right">30</span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/starter-page.php">
                                <i class="ti-layout-width-default fa-fw"></i> <span class="hide-menu">Starter Page</span></a>
                            </li>
                            <li>
                                <a href="blank.html">
                                    <i class="ti-layout-sidebar-left fa-fw"></i> 
                                    <span class="hide-menu">Blank Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="waves-effect">
                                    <i class="ti-lock fa-fw"></i>
                                    <span class="hide-menu">Authentication</span>
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/login.php"><i class="fa-fw">L</i> <span class="hide-menu">Login Page</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/login2.php"><i class="fa-fw">L</i> <span class="hide-menu">Login v2</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/register.php"><i class="fa-fw">R</i> <span class="hide-menu">Register</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/register2.php"><i class="fa-fw">R</i> <span class="hide-menu">Register v2</span></a></li>
                                    <li>
                                        <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/register3.php"><i class="fa-fw">3</i> <span class="hide-menu">3 Step Registration</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/recoverpw.php"><i class="fa-fw">R</i> <span class="hide-menu">Recover Password</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/lock-screen.php"><i class="fa-fw">L</i> <span class="hide-menu">Lock Screen</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-info-alt fa-fw"></i><span class="hide-menu">Error Pages</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/400.php"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 400</span></a></li>
                                    <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/403.php"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 403</span></a></li>
                                    <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/404.php"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 404</span></a></li>
                                    <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/500.php"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 500</span></a></li>
                                    <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/503.php"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error 503</span></a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/lightbox.php"><i class="fa-fw">L</i> <span class="hide-menu">Lightbox Popup</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/treeview.php"><i class="fa-fw">T</i> <span class="hide-menu">Treeview</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/search-result.php"><i class="fa-fw">S</i> <span class="hide-menu">Search Result</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/utility-classes.php"><i class="fa-fw">U</i> <span class="hide-menu">Utility Classes</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/custom-scroll.php/datos_js_6.php"><i class="fa-fw">C</i> <span class="hide-menu">Custom Scrolls</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/admin/animation.php/datos_js_1.php"><i class="fa-fw">A</i> <span class="hide-menu">Animations</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/profile.php"><i class="fa-fw">P</i> <span class="hide-menu">Profile</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/invoice.php/datos_js_24.php"><i class="fa-fw">I</i> <span class="hide-menu">Invoice</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/faq.php"><i class="fa-fw">F</i> <span class="hide-menu">FAQ</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/gallery.php/datos_js_19.php"><i class="fa-fw">G</i> <span class="hide-menu">Gallery</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/pricing.php"><i class="fa-fw">P</i> <span class="hide-menu">Pricing</span></a></li>
                        </ul>
                    </li>
                    <li><a href="inbox.html" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/chat.php/datos_js_4.php"><i class="ti-comments-smiley fa-fw"></i><span class="hide-menu">Chat-message</span></a></li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-desktop fa-fw"></i><span class="hide-menu">Inbox</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/inbox.php"><i class="ti-email fa-fw"></i><span class="hide-menu">Mail box</span></a></li>
                                    <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/inbox-detail.php"><i class="ti-layout-media-left-alt fa-fw"></i><span class="hide-menu">Inbox detail</span></a></li>
                                    <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/compose.php/datos_js_5.php"><i class="ti-layout-media-center-alt fa-fw"></i><span class="hide-menu">Compose mail</span></a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-user fa-fw"></i><span class="hide-menu">Contacts</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/contact.php/"><i class="icon-people fa-fw"></i><span class="hide-menu">Contact1</span></a></li>
                                    <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/contact2.php/"><i class="icon-user-follow fa-fw"></i><span class="hide-menu">Contact2</span></a></li>
                                    <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/contact-detail.php/"><i class="icon-user-following fa-fw"></i><span class="hide-menu">Contact Detail</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    <li> <a href="forms.html" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-basic.php"><i class="fa-fw">B</i><span class="hide-menu">Basic Forms</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-layout.php"><i class="fa-fw">L</i><span class="hide-menu">Form Layout</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-advanced.php/datos_js_10.php"><i class="fa-fw">A</i><span class="hide-menu">Form Addons</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-material-elements.php"><i class="fa-fw">M</i><span class="hide-menu">Form Material</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-float-input.php"><i class="fa-fw">F</i><span class="hide-menu">Form Float Input</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-upload.php/datos_js_16.php"><i class="fa-fw">U</i><span class="hide-menu">File Upload</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-mask.php"><i class="fa-fw">M</i><span class="hide-menu">Form Mask</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-img-cropper.php/datos_js_12.php"><i class="fa-fw">C</i><span class="hide-menu">Image Cropping</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-validation.php/"><i class="fa-fw">V</i><span class="hide-menu">Form Validation</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-dropzone.php"><i class="fa-fw">D</i><span class="hide-menu">File Dropzone</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-pickers.php/datos_js_13.php"><i class="fa-fw">P</i><span class="hide-menu">Form-pickers</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-wizard.php/datos_js_17.php"><i class="fa-fw">W</i><span class="hide-menu">Form-wizards</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-typehead.php/datos_js_36.php"><i class="fa-fw">T</i><span class="hide-menu">Typehead</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-xeditable.php/datos_js_18.php"><i class="fa-fw">X</i><span class="hide-menu">X-editable</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-summernote.php/datos_js_14.php"><i class="fa-fw">S</i><span class="hide-menu">Summernote</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-bootstrap-wysihtml5.php/datos_js_11.php"><i class=" fa-fw">W</i><span class="hide-menu">Bootstrap wysihtml5</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/form-tinymce-wysihtml5.php/datos_js_15.php"><i class="fa-fw">T</i><span class="hide-menu">Tinymce wysihtml5</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="tables.html" class="waves-effect"><i class="mdi mdi-table fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">9</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/basic-table.php/"><i class="fa-fw">B</i><span class="hide-menu">Basic Tables</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/table-layouts.php"><i class="fa-fw">L</i><span class="hide-menu">Table Layouts</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/data-table.php/datos_js_7.php"><i class="fa-fw">D</i><span class="hide-menu">Data Table</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/bootstrap-tables.php/"><i class="fa-fw">B</i><span class="hide-menu">Bootstrap Tables</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/responsive-tables.php"><i class="fa-fw">R</i><span class="hide-menu">Responsive Tables</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/editable-tables.php/datos_js_8.php"><i class="fa-fw">E</i><span class="hide-menu">Editable Tables</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/foo-tables.php"><i class="fa-fw">F</i><span class="hide-menu">FooTables</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/jsgrid.php/datos_js_25.php"><i class="fa-fw">J</i><span class="hide-menu">JsGrid Tables</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-chart-bar fa-fw"></i> <span class="hide-menu">Charts<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/flot.php/datos_js_23.php"><i class="fa-fw">F</i><span class="hide-menu">Flot Charts</span></a> </li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/morris-chart.php/datos_js_28.php"><i class="fa-fw">M</i><span class="hide-menu">Morris Chart</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/chart-js.php/datos_js_2.php"><i class="fa-fw">P</i><span class="hide-menu">Chart-js</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/peity-chart.php"><i class="fa-fw">P</i><span class="hide-menu">Peity Charts</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/chartist-js.php/datos_js_3.php"><i class="fa-fw">C</i><span class="hide-menu">Chartist-js</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/knob-chart.php/datos_js_26.php"><i class="fa-fw">K</i><span class="hide-menu">Knob Charts</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/sparkline-chart.php"><i class="fa-fw">S</i><span class="hide-menu">Sparkline charts</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/extra-charts.php/datos_js_9.php"><i class="fa-fw">E</i><span class="hide-menu">Extra Charts</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    <li> <a href="widgets.html" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
                    <li> <a href="#" class="waves-effect"><i class="mdi mdi-emoticon fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/fontawesome.php"><i class="fa-fw">F</i><span class="hide-menu">Font awesome</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/themifyicon.php"><i class="fa-fw">T</i><span class="hide-menu">Themify Icons</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/simple-line.php"><i class="fa-fw">S</i><span class="hide-menu">Simple line Icons</span></a> </li>
                            <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/material-icons.php"><i class="fa-fw">M</i><span class="hide-menu">Material Icons</span></a> </li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/linea-icon.php"><i class="fa-fw">L</i><span class="hide-menu">Linea Icons</span></a></li>
                            <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/weather.php"><i class="fa-fw">W</i><span class="hide-menu">Weather Icons</span></a></li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/map-google.php" class="waves-effect"><i class="mdi mdi-google-maps fa-fw"></i><span class="hide-menu">Google Map</span></a> </li>
                    <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/map-vector.php/datos_js_27.php" class="waves-effect"><i class="mdi mdi-map-marker fa-fw"></i><span class="hide-menu">Vector Map</span></a> </li>
                    <li> <a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/calendar.php/" class="waves-effect"><i class="mdi mdi-calendar-check fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-checkbox-multiple-marked-outline fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="javascript:void(0)"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Second Level Item</span></a> </li>
                            <li> <a href="javascript:void(0)"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Second Level Item</span></a> </li>
                            <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Third Level </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">T</i><span class="hide-menu">Third Level Item</span></a> </li>
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">M</i><span class="hide-menu">Third Level Item</span></a> </li>
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">R</i><span class="hide-menu">Third Level Item</span></a> </li>
                                    <li> <a href="javascript:void(0)"><i class=" fa-fw">G</i><span class="hide-menu">Third Level Item</span></a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/documentation.php" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
                    <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/gallery.php/datos_js_19.php" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
                    <li><a href="<?php echo base_url() ?>/admin/Home/menuviejoControler/admin/faq.php" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li>
                    <?php } ?>
                    <li class="devider"></li>
                    <li><a href="<?php echo base_url() ?>login/cerrarSesion" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Logout</span></a></li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?= (isset($datos["Titulo"])) ? $datos["Titulo"] : 'Programador' ; ?></h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <?php 
                        if ($this->session->userdata('rol_id') ==  $this->menutotal) {
                        ?>
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                        <?php 
                        }
                        ?>
                        <ol class="breadcrumb">
                            <li><a href="index.html"><?= (isset($datos["TipoContenido"])) ? $datos["TipoContenido"] : 'Dashboard' ; ?></a></li>
                            <li class="active"><?= (isset($datos["Titulo"])) ? $datos["Titulo"] : 'Programador' ; ?></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>