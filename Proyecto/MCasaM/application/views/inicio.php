<?php
/**
* Página de inicio
*
* @author Ernesto Rico Gutiérrez
* @package application/views/
*
* @version 1.0.0
* Creado ‎‎viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎12:33 pm
* Última Modificación el 19/07/2019
*/
?>

    <div class="col-md-12" align="center">
        <?php if($this->session->userdata('idUsuario')!=null){ ?>
            <h4>USUARIO:</h4> <h4><strong><?php echo $this->session->userdata('nombre')?> <?php echo $this->session->userdata('apellido')?> </strong></h4>
        <?php }else {?>
            <h4>USUARIO:</h4> <h4><strong> Invitado</strong></h4>
        <?php } ?>
    </div>
<div class="row">
    <div class="col-md-6"><br>
        <div align="center" style="color:#3E4095;"><h3>Promociones</h3><br></div>
            <div>
              <!--Se obtinen todas las promociones por medio del foreach-->
                <?php foreach ($promocion as $item) {?>
                    <!--Si la promoción tiene un estatus 1 que significa activo se mostrará-->
                    <?php if ($item->estatus==1) { ?>
                        <!--Si la fecha actual es igual a la fecha final de la promocion sigue siendo visible en el sitio -->
                        <?php $fecha = date("Y")."-".date("m")."-".date("d");
                            if ($fecha<=$item->fecha_final) { ?>            
                                <div class="card text-center" style="background-color: #3E4095;">
                                    <div class="card-header">
                                        <h3><?=$item->nombre_promocion;?></h3>
                                    </div>
                                    <div class="card-body">
                                        <img src='<?=base_url();?>assets/uploads/files/promo/<?=$item->imagen_promo;?>' style='height: 100%; width: 100%;'>
                                        <h5 class="card-title"><?=$item->descripcion_promo;?></h5>
                                        <a href="<?=base_url(); ?>index.php/MuebleriaCasaMorales/Productos" class="btn btn-outline-light" style="color: black;">Ir a Productos</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Fecha Inicial: <strong><?=$item->fecha_inicial;?></strong><br>
                                        Fecha Final: <strong><?=$item->fecha_final;?></strong>
                                    </div>
                                </div><br><br>
                            <!-- Fin del if de fecha y inicio del else
                              En el caso de que la fecha final sea diferente a la fecha actual entonces mostrará el siguiente mensaje-->
                            <?php }else{
                                echo "<div align='center' style='background-color:#3E4095; color:white; width: 100%; height: 50% ;'><br><h3>No hay promociones vigentes.</h3><br></div>";
                            } ?>
                        <!--Fin del else de fecha

                        Fin del if de estatus y inicio del else 
                        En el caso de que no exista una promoción activa mostrará el siguiente mensaje-->
                        <?php }else{
                          echo "<div align='center' style='background-color:#3E4095; color:white; width: 100%; height: 50% ;'><br><h3>No hay promociones vigentes.</h3><br></div>";
                      } ?> 
                      <!--Fin del else de estatus-->
                <!--Fin del foreach-->   
                <?php } ?>
            </div>
        </div>
    <div class="col-md-6"><br>
        <div class="card">
            <div class="card-header" align="center">
                <h5>Información Útil</h5>
            </div>
            <div class="card-body" align="justify">
                <h4 class="card-title">La importancia de los muebles en cualquier hogar</h4>
                <p class="card-text">
                    <br>Los muebles en cualquier hogar se pueden describir como la carne y las papas de cualquier comida. Esto se debe a que los muebles, ya sea en el hogar o en la oficina, ocupan la mayor parte del espacio y también ayudan a que su hogar sea divertido. Mejora el nivel de vida al aumentar su comodidad. <br><br>Esto se hace aumentando la productividad, la calidad de su trabajo y también el enfoque. Algunos puntos importantes se han indicado a continuación. <br>• Los muebles contribuyen mucho a mejorar la apariencia visual de su hogar. <br>• Ayuda a hacer que el espacio de trabajo sea más positivo. <br>• Los muebles que se colocan en una oficina pueden suministrar grandes compartimentos de organización y también pueden ser muy funcionales. <br>• Los muebles pueden proporcionar una variedad de características y opciones de color.
                </p>
            </div>
        </div><br>      
    </div>
</div>