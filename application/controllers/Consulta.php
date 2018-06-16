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
			'estado_id' => 1
		);
		$certificados = $this->Crud_certificado->GetDatos($where);
		if (is_null($certificados)) {
			$where = array(
			'certificado_numero' => $cedula,
			'estado_id' => 1
			);
			$certificados = $this->Crud_certificado->GetDatos($where);
		}
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
			'certificados' => $certificados2  
		);
		$this->load->view('consulta/respuesta_view', $datos);
	}

	
}
