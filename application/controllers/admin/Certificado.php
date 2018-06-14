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

    public function subirArchivo(){
        $config = array(
            'upload_path'   => FCPATH.'upload/',
            'allowed_types' => 'xls|csv'
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file')) {
            $data = $this->upload->data();
            @chmod($data['full_path'], 0777);   
            $this->load->library('Spreadsheet_Excel_Reader');
            $this->spreadsheet_excel_reader->setOutputEncoding('CP1251');
            $this->spreadsheet_excel_reader->read($data['full_path']);
            $sheets = $this->spreadsheet_excel_reader->sheets[0];
            error_reporting(0);
            $data_excel = array();
            for ($i = 2; $i <= $sheets['numRows']; $i++) {
                if ($sheets['cells'][$i][1] == '') break;
                $data_excel[$i - 1]['certificado_nombre']    = $sheets['cells'][$i][1];
                $data_excel[$i - 1]['certificado_cedula']   = $sheets['cells'][$i][2];
                $data_excel[$i - 1]['certificado_numero'] = $sheets['cells'][$i][3];
                $data_excel[$i - 1]['certificado_expedicion'] = $sheets['cells'][$i][4];
                $data_excel[$i - 1]['certificado_vencimiento'] = $sheets['cells'][$i][5];
                $data_excel[$i - 1]['estado_id'] = $sheets['cells'][$i][6];
            }
            $this->db->insert_batch('produccion_certificado', $data_excel);
            // @unlink($data['full_path']);
            $mensaje = "el archivo se subio correctamente";
            $this->index($mensaje);
        }else{
            $mensaje = "ocurrio un problema";
            $this->index($mensaje);
        }
    }

}