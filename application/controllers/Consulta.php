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
}
