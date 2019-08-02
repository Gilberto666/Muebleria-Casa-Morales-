<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 01/08/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?><?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reportes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->model('ListarVistas_model');
    }

    public function index()
    {
        $data['contenido']='carrito';
        $this->load->view('admin/reportes');
    }
}