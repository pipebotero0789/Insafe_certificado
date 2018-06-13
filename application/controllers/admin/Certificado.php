<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificado extends MY_Controller {

	public function __construct() 
    {
        parent::__construct();
        if (is_null($this->session->userdata('id'))) {
            redirect($this->index);
        }
    }

    public function index($mensaje = null)
    {	
        //var_dump($this->session->userdata('cliente_id'));
        $this->load->view('admin/sobrecargas/head_view');
        $dataSend = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5),
                'listadomenu' => $this->ordenarMenu($this->session->userdata('rol_id')),
                'Titulo' => 'Home',
                'TipoContenido' => 'Dashboard'
            )
        );
        $datoNav = $this->load->view('admin/sobrecargas/nav_view',$dataSend,TRUE);
        $datoDatos = $this->load->view('admin/adminJS/datos_js_0',null,TRUE);
        $dataSend = array(
            "datos" => $datoDatos
        );
        $dataFooter = $this->load->view('admin/sobrecargas/footer_view',$dataSend,TRUE);
        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav,
            'mensaje' => $mensaje
        );
        $this->load->view('admin/certificado_view',$dataSend);
    }
}