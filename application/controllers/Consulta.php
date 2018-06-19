<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consulta extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
        parent::__construct();
        $this->load->model('crud/Crud_certificado');
        $this->load->library('pdf');
    }

	public function index($mensaje = null,$bandera = null)
	{
			$dataSend = array(
	            "mensaje" => $mensaje,
	            'bandera' => $bandera
	        );
			$this->load->view('consulta/head_view');
			$this->load->view('consulta/consulta_view', $dataSend);
			$this->load->view('consulta/footer_view');
	}

	public function verificar(){
		$cedula = $this->input->post('cedula');
		$where = array(
			'certificado_cedula' => $cedula,
		);
		$certificados = $this->Crud_certificado->GetDatos($where);
		if (is_null($certificados)) {
			$where = array(
			'certificado_numero' => $cedula,
			);
			$certificados = $this->Crud_certificado->GetDatos($where);
		}
		if (!is_null($certificados)) {
			foreach ($certificados as $key) {
			$fecha = new DateTime($this->dateadde('d', 0, $key->certificado_vencimiento));
			$hoy = getdate();
			$fecha2 = new DateTime($hoy['mday']."-".$hoy['mon']."-".$hoy['year']);
			$interval = $fecha->diff($fecha2);
			$diferencia = $interval->format('%R%a');
				if ($diferencia >= 0) {
					$datosSlide = array(
	                	'estado_id' => 2
	                );
			        $whereArray = array(
			                'certificado_id' => $key->certificado_id
			        );
	        		$this->Crud_certificado->editar($datosSlide, $whereArray);
				}
			}
			$where = array(
				'certificado_cedula' => $cedula
			);
			$certificados2 = $this->Crud_certificado->GetDatos($where);
			if (is_null($certificados2)) {
				$where = array(
				'certificado_numero' => $cedula
				);
				$certificados2 = $this->Crud_certificado->GetDatos($where);
			}
			$datos = array(
				'certificados' => $certificados2, 
				'mensaje' => '' 
			);
		}else{
			$datos = array(
				'certificados' => NULL, 
				'mensaje' => 'No se encuentra el docmuento' 
			);
		}
		$this->load->view('consulta/head_view');
		$this->load->view('consulta/respuesta_view', $datos);
		$this->load->view('consulta/footer_view');
	}

	public function imprimir($id = NULL){
		$where = array(
			'certificado_id' => $id
		);
		$certificados2 = $this->Crud_certificado->GetDatos($where);
		$fechaRegistro = $this->fechas($certificados2[0]->certificado_expedicion);
		$hoy = getdate();
		$fechaHoy = $this->acomodarFecha($hoy);
		$datos = array(
			'certificados' => $certificados2,
			'fechaExp' => $fechaRegistro,
			'fechaHoy' => $fechaHoy
		);
		$this->load->view('carta_view', $datos);
		
		 // Get output html
        $html = $this->output->get_output();
		// Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('legal', 'portrait');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream($certificados2[0]->certificado_numero.".pdf", array("Attachment"=>0));
	}

	public function fechas($date) { 
	    	$jour=substr($date, 0, 2); 
	        $mois=substr($date, 3, 2); 
	        $annee=substr($date, 6, 4);
	        switch ($mois) {
	         	case '1':
	         		$mes = 'enero';
	         		break;
	         	case '2':
	         		$mes = 'febrero';
	         		break;
	         	case '3':
	         		$mes = 'marzo';
	         		break;
	         	case '4':
	         		$mes = 'abril';
	         		break;
	         	case '5':
	         		$mes = 'mayo';
	         		break;
	         	case '6':
	         		$mes = 'junio';
	         		break;
	         	case '7':
	         		$mes = 'julio';
	         		break;
	         	case '8':
	         		$mes = 'agosto';
	         		break;
	         	case '9':
	         		$mes = 'septiembre';
	         		break;
	         	case '10':
	         		$mes = 'octubre';
	         		break;
	         	case '11':
	         		$mes = 'noviembre';
	         		break;
	         	case '12':
	         		$mes = 'diciembre';
	         		break;			
	         	default:
	         		# code...
	         		break;
	        } 
	        $fechaTexto = $jour.' días del mes de '.$mes.' del '.$annee;
	        return $fechaTexto;	
    }

    public function acomodarFecha($date){
    	$jour= $date['mday']; 
	    $mois= $date['mon']; 
	    $annee= $date['year'];
	    switch ($mois) {
	         	case '1':
	         		$mes = 'enero';
	         		break;
	         	case '2':
	         		$mes = 'febrero';
	         		break;
	         	case '3':
	         		$mes = 'marzo';
	         		break;
	         	case '4':
	         		$mes = 'abril';
	         		break;
	         	case '5':
	         		$mes = 'mayo';
	         		break;
	         	case '6':
	         		$mes = 'junio';
	         		break;
	         	case '7':
	         		$mes = 'julio';
	         		break;
	         	case '8':
	         		$mes = 'agosto';
	         		break;
	         	case '9':
	         		$mes = 'septiembre';
	         		break;
	         	case '10':
	         		$mes = 'octubre';
	         		break;
	         	case '11':
	         		$mes = 'noviembre';
	         		break;
	         	case '12':
	         		$mes = 'diciembre';
	         		break;			
	         	default:
	         		# code...
	         		break;
	        } 
	        $fechaTexto = $jour.' días del mes de '.$mes.' del '.$annee;
	        return $fechaTexto;	
    }

}