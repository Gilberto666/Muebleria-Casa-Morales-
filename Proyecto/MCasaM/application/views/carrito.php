<?php
/**
* Pagina de carrito
*
* @author Ernesto Rico Gutiérrez
* @package application/views/
*
* @version 1.0.0
* Creado ‎viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎01:38 pm
* Última Modificación el 25/07/2019
*/
?>
<div class="row">
    <div class="col-md-12"><br>
        <div id="cart" >
            <div id = "heading">
                <h2 align="center">Productos en tu carrito</h2>
            </div>
            <div id="text">
                <?php $cart_check = $this->cart->contents();
                // Si el carrito está vacío, aparecerá el siguiente mensaje.
                if(empty($cart_check)) {
                    echo '<br>Para agregar productos en tu carrito haz clic en el botón "Agregar al carrito"';
                } ?>
            </div>
        </div>            
    </div>
    <div class="col-md-12">
        <table id="table" border="0" align='center'>
            <?php
            // Todos los valores del carrito se almacenan en "$ cart".
            if ($cart = $this->cart->contents()){ ?>
            <tr id= "main_heading">
                <td>Serial</td>
                <td>Nombre</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>Subtotal</td>
                <td>Quitar Producto</td>
            </tr>
                <?php
                    // Crear formulario y enviar todos los valores en la función "carrito/update_cart".
                    echo form_open('carrito/update_cart');
                    $grand_total = 0;
                    $i = 1;
                foreach ($cart as $item){
                    // echo form_hidden ('cart['. $ item ['id']. '] [id]', $ item ['id']);
                    // Producirá la siguiente salida.
                    // <input type = "hidden" name = "cart[1] [id]" value = "1" />
                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                ?>
            <tr>
                <td>
                    <?php echo $i++; ?>
                </td>
                <td>
                    <?php echo $item['name']; ?>
                </td>
                <td>
                    $ <?php echo number_format($item['price'], 2); ?>
                </td>
                <td>
                    <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                </td>
                    <?php $grand_total = $grand_total + $item['subtotal']; ?>
                <td>
                    $ <?php echo number_format($item['subtotal'], 2) ?>
                </td>                        
                <td>
                    <?php
                    //cancelar imagen.
                    $path = "<img src='".base_url()."assets/images/quitar.png' width='35px' height='35px'>";
                    echo anchor('carrito/remove/' . $item['rowid'], $path); 
                    ?>
                </td>
                <?php } ?>
            </tr>
            <tr>                    
                <td></td>                    
                <td colspan="5">
                    <hr class="my-4">
                    <b align="center">Order Total: $<?php
                    //Gran total.
                    echo number_format($grand_total, 2); ?></b>
                    <?php // "Borrar carrito" ¿Llamar mensaje de confirmación javascript?>
                    <input align="center" class ='fg-button teal' type="button" value="Limpiar carrito" onclick="<?php if ($this->session->userdata('idUsuario')==null) {?>clear_cart()<?php } ?>">
                    <?php // botón de envío. ?>
                    <input class ='fg-button teal'  type="submit" value="Actualizar Carrito">
                    <?php echo form_close(); 
                    //"Colocar botón de pedido" al hacer clic en enviar "facturación" controlador
                    ?>
                    <input class ='fg-button teal' type="button" value="Ordenar"   
                    onclick="window.location= <?php if ($this->session->userdata('idUsuario')!=null) {?>
                         'Pedido'
                    <?php  }else{ ?>
                         'Login'
                    <?php }?>">
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>        
    <div id="products_e" align="center">
        <h2 id="head" align="center">Productos</h2>
        <?php
        //"$producto" envia al controlador de "Carrito", almacena todos los productos disponibles en la base de datos.
        foreach ($products as $product) {
            $id = $product['idProducto'];
            $name = $product['nombre_producto'];
            $description = $product['detalles'];
            $price = $product['precio'];
            $img = $product['imagen_producto'];
        ?>
            <div id='product_div'>
                <div id='image_div'>
                    <img src="<?php echo base_url() . 'assets/uploads/files/producto/'.$img ?>" style=' width: 100%;height: 100%;'/>
                </div>
                <div id='info_product'>
                    <div id='name'><?php echo $name; ?></div>
                    <div id='desc'> <?php echo $description; ?>
                    <br><b>Precio</b>:<big>$<?php echo $price; ?></big></div>
                        <?php
                            echo form_open('carrito/add');
                            echo form_hidden('id', $id);
                            echo form_hidden('name', $name);
                            echo form_hidden('price', $price);
                            echo form_hidden('img', $img);
                        ?> 
                </div>
                <div id='add_button'>
                    <?php
                        $btn = array(
                            'class' => 'fg-button teal',
                            'value' => 'Agregar al carrito',
                            'name' => 'action'
                        );
                        echo form_submit($btn);
                        echo form_close();
                    ?>
                    <br><br>
                    <button type="button" class="btn btn-success"><a href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/vistaprevia/<?php echo $id; ?>" style="color:white;">Vista Previa</a></button>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
