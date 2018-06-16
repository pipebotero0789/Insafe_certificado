<?php

class MY_Controller extends CI_Controller
{

    public $index;
    public $Titulo;
    public $NombreApp;
    public $formatoFecha;
    public $formatoFechaAgile;
    public $ajusteFecha;
    public $urlempresa;
    public $empresanombre;
    public $menutotal;
    public $styleColor;



    function __construct()
    {
        parent::__construct();
        /*$this->load->model('crud/Crud_rol');*/
        /*$this->load->library('My_PHPMailer',$this->dataSmtp(),'My_PHPMailer');
        $this->cargarVariablesGlobales();
        $this->ajusteFecha = strtotime($this->Crud_parametria->obtenerParametria('ajusteFecha'),strtotime(date('Y-m-j H:i:s')));*/

    }

    public function cargarVariablesGlobales()
    {
        if (is_null($this->index)) {
            $this->index = $this->Crud_parametria->obtenerParametria('index');
        }
        if (is_null($this->Titulo)) {
            $this->Titulo = $this->Crud_parametria->obtenerParametria('Titulo');
        }
        if (is_null($this->NombreApp)) {
            $this->NombreApp = $this->Crud_parametria->obtenerParametria('nombreAplicacion');
        }
        if (is_null($this->formatoFecha)) {
            $this->formatoFecha =$this->Crud_parametria->obtenerParametria('formatoFecha');
        }
        if (is_null($this->urlempresa)) {
            $this->urlempresa =$this->Crud_parametria->obtenerParametria('EmpresaUrl');
        }
        if (is_null($this->empresanombre)) {
            $this->empresanombre =$this->Crud_parametria->obtenerParametria('EmpresaNombre');
        }
        if (is_null($this->menutotal)) {
            $this->menutotal =$this->Crud_parametria->obtenerParametria('menutotal');
        }
        if (is_null($this->styleColor)) {
            $this->styleColor =$this->Crud_parametria->obtenerParametria('styleColor');
        }
    }

    public function menuviejo($template = 'admin', $visual, $datos = null){
        $retVal = (is_null($datos)) ? 'datos_js/datos_js_0' : 'datos_js/'.$datos ;
        $this->load->view('admin/sobrecargas/head_view');
        $dataSend = array(
            "datos" =>  array(
                'noticias' => $this->Crud_noticias->GetDatosTotales(5),
                'listadomenu' => $this->ordenarMenu($this->session->userdata('rol_id'))
            )
        );
        $datoNav = $this->load->view('admin/sobrecargas/nav_view',$dataSend,TRUE);
        $datoDatos = $this->load->view('admin/'.$retVal,null,TRUE);
        $dataSend = array(
            "datos" => $datoDatos
        );
        $dataFooter = $this->load->view('admin/sobrecargas/footer_view',$dataSend,TRUE);
        $dataSend = array(
            "footer" => $dataFooter,
            'nav' => $datoNav
        );
        $this->load->view($template.'/template/'.$visual, $dataSend);
        
    }

    public function ordenarMenu($rol)
    {
        $where = array('pr.rol_id '=>$rol,'p.estado_id'=>1);
        $menu = $this->Crud_menu->GetDatos($where,"cm.categoria_menu_id,cm.categoria_menu_nombre,cm.categoria_menu_icono,cm.menu_ordenar,cm.categoria_menu_link,cm.estado_id",",'menu' menu");
        $submenu = $this->Crud_menu->GetDatos($where,'cs.categoria_submenu_id, cs.categoria_submenu_nombre,cs.categoria_submenu_ordenar, cs.categoria_submenu_icono,cs.categoria_submenu_link,cs.estado_id,p.menu_id',",'submenu' menu");
        $data = $this->Crud_menu->GetDatos($where,null,'l.*,cm.categoria_menu_id,cs.categoria_submenu_id');
        $menuarray = array();
        $camnio= true;
        if (!is_null($menu)) 
        {
            foreach ($menu as $key) {
                $submenuarray = array();
                foreach ($submenu as $key1) {
                    $dataarray = array();
                    foreach ($data as $key2) {
                        
                        if ($camnio) 
                        {

                            if ($key->categoria_menu_id == $key2->categoria_menu_id && $key1->categoria_submenu_id == $key2->categoria_submenu_id ) {
                                if ((int) $key2->estado_id == 1 or is_null($key2->estado_id) ) {
                                    array_push($dataarray,array('Nombre' => $key2->link_nombre,'link'=>$key2->link_link,'logo'=>$key2->link_icono,'orden'=>$key2->link_ordenar));
                                }
                            }
                        }
                    }
                    (count($dataarray) != 0 && (int) $key1->estado_id == 1) ? array_push($submenuarray,array('Nombre'=>$key1->categoria_submenu_nombre,'link'=>$key1->categoria_submenu_link,'orden'=>$key1->categoria_submenu_ordenar,'logo'=>$key1->categoria_submenu_icono,'submenu' => $dataarray)) : '' ;
                }
                (count($submenuarray) != 0 && (int) $key->estado_id == 1) ? array_push($menuarray,array('Nombre'=>$key->categoria_menu_nombre,'menu' => $submenuarray,'link'=>$key->categoria_menu_link,'orden'=>$key->menu_ordenar,'logo'=>$key->categoria_menu_icono)) : '' ; 
            }
        }
        return $menuarray;
        
    }

    public function redirecionar($rol_id)
    {
        $DatoRol = $this->Crud_rol->GetDatos($rol_id);
        var_dump($DatoRol);
        redirect($DatoRol->rol_index);
    }

