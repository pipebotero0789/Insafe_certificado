<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!function_exists('helper_tablas')) {


    function helper_tablas($pTabla) {
        switch ($pTabla) {
            case 'produccion_noticia':
                return 'CREATE TABLE produccion_noticia (
                      noticia_id int(11) NOT NULL AUTO_INCREMENT,
                      noticia_texto varchar(255) NOT NULL,
                      noticia_descripcion varchar(255) NOT NULL,
                      noticia_url varchar(255) NOT NULL,
                      noticia_fecha datetime NOT NULL,
                      noticia_vista bit(1) NOT NULL DEFAULT 0,
                      usuario_id int(11) NOT NULL,
                      PRIMARY KEY (noticia_id)
                    );';
            break;
            default:
                return null;
            break;
        }
    }

}//fin de la función
