<div id="divNacional">
    <div class="row" >

        <!-- NIT -->
        <div class="col-lg-4" >
            <div class="form-group">
                <?php echo $this->Form->input('nit', array("div" => false, "type" => "number", "id" => "txtNit", "label" => "NIT*", "maxlength" => 30, 'tag' => 'nit', "class" => "form-control")); ?>
            </div>
        </div>

        <!-- RAZÓN SOCIAL -->
        <div class="col-lg-4">
            <div class="form-group">
                <?php echo $this->Form->input('razon_social', array("div" => false, "type" => "number", "label" => "Nombre o Razon Social*", "id" => "txtNombres", "maxlength" => 80, 'tag' => 'razon_social', "class" => "form-control")); ?>

            </div>

        </div>

        <!-- DEPARTAMENTO -->
        <div class="col-lg-4">
            <div class="form-group">
                <?php echo $this->Form->input('departamento_id', array("div" => false, "id" => "cboDepartamento", "label" => "Departamento de ubicación (sede principal)*", 'tag' => 'departamento_id', "type" => "select", "class" => "form-control")); ?>

            </div>

        </div>


        <!-- CIUDAD -->
        <div class="col-lg-4">
            <div class="form-group">
                <?php echo $this->Form->input('ciudad_id', array("div" => false, "id" => "cboCiudad", "label" => "Ciudad/Municipio (sede principal)*", 'tag' => 'ciudad_id', "type" => "select", "class" => "form-control")); ?>

            </div>

        </div>

    </div>
       <div class="row">

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


        <div class="row">

            <!-- DIRECCION -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('direccion', array("div" => false, "id" => "txtDireccion", "label" => "Direccion", 'tag' => 'direccion', "class" => "form-control")); ?>

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
                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><b>Buscar foto</b></span><span class="fileinput-exists"><b>Cambiar</b></span><input type="file" name="data[User][foto]"></span>
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
