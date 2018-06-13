<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

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
        $this->load->view('admin/home_view',$dataSend);
    }

    public function menuviejoControler($template,$visual,$datos = null){
        $this->menuviejo($template,$visual,$datos);
    }

    public function callupload($width = null,$height = null,$input = null,$tipoarchivo,$tipocarga) {
        //var_dump($width);
        if ($width == 'null' or $width == 'NULL') {
            $width = null;
        }
        if ($height == 'null' or $height == 'NULL') {
            $height = null;
        }
        echo $this->upload($width,$height,$input,$tipoarchivo,$tipocarga);
    }
    public function cambioColor()
    {
        $this->Crud_parametria->actualizarParametria('styleColor',$this->input->post('colorGuardado'));
        redirect('login');
    }
}