    public function crearSesion($pObjetoUsuario) {
        try {
            $this->session->set_userdata('id', $pObjetoUsuario->usuario_id);
            $this->session->set_userdata('nombres', $pObjetoUsuario->usuario_nombre.' '.$pObjetoUsuario->usuario_apellido);
            $this->session->set_userdata('nombre', $pObjetoUsuario->usuario_nombre);
            $this->session->set_userdata('appelido',$pObjetoUsuario->usuario_apellido);
            $this->session->set_userdata('correo',$pObjetoUsuario->usuario_correo);
            $this->session->set_userdata('rol_id', $pObjetoUsuario->rol_id);  
            $this->session->set_userdata('rol_nombre', $pObjetoUsuario->rol_nombre);  
            $this->session->set_userdata('estado_nombre', $pObjetoUsuario->estado_nombre); 

        } catch (Exception $ex) {
            redirect($this->index);
        }
    }

    public function dataSmtp()
    {
        $Host = $this->Crud_parametria->obtenerParametria('SMTP_Host');
        $Port = $this->Crud_parametria->obtenerParametria('SMTP_Port');
        $User = $this->Crud_parametria->obtenerParametria('SMTP_User');
        $Pass = $this->Crud_parametria->obtenerParametria('SMTP_Pass');
        $Email = $this->Crud_parametria->obtenerParametria('SMTP_Email');
        $Name = $this->Crud_parametria->obtenerParametria('SMTP_Name');
        $Auth = $this->Crud_parametria->obtenerParametria('SMTP_Auth');
        if (is_null($Host) or is_null($Port) or is_null($User) or is_null($Pass) or is_null($Email) or is_null($Name) or is_null($Auth)) 
        {
            return array();
        }
        else
        {
            return array(
                'Host' => $Host,
                'port' => $Port,
                'user' => $User,
                'pass' => $Pass,
                'email' => $Email,
                'name' => $Name,
                'auth' => $Auth
            );
        }
    }

    public function envioCorreo($dataCorreo,$dataCC = FALSE)
    {
        $data = $this->My_PHPMailer->enviarMail($dataCorreo,$dataCC);
        return $data;
    }

    public function generarCodigo($longitud,$tipo = 'alfaNumerico') {
         $key = '';
         switch ($tipo) {
            case 'alfaNumerico':
                 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
            break;
            case 'numerico':
                 $pattern = '1234567890';
            break;
            case 'alfa':
                 $pattern = 'abcdefghijklmnopqrstuvwxyz';
            break;
            case 'clave':
                 $pattern = '123456789';
            break;
             default:
                 $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
                 break;
         }
         $max = strlen($pattern)-1;
         for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
         return $key;
    }

    public function buscarCodigoUnicoTabla($tabla,$columnaConsulta,$numeroCodigo,$tipocodigo = 'alfaNumerico')
    {
        $saltarSiclo = true;
        while ($saltarSiclo) {
            $codigoUnico = $this->generarCodigo($numeroCodigo,$tipocodigo);
            $arrayConsulta = array($columnaConsulta => $codigoUnico);
            $consultaUsuario = $this->Crud_model->obtenerRegistros($tabla,$arrayConsulta,$columnaConsulta);
            if (is_null($consultaUsuario)) {
                $saltarSiclo = false;
            }
        }
        return $codigoUnico;
    }

    public function agregarNoticias($usuario_id,$texto,$descripcion)
    {
        $insertar = array(
            'noticia_texto' => $texto, 
            'noticia_descripcion' => $descripcion, 
            'noticia_fecha' => date('Y-m-d',$this->ajusteFecha), 
            'usuario_id' => $usuario_id
        );
        $this->Crud_noticias->agregarNoticia($insertar);
    }

    public function cargarSelectDinamico($tabla,$tipotabla = 1,$datoBuscar)
    {
        switch ($tipotabla) {
            case 1:
                $indice = 'basica_';
            break;
            case 2:
                $indice = 'produccion_';
            break;
            case 3:
                $indice = 'parametria_';
            break;
        }
        $tipoDato  = $this->Crud_model->obtenerRegistros($indice.$tabla,$datoBuscar,null,null,'');
        if ($tipoDato != NULL):
            $selectTabla = controlSelect($tipoDato, $tabla."_id", $tabla."_nombre", "Seleccione una ".$tabla,0);
        endif;  

        if ($selectTabla != NULL):
            return json_encode($selectTabla, JSON_FORCE_OBJECT);
        else:
            return 'false';
        endif;
    }

    public function dateadde($interval, $number, $date) { 
        $jour=substr($date, 0, 2); 
        $mois=substr($date, 3, 2); 
        $annee=substr($date, 6, 4); 
        $adate = mktime(0,0,0,$mois,$jour,$annee); 
        $date_time_array = getdate($adate); 
        $hours = $date_time_array['hours']; 
        $minutes = $date_time_array['minutes']; 
        $seconds = $date_time_array['seconds']; 
        $month = $date_time_array['mon']; 
        $day = $date_time_array['mday']; 
        $year = $date_time_array['year']; 
        switch ($interval) { 
            case 'yyyy': 
                $year+=$number; 
                break; 
            case 'q': 
                $year+=($number*3); 
                break; 
            case 'm': 
                $month+=$number; 
                break; 
            case 'y': 
            case 'd': 
            case 'w': 
                $day+=$number; 
                break; 
            case 'ww': 
                $day+=($number*7); 
                break; 
        } 
        $timestamp= mktime(0,0,0,$month,$day,$year);
        $jourascii=strftime("%d-%m-%Y",$timestamp); 
        return $jourascii; 
    }

}