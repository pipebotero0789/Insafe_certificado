<center>
	<table border=1 cellspacing=0>
		<thead>
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
</center>