<div class="container">
	<div class="col-md-6">
		<h1>VERIFICACIÓN DE INSPECTORES</h1>
		<p>Ingrese los siguientes datos para verificar su validez:</p>
		<form action="<?php base_url() ?>verificar" method="post">
			<label class="col-md-12">NO. DE DOCUMENTO O NO. DE CERTIFICADO</label>
			<input class="col-md-12" type="text" name="cedula" id="cedula" required="true">
			<button class="b-consultar" type="submit">VERIFICAR</button>
		</form>
			
	</div>
</div>

<center>
	<table border=1 cellspacing=0 style="font-family: helvetica">
		<thead style="background: #d1d1d1">
			<td>NO. CERTIFICADO</td>
			<td>NO. CEDULA</td>
			<td>NOMBRES Y APELLIDOS</td>
			<td>FECHA EXPEDICIÓN</td>
			<td>FERCHA VENCIMIENTO</td>
			<td>ESTADO</td>
			<td>VER CERTIFICADO/PDF</td>
		</thead>
		<tbody>
			<?php if (!is_null($certificados)) { 
	        foreach ($certificados as $key) { ?>
	                <tr>
	                    <td><?php echo $key->certificado_numero ?></td>
	                    <td><?php echo $key->certificado_cedula ?></td>
	                    <td><?php echo $key->certificado_nombre ?></td>
	                    <td><?php echo $key->certificado_expedicion ?></td>
						<td><?php echo $key->certificado_vencimiento ?></td>
						<td><?php if($key->estado_id == 1){ 
							echo 'Vigente';
						}else{ 
							echo 'Vencido';
						}?></td>
						<td><a href="<?php echo base_url() ?>Consulta/imprimir/<?php echo $key->certificado_id?>" target="_blank"><button>Ver Certificado</button></a></td>
	                </tr>
	        <?php 
	            } 
	        }else { ?>
	        <h5 style="font-family: helvetica;background: #d1d1d1;padding: 10px;border-radius: 5px;font-weight: normal;width: 368px;">No se encontraron resultados de este número de certificado ó número de documento</h5>
	                <tr>
	                    <td>N/A</td>
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
</center>