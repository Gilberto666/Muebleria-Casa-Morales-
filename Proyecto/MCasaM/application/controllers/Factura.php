<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 31/07/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
<?php
class Factura extends CI_Controller {
	function __construct(){				
		parent::__construct();
	    $this->load->library('cart');
        $this->load->model('Carrito_model');
        $this->load->model('ListarVistas_model');	


	}
	
	public function index(){
		$data['estado']=$this->ListarVistas_model->listarEstados();
        $data['direccion']=$this->ListarVistas_model->listarDirecciones($this->session->userdata('idUsuario'));
        $data['products'] = $this->Carrito_model->get_all();
		$data['contenido']='factura';
		$this->load->view('template/template',$data);
	}

	function factura(){
	    $this->load->library('cart');
        $this->load->model('Carrito_model');
        $this->load->model('ListarVistas_model');	
        $this->load->library('mydompdf');    
		$data['estado']=$this->ListarVistas_model->listarEstados();
        $data['direccion']=$this->ListarVistas_model->listarDirecciones($this->session->userdata('idUsuario'));
        $data['products'] = $this->Carrito_model->get_all();
		
		$html= $this->load->view('factura',$data, true);
		$this->mydompdf->load_html($html);
	    $this->mydompdf->render();
	    $this->mydompdf->stream("Factura.pdf");
    }


    function Catalogo(){
        $this->load->model('ListarVistas_model');	
        $this->load->library('mydompdf');    
		$data['categoria']=$this->ListarVistas_model->listarCategoria();
        $data['producto']=$this->ListarVistas_model->listarProducto();
		
		$html= $this->load->view('catalogo',$data, true);
		$this->mydompdf->load_html($html);
	    $this->mydompdf->render();
	    $this->mydompdf->stream("Catálogo.pdf");
    }

     function Promos(){
        $this->load->model('ListarVistas_model');	
        $this->load->library('mydompdf');    
		$data['promo']=$this->ListarVistas_model->listarPromo();
		
		$html= $this->load->view('promos',$data, true);
		$this->mydompdf->load_html($html);
	    $this->mydompdf->render();
	    $this->mydompdf->stream("Promociones.pdf");
    }
}
