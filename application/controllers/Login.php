<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

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
        $this->load->model('crud/Crud_usuario');
    }

	public function index($mensaje = null,$bandera = null)
	{
		if (is_null($this->session->userdata('id'))) {
			$dataSend = array(
	            "mensaje" => $mensaje,
	            'bandera' => $bandera
	        );
			$this->load->view('login/head_view');
			$this->load->view('login/login_view', $dataSend);
			$this->load->view('login/footer_view');
		}else{
			$this->redirecionar($this->session->userdata('rol_id'));
		}
	}

	public function cerrarSesion() {
        //validamos si hay algún post
        $this->session->sess_destroy();
        //redirecciono al inicio
        redirect("Login");
    }
    

    public function logeo()
	{
		$clave = $this->input->post("Password1", TRUE);
		$usuario_usuario = $this->input->post("Usuario", TRUE);
        $usuario_id = $this->Crud_usuario->GetExiste($usuario_usuario,$clave);
        if ($usuario_id) {
            $where = array('p.usuario_id' => $usuario_id);
            $usuario = $this->Crud_usuario->GetDatos($where)[0];
            $this->crearSesion($usuario);
            switch ($usuario->estado_nombre) {
            	case 'Pendiente activacion':
            		redirect('admin/Usuario/activacionUsuario');
            	break;
            	case 'Pendiente Actualizacion':
            		
            	break;
            	case 'Activado':
            		$this->redirecionar($this->session->userdata('rol_id'));
            	break;
            	case 'Inactivo':
            		$mensaje = 'Usuario y/o contraseña son incorectos';
            		$this->index($mensaje);
            	break;
            }
        }else{
            $mensaje = 'Usuario y/o contraseña son incorectos';
            $this->index($mensaje);
        };
	}
	public function olvidecontrasena($mensaje = null)
	{
		if (is_null($this->session->userdata('id'))) 
		{
			$email = $this->input->post("email", TRUE);	
			$where = array('usuario_correo' => $email);
			$datosUsuario = $this->Crud_usuario->GetDatos($where);
			if (is_null($datosUsuario)) {
				$this->index('Usuario no existente');
			}
			else
			{
				$dataCorreos = array(
                    'dataNombre' => $datosUsuario[0]->usuario_nombre,
                    'dataCorreo' => $datosUsuario[0]->usuario_correo,
                    'dataAsunto' => 'Recuperar Contraseña',
                    'dataMensaje' => 'Clave '
                );
                $estadoenvio= $this->envioCorreo($dataCorreos);
				$this->index($estadoenvio["msn"],$estadoenvio["status"]);
			}
	    }else
	    {
	    	$this->redirecionar($this->session->userdata('rol_id'));
	    }
	}
}
