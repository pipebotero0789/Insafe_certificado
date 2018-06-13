<?php

if (!defined('BASEPATH'))
    exit('No ingrese directamente es este script');
class Crud_usuario extends CI_Model {

    public $join = array();
    //constructor de la clase
    public function __construct() {
        parent::__construct();
        $this->join[]  = array('tabla' => 'basica_rol r','tipo_join' =>'left', 'conect'=>'p.rol_id = r.rol_id');
        /* $this->join[]  = array('tabla' => 'basica_tipodocumento btp','tipo_join' =>'left', 'conect'=>'p.tipodocumento_id = btp.tipodocumento_id');
        $this->join[]  = array('tabla' => 'produccion_cliente c','tipo_join' =>'left', 'conect'=>'c.cliente_id = p.cliente_id');*/
        $this->join[]  = array('tabla' => 'basica_estado be','tipo_join' =>'left', 'conect'=>'be.estado_id = p.estado_id');
        /*$this->join[]  = array('tabla' => 'basica_ciudad bc','tipo_join' =>'left', 'conect'=>'bc.ciudad_id = p.ciudad_id');
        $this->join[]  = array('tabla' => 'basica_departamento bd','tipo_join' =>'left', 'conect'=>'bd.departamento_id = bc.departamento_id');*/
    }
    public function GetDatosTotal($where = NULL){
        return $this->Crud_model->obtenerRegistros('produccion_usuario',$where,'*', NULL, NULL, $this->join);
    }
    public function Insertar($arrayInsertar)
    {
        return $this->Crud_model->agregarRegistroRetId('produccion_usuario',$arrayInsertar);
    }
    public function editar($pArrayActualizar,$id)
    {
        return $this->Crud_model->actualizarRegistro('produccion_usuario',$pArrayActualizar,$id);
    }
    public function GetExiste($usuario,$clave){
        $where = array('p.usuario_correo' => $usuario, 'p.usuario_clave' => md5($clave));
        $datos = $this->Crud_model->obtenerRegistros('produccion_usuario',$where,'case when COUNT(*) >=0 then p.usuario_id else 0 end total',NULL,NULL,$this->join,'p.usuario_id');
        if (is_null($datos)) {
            $total = 0;
        }
        else
        {
            $total =  (int)$datos[0]->total;
        }
        return  ($total == 0 ) ? false : $total ;
    }
    public function GetDatos($whereArray = null)
    {
        if (is_null($whereArray)) {
            $where = array('p.estado_id' => 3);
        }
        else
        {
            $where=$whereArray;
        }
        return $this->Crud_model->obtenerRegistros('produccion_usuario',$where,'*', NULL, NULL, $this->join);
    }
}

?>
