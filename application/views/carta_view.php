<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body id="funciona" name="funciona">
<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;" align="center" data-maxwidth="600"><img style="padding: 0px 0px; display: block;"  id="img" loop="loop" src="http://insafe.web/File/plugins/images/logo.svg" width="1100" height="220" border="0" align="one_image" tabindex="0" /></td>
</tr>
</tbody>
</table>

<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;width: 1100px;height: 80px; font-family: arial" align="center"><strong>GLOBAL SAFETY SUPPLIES S.A.S</strong></td>
</tr>
</tbody>
</table>

<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;width: 1100px;height: 106px; font-family: arial" align="center">CERTIFICA</td>
</tr>
</tbody>
</table>

<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;width: 1100px;height: 130px; font-family: arial" align="justify">Qué <span style="text-transform: uppercase;"><?php echo $certificados[0]->certificado_nombre ?></span> identificado(a) con cédula de ciudadanía No. <span style="text-transform: uppercase;"><?php echo $certificados[0]->certificado_cedula ?></span>,  realizó  y  aprobó  el  curso  de  PERSONA  COMPETENTE  PARA  LA REVISIÓN  E  INSPECCIÓN  DE  LOS  EQUIPOS  DE PROTECCIÓN  CONTRA  CAÍDAS  DE  LA MARCA INSAFE FALL PROTECCIÓN, número de certificado <span style="text-transform: uppercase;"><?php echo $certificados[0]->certificado_numero ?></span>, <span><?php echo $fechaExp ?></span>.</td>
</tr>
</tbody>
</table>

<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;width: 1100px;height: 60px; font-family: arial" align="justify">ESTADO: <span style="text-transform: uppercase;">
	<?php if($certificados[0]->estado_id == 1){ 
		echo 'Vigente'; 
	}else{ 
		echo 'Vencido'; 
	} ?></span>.</td>
</tr>
</tbody>
</table>

<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;width: 1100px;height: 130px; font-family: arial" align="justify"><span> <?php echo $fechaHoy ?> </span> </td>
</tr>
</tbody>
</table>

<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;width: 1100px;height: 30px; font-family: arial" align="justify">
	Firmado digitalmente por<br>
	Daniel Felipe Jaimes Martínez<br>
	GERENTE GENERAL<br>
	GLOBAL SAFETY SUPPLIES S.A.S</td>
</tr>
</tbody>
</table>

<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;" align="center"><img style="padding: 0px 0px; display: block;" data-maxwidth="600" id="img" loop="loop" src="<?php echo base_url() ?>File/plugins/images/fot-cer.svg" width="1100" height="369" border="0" align="one_image" tabindex="0" /></td>
</tr>
</tbody>
</table>
</body>
</html>