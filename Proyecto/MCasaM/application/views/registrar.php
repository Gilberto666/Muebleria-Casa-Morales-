<?php
/**
* Pagina de registrar
*
* @author Ernesto Rico Gutiérrez
* @package application/views/
*
* @version 1.0.0
* Creado viernes, ‎7‎ de ‎junio‎ de ‎2019, ‏‎01:38 pm
* Última Modificación el 19/07/2019
*/
?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="jumbotron">
            <h2 class="display-4" align="center">Registrate Ahora</h2>
            <hr class="my-4">
            <div class="form-container table-container">
                <!--En el presente formulario se solicitarán los datos del administrador nuevo(se cambiará para que sean los datos del cliente), enviando la información al Controlado Registrar en la función guardar().
                Los campos son requeridos y también cuentan con una validación con el atributo pattern.-->
                <form action="<?=base_url();?>index.php/Registrar/guardar" method="post" id="crudForm"  enctype="multipart/form-data" accept-charset="utf-8">
                    <div class="form-group nombre_form_group row">
                        <label class="col-sm-3 control-label">Nombre<span class='required'>*</span></label>
                            <div class="col-sm-9">
                                <input id='field-nombre' class='form-control' name='nombre' type='text' value="" maxlength='100' pattern=".[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" autofocus required/>
                            </div>
                    </div>
                    <div class="form-group apellido_form_group row">
                        <label class="col-sm-3 control-label">Apellido<span class='required'>*</span></label>
                            <div class="col-sm-9">
                                <input id='field-apellido' class='form-control' name='apellido' type='text' value="" maxlength='100' pattern=".[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,50}" required/>                            
                            </div>
                    </div>
                    <div class="form-group email_form_group row">
                        <label class="col-sm-3 control-label">Email<span class='required'>*</span></label>
                            <div class="col-sm-9">
                                <input id='field-email' class='form-control' name='email' type='email' value="" maxlength='100' pattern=".[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
                            </div>
                    </div>
                    <div class="form-group password_form_group row">
                        <label class="col-sm-3 control-label">Password<span class='required'>*</span></label>
                            <div class="col-sm-9">
                                <input type="password" id='field-password' class='form-control' name='password' type='text' value="" maxlength='100' pattern=".[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð0-9._%+-,.'-]{3,50}" required />                            
                            </div>
                    </div>
                    <input type="hidden" name="tipo" value="2">
                    <div class="form-group gcrud-form-group" align="center">
                        <div class="col-sm-offset-3 col-sm-7">
                            <button class="btn btn-secondary btn-success b10" type="submit" id="form-button-save">
                            <i class="el el-ok"></i>Guardar</button>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>