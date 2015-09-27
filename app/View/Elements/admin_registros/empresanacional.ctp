<!-- DATOS BASICOS -->
<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Datos del usuario tipo empresa nacional </b></h3>
    </div>
    <div class="panel-body">

        <?php echo $this->Form->create('EmpresaNacional', array('id' => "formEmpNac", 'type' => 'file', "novalidate" => "novalidate")); ?>

        <div class="row">
            <!-- NIT -->
            <div class="col-lg-4" >
                <div class="form-group">
                    <?php echo $this->Form->input('nit', array("div" => false, "id" => "txtNit", "label" => "NIT*", "maxlength" => 25, 'tag' => 'nit', "class" => "form-control")); ?>
                </div>
            </div>

            <!-- RUT -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('rut', array("div" => false, "id" => "txtRut", "label" => "RUT*", 'tag' => 'rut', "maxlength" => 80, "class" => "form-control")); ?>

                </div>

            </div>

            <!-- RAZÓN SOCIAL -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('razon_social', array("div" => false, "id" => "txtRazonSocial", "label" => "Razon social *", 'tag' => 'razon_social', "maxlength" => 80, "class" => "form-control")); ?>

                </div>

            </div>
        </div>

        <div class="row">
            <!-- REPRESENTANTE LEGAL -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('representante_legal', array("div" => false, "label" => "Representante legal*", "id" => "txtRepLeg", 'tag' => 'representante_legal', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>


            <!-- PERSONA DE CONTACTO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('persona_contacto', array( "div" => false, "label" => "Persona de contacto*", "id" => "txtPerCon", 'tag' => 'persona_contacto', "maxlength" => 254, "class" => "form-control")); ?>

                </div>
            </div>

            <!-- TELEFONO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('telefono', array("name" => "data[User][telefono]", "div" => false, "id" => "txtTelCon", 'tag' => 'telefono', "maxlength" => 15, "label" => "Telefono de contacto", "class" => "form-control")); ?>

                </div>
            </div>


        </div>

        <div class="row">


            <!-- CELULAR -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('celular', array("name" => "data[User][celular]", "div" => false, "id" => "txtCelCon", "label" => "Celular de contacto", "maxlength" => 15, 'tag' => 'celular', "class" => "form-control")); ?>

                </div>
            </div>


            <!-- DIRECCION -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('direccion', array("name" => "data[User][direccion]", "div" => false, 'tag' => 'direccion', "label" => "Direccion", "class" => "form-control")); ?>

                </div>
            </div> 


            <!-- EMAIL -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('email', array("name" => "data[User][email]", "div" => false, 'tag' => 'email', "label" => "Email*", "class" => "form-control")); ?>

                </div>
            </div> 


        </div>


        <div class="row">
            <!-- DEPARTAMENTO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('departamento_id', array("div" => false, "options" => $departamentos, "id" => "cboDepartamentos", "label" => "Departamentos *", 'tag' => 'departamento_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- CIUDAD -->
            <div class="col-lg-4" id="">
                <div class="form-group">
                    <?php echo $this->Form->input('ciudad_id', array("div" => false, "options" => array(), "id" => "cboCiudades", 'tag' => 'ciudad_id', "label" => "Ciudad o Municipio*", "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- USERNAME -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('username', array("name" => "data[User][username]", "div" => false, "id" => "txtUsername", "label" => "Usuario*", "maxlength" => 15, 'tag' => 'username', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>



        </div>

        <div class="row">

            <!-- PASSWORD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('password', array("name" => "data[User][password]", "div" => false, "id" => "txtContrasena", "label" => "Contraseña*", "maxlength" => 15, 'tag' => 'password', "type" => "password", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- CONFIRMAR PASSWORD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('password1', array("name" => "data[User][password1]", "div" => false, "id" => "txtContrasena1", "label" => "Confirmar contraseña*", "maxlength" => 15, 'tag' => 'password1', "type" => "password", "class" => "form-control")); ?>

                </div>

            </div>
            
              <!-- COMENTARIOS -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('comentarios', array("name" => "data[User][comentarios]", "type" => "textarea", "div" => false, "id" => "txtComentarios", "label" => "Comentarios", "maxlength" => 15, 'tag' => 'comentarios', "class" => "form-control")); ?>

                </div>
            </div>

        </div>
        <div class="row">

            <!-- FOTO -->
            <div class="col-lg-4">
                <label>Selecciona una foto (opcional)</label>
                <div class="form-group">
                    <input type="file" name="data[User][foto]" id="foto" tag="foto" class="filestyle" />

                </div>

            </div>



            <!-- <label>Selecciona una foto (opcional)</label>
             <div class="form-group">
                 <span class="btn btn-default btn-file">
                     Buscar foto <input type="file">
                 </span>
     dasdasd
           <  </div> -->
            <!-- <label>Selecciona una foto (opcional)</label>
             <div class="fileinput fileinput-new input-group" tag="foto" data-provides="fileinput">
                 <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                 <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><b>Buscar foto</b></span><span class="fileinput-exists"><b>Cambiar</b></span><input type="file" name="data[User][foto]"></span>
                 <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><b>Remover</b></a>
             </div>-->
        </div>  

        <br>
        <div class="row"> 
            <div class="col-lg-4">
                <?php
                $options = array('label' => 'Guardar', 'type' => "submit", "id" => "btnGuaEmpNac", 'class' => 'btn btn-primary', 'div' => false);
                echo $this->Form->end($options);
                ?> 
                <?php
                $options = array('label' => 'Cancelar', "id" => "btnCanGuaEmpNac", 'class' => 'btn btn-warning', 'div' => false);
                echo $this->Form->end($options);
                ?>
            </div>
        </div> 
    </div>
</div>
<!-- <input type="file" id="foto" name="data[User][foto]"> -->

