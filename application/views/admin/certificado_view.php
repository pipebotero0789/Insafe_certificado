<body class="fix-header">
        <!-- /page content -->
    <?php 
      echo $nav;
    ?>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Subir Certificado</h3>
                            <p class="text-muted m-b-30 font-13"> Recuerde subir un archivo excel</p>
                            <?php 
                                if(isset($mensaje)){ 
                                    switch ($mensaje) {
                                        case -1: ?>
                                                <div class="alert alert-success alert-dismissable"> 
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
                                                Se guardo el archivo exitosamente
                                                </div>  
                                        <?php
                                        break;
                                        case -2: ?>
                                                <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                El archivo no pudo ser guardado
                                                </div>  
                                        <?php
                                        break;
                                        case -3: ?>
                                                <div class="alert alert-success alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                Se actualizo el registro exitosamente 
                                                </div>  
                                        <?php
                                        break;
                                        case -4: ?>
                                                <div class="alert alert-danger alert-dismissable">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                El registro no pudo ser actualizado
                                                </div>  
                                        <?php
                                        break;
                                        default:
                                        break;
                                    } ?>    
                                <?php   
                                }   ?>
                                <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url()?>admin/Certificado/subirArchivo" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-12">Subir Archivo</label>
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Selecciona el archivo</span> <span class="fileinput-exists">Cambiar</span>
                                                <input type="file" name="file"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Cancelar</a> </div>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <!-- /.row -->
    <?php 
      echo $footer;
    ?>
    