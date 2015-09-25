<!-- DATOS BASICOS -->
<div class="panel panel-default maginPanel" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Ubicación de la empresa </b></h3>
    </div>
    <div class="panel-body">

        <?php echo $this->Form->create('User', array('id' => "formFrontUserUbiEmp", 'controller' => "users", 'action' => "add", 'type' => 'file', "novalidate" => "novalidate")); ?>

        <div class="row">
            <!-- UBICACIÓN -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('ubicacion', array("div" => false, "options" => $ubicaciones, "id" => "cboFrontUbicaciones", "name"=>"cboFrontUbicaciones" , "label" => "Selecciona una ubicación*", 'tag' => 'ubicacion', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>
        </div> 
        </form>
    </div>
<!-- <input type="file" id="foto" name="data[User][foto]"> -->
</div>   


<!-- DATOS BASICOS -->
<div class="panel panel-default maginPanel" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Datos del usuario tipo empresa </b></h3>
    </div>
    <div class="panel-body">

        <?php echo $this->Form->create('User', array('id' => "formFrontUserAgr", 'controller' => "users", 'action' => "add", 'type' => 'file', "novalidate" => "novalidate")); ?>

        <div class="row">
            <!-- IDENTIFICACIÓN -->
            <div class="col-lg-4" >
                <div class="form-group">
                    <?php echo $this->Form->input('nit', array("div" => false, "type" => "number", "id" => "txtIdentificacion", "label" => "NIT", "maxlength" => 30, 'tag' => 'identificacion', "class" => "form-control")); ?>
                </div>
            </div>

            <!-- NOMBRES -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('razon_social', array("div" => false, "label" => "Nombre o Razon Social", "id" => "txtNombres", "maxlength" => 80, 'tag' => 'nombres', "class" => "form-control")); ?>

                </div>

            </div>




            <!-- CIUDAD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('ciudad_id', array("div" => false, "id" => "cboCiudad", "label" => "Ciudad/Municipio*", 'tag' => 'ciudad_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>


            <!-- DIRECCION -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('direccion', array("div" => false, "id" => "txtDireccion", "label" => "Direccion", 'tag' => 'direccion', "class" => "form-control")); ?>

                </div>
            </div>

            <!-- PERSONA DE CONTACTO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('persona_contacto', array("div" => false, "id" => "txtPerCon", 'tag' => 'persona_contacto', "maxlength" => 150, "label" => "Nombre de la persona de contacto", "class" => "form-control")); ?>

                </div>
            </div>


            <!-- Celular de contacto -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('celular_contacto', array("div" => false, "id" => "txtCelCon", "label" => "Celular de contacto", "maxlength" => 15, 'tag' => 'celular_contacto', "class" => "form-control")); ?>

                </div>
            </div>


            <!-- Telefono de contacto -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('telefono_contacto', array("div" => false, "id" => "txtTelCon", "label" => "Telefono de contacto", "maxlength" => 15, 'tag' => 'telefono_contacto', "class" => "form-control")); ?>

                </div>
            </div>

            <!-- EMAIL -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('email', array("div" => false, "label" => "Email", "id" => "txtEmail", 'tag' => 'email', "maxlength" => 254, "class" => "form-control")); ?>

                </div>
            </div>

        </div>
        <!-- foto -->
        <div class="row"> 

            <!-- FOTO -->
            <div class="col-lg-6">
                <!-- <label>Selecciona una foto (opcional)</label>
                 <div class="form-group">
                     <span class="btn btn-default btn-file">
                         Buscar foto <input type="file">
                     </span>
         dasdasd
               <  </div> -->
                <label>Selecciona una foto (opcional)</label>
                <div class="fileinput fileinput-new input-group" tag="foto" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><b>Buscar</b></span><span class="fileinput-exists"><b>Cambiar</b></span><input type="file" name="data[User][foto]"></span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><b>Remover</b></a>
                </div>
            </div> 

        </div> 
        <br>
        <div class="row"> 
            <div class="col-lg-4">
                <?php
                $options = array('label' => 'Guardar', 'type' => "submit", "id" => "btnGuaUsu", 'class' => 'btn btn-primary', 'div' => false);
                echo $this->Form->end($options);
                ?> 
                <?php
                $options = array('label' => 'Cancelar', "id" => "btnCanRegUsu", 'class' => 'btn btn-warning', 'div' => false);
                echo $this->Form->end($options);
                ?>
            </div>
        </div> 

    </div>
<!-- <input type="file" id="foto" name="data[User][foto]"> -->
</div>   
