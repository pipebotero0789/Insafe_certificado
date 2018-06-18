<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
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
<td class="image" style="padding: 0px 0px; display: block;width: 1100px;height: 130px; font-family: arial" align="justify">Qué JENNYFER PAOLA BENAVIDES NAVARRETE identificado(a) con cédula de ciudadanía No.  1.014.228.853,  realizó  y  aprobó  el  curso  de  PERSONA  COMPETENTE  PARA  LA REVISIÓN  E  INSPECCIÓN  DE  LOS  EQUIPOS  DE PROTECCIÓN  CONTRA  CAÍDAS  DE  LA MARCA INSAFE FALL PROTECCIÓN, número de certificado RPQ-20-XXX, fecha de emisión a los 29 días del mes de mayo de l 2018.</td>
</tr>
</tbody>
</table>

<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;width: 1100px;height: 60px; font-family: arial" align="justify">ESTADO: VIGENTE.</td>
</tr>
</tbody>
</table>

<table class="main k-table" data-type="image" id="66b53801-5799-cbbb-5362-ba9c90a43599" style="background-color: #ffffff; display: table;" width="1100" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody>
<tr>
<td class="image" style="padding: 0px 0px; display: block;width: 1100px;height: 130px; font-family: arial" align="justify">Este documento se realiza a los 29 días del mes de mayo del 2018.</td>
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
<button onclick="demoFromHTML()">PDF</button>
</body>

<script type="text/javascript">
        function demoFromHTML() {
            var pdf = new jsPDF('p', 'pt', 'letter');
            // source can be HTML-formatted string, or a reference
            // to an actual DOM element from which the text will be scraped.
            source = $('#customers')[0];

            // we support special element handlers. Register them with jQuery-style 
            // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
            // There is no support for any other type of selectors 
            // (class, of compound) at this time.
            specialElementHandlers = {
                // element with id of "bypass" - jQuery style selector
                '#bypassme': function(element, renderer) {
                    // true = "handled elsewhere, bypass text extraction"
                    return true
                }
            };
            margins = {
                top: 80,
                bottom: 60,
                left: 40,
                width: 522
            };
            // all coords and widths are in jsPDF instance's declared units
            // 'inches' in this case
            pdf.fromHTML(
                    source, // HTML string or DOM elem ref.
                    margins.left, // x coord
                    margins.top, {// y coord
                        'width': margins.width, // max width of content on PDF
                        'elementHandlers': specialElementHandlers
                    },
            function(dispose) {
                // dispose: object with X, Y of the last line add to the PDF 
                //          this allow the insertion of new lines after html
                pdf.save('Test.pdf');
            }
            , margins);
        }
    </script>
</html>