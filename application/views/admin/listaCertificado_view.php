<body class="fix-header">
        <!-- /page content -->
    <?php 
      echo $nav;
    ?>
               <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Certificados Lista</h3><br>
                            <div class="table-responsive">
                                <table id="demo-foo-row-toggler1" class="table toggle-circle table-hover inverse-bordered-table inverse-bordered-table">
                                <thead>
                                    <tr>
                                            <th>Numero de certificado</th>
                                            <th>Nombre</th>
                                            <th>Cedula</th>
                                            <th>Fecha expedición</th>
                                            <th>Fecha vencimiento</th>
                                            <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!is_null($data['certificados'])) { 
                                        foreach ($data['certificados'] as $key) { ?>
                                            <tr>
                                                <td><?php echo $key->certificado_numero ?></td>
                                                <td><?php echo $key->certificado_nombre ?></td>
                                                <td><?php echo $key->certificado_cedula ?></td>
                                                <td><?php echo $key->certificado_expedicion ?></td>
                                                <td><?php echo $key->certificado_vencimiento ?></td>
                                                <td><?php echo $key->estado_id = (1) ? 'activado' : 'vencido' ; ?></td>
                                            </tr>
                                    <?php 
                                        } 
                                    }else { ?>
                                            <tr>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                            </tr>
                                    <?php 
                                    } ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                
    <?php 
      echo $footer;
    ?>
    