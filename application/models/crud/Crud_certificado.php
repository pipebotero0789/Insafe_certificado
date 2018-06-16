<?php

if (!defined('BASEPATH'))
    exit('No ingrese directamente es este script');
class Crud_certificado extends CI_Model {

    //constructor de la clase
    public function __construct() {
        parent::__construct();
        
    }

    public function GetDatos($where = NULL){
        return $this->Crud_model->obtenerRegistros('produccion_certificado',$where,'*');
    }

    public function GetDatosTotal(){
        return $this->Crud_model->obtenerRegistros('produccion_certificado',null,'*');
    }

    public function editar($pArrayActualizar,$id)
    {
        return $this->Crud_model->actualizarRegistro('produccion_certificado',$pArrayActualizar,$id);
    }
}

?>
