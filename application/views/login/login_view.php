<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="new-login-register">
      <div class="lg-info-panel">
              <div class="inner-panel">
                  <a href="javascript:void(0)" class="p-20 di"><img src="<?php echo base_url() ?>File/plugins/images/admin-logo.png"></a>
                  <div class="lg-content">
                      <h2>Tecnología Below<br>The Line</h2>
                      <p class="text-muted">Esta plataforma permite el diseño de activaciones, control de inventarios promocionales y gestión de bases de datos de consumidores; así como la integración de juegos digitales.</p>
                  </div>
                  <a href="javascript:void(0)" class="p-20 di by-link"><img src="<?php echo base_url() ?>File/plugins/images/by-link.png"></a>
              </div>
      </div>
      <div class="new-login-box">
                <div class="white-box">
                    <h3 class="box-title m-b-0 text-login">Bienvenido a <?= $this->NombreApp; ?></h3>
                  <form class="form-horizontal new-lg-form" id="loginform" action="<?php echo base_url() ?>Login/logeo" method='post'>
                    
                    <div class="form-group  m-t-20">
                      <div class="col-xs-12">
                       <!--<label>Cedula</label>!-->
                        <input class="form-control" type="text" required="true" placeholder="Cedula" id="Usuario" name="Usuario">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12">
                        <!--<label>Contraseña</label>-->
                        <input class="form-control" type="password" required="true" placeholder="Contraseña" name="Password1" id="Password1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="checkbox checkbox-info pull-left p-t-0">
                          <input id="checkbox-signup" type="checkbox">
                          <label for="checkbox-signup login-text-p"> Recordar tu contraseña </label>
                        </div>
                        <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Recuperar Contraseña?</a> </div>
                    </div>
                    <?php if(isset($mensaje)){ ?>
                            <div class="alert alert-<?= ($bandera) ?'success' : 'danger' ?> alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <?php echo $mensaje ?> 
                            </div>
                    <?php   }   ?>
                    <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">INICIAR SESIÓN</button>
                      </div>
                    </div>
                    
                    <!--redes sociales

                    <p class="login-text-p">Ingresa conectandote con tus redes sociales</p>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"  title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"  title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
                      </div>
                    </div>-->
                    <div class="form-group m-b-0">
                      <div class="col-sm-12 text-center">
                        <p class="login-text-p">¿No tienes una cuenta?<a href="register.html" class="text-primary m-l-5"><b>Crea tu cuenta</b></a> necesitas menos de un minuto</p>
                      </div>
                    </div>
                  </form>
                  <form class="form-horizontal" id="recoverform" action="<?= base_url() ?>login/olvidecontrasena" method='post'>
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <h3>Recuperar contraseña</h3>
                        <p class="text-muted">¡Ingrese su correo electrónico y le enviaremos las instrucciones! </p>
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <input class="form-control" type="email" name="email" required="" placeholder="Email">
                      </div>
                    </div>
                    <?php if(isset($mensaje)){ ?>
                            <div class="alert alert-<?= ($bandera) ?'success' : 'danger' ?> alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> <?php echo $mensaje ?> 
                            </div>
                    <?php   }   ?>
                    <div class="form-group text-center m-t-20">
                      <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reiniciar</button>
                      </div>
                    </div>
                  </form>
                </div>
      </div>            
</section>