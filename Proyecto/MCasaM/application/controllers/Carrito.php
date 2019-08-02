<?php
/**
*
* @author Ernesto Rico Gutiérrez
* @link https://github.com/Gilberto666/Muebleria-Casa-Morales-/tree/Ernesto/Proyecto/MCasaM/application/controllers/
* @package application/controllers/
*
* @version 1.0.0
* Creado el 20/06/2019
* Ultima modificacion el 02/08/2019
*
* @since Clase disponible desde la versión 1.0.0
* @deprecated Clase obsoleta en la versión 2.0.0
*/
?>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Carrito extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');
        $this->load->model('Carrito_model');
        $this->load->model('ListarVistas_model');

    }

    public function index()
    {
        $data['products'] = $this->Carrito_model->get_all();
        $data['contenido']='carrito';
        $this->load->view('template/template',$data);
    }

    public function Compras(){
        $data['pedido']=$this->ListarVistas_model->listarPedido();
        $data['products'] = $this->Carrito_model->get_all();
        $data['contenido']='compras';
        $this->load->view('template/template',$data);
    }

    public function Pedido(){
        $data['estado']=$this->ListarVistas_model->listarEstados();
        $data['direccion']=$this->ListarVistas_model->listarDirecciones($this->session->userdata('idUsuario'));
        $data['products'] = $this->Carrito_model->get_all();
        $data['contenido']='pedido';
        $this->load->view('template/template',$data);
    }
    public function Login(){
        $data['contenido']='login';            
        $this->load->view('template/template',$data);
    }    

    function add()
    {
        $insert_data = array(
        'id' => $this->input->post('id'),
        'name' => $this->input->post('name'),
        'price' => $this->input->post('price'),
        'qty' => 1
        );

        $this->cart->insert($insert_data);

        redirect('carrito');
    }

    function remove($rowid) 
    {
        if ($rowid==="all"){
        $this->cart->destroy();
        }else{
        $data = array(
        'rowid' => $rowid,
        'qty' => 0
        );
        $this->cart->update($data);
        }

        redirect('carrito');
    }

    function update_cart()
    {

        $cart_info = $_POST['cart'];
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cart['rowid'];
            $price = $cart['price'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];

            $data = array(
            'rowid' => $rowid,
            'price' => $price,
            'amount' => $amount,
            'qty' => $qty
            );

            $this->cart->update($data);
        }
        redirect('carrito');
    }
}
?>