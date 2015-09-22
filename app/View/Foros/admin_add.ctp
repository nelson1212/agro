<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b> CREAR FOROS </b></h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            Los campos marcados con * son obligatorios

        </div>

        <?php echo $this->Form->create('Foro', array('id' => "formForo", 'type' => 'file', "novalidate" => "novalidate")); ?>
        <input type="hidden" name="data[User][tipo]" value="otros" />
        <!-- DATOS DE PERFIL -->

        <div class="row">
            <!-- NOMBRE CIENTIFICO -->
            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $this->Form->input('nombre', array("div" => false, "id" => "txtNombre", 'tag' => 'nombre', "label" => "Titulo del foro *", "type" => "text", "class" => "form-control")); ?>


                </div>

            </div>

            <!-- VARIEDADES -->
            <div class="col-lg-6">
                <label>Categorias (Agregar temas (presiona el boton <i class="fa fa-plus-circle"></i> para nuevas categorias)*</label>
                <div class="input-group">
                    <?php echo $this->Form->input('categoria_id', array("div" => "false", "id" => "cboCategorias", "label" => false, "maxlength" => 15, 'tag' => 'categoria_id', "type" => "select", "class" => "form-control")); ?>
                    <span class="input-group-addon" id="btnAgregarTema">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                </div>

            </div>
        </div>
        <div class="row">
            <!-- NOMBRE COMUN -->
            <div class="col-lg-6">
                <div class="form-group">
                    <?php echo $this->Form->input('descripcion', array("div" => false, "id" => "txtDescripcion", 'tag' => 'descripcion', "label" => "Breve descripción *", "type" => "textarea", "class" => "form-control")); ?>

                </div>

            </div>
        </div>  

        <div class="row">
            <div class="col-lg-6">
                <!-- NOMBRE CIENTIFICO -->
                <label>Agregar temas (debes ingresar por lo menos un tema y presionar el boton <i class="fa fa-plus-circle"></i>)</label>
                <div class="input-group">
                    <input type="text" id="txtTema" class="form-control"/>
                    <span class="input-group-addon" id="btnAgregarTema">
                        <i class="fa fa-plus-circle"></i>
                    </span>
                </div>  
            </div>

            <!-- NOMBRE COMUN -->
            <div class="col-lg-6">
                <label>Listado de temas (doble clic en el tema que desees remover)</label>
                <div class="form-group">
                    <?php echo $this->Form->input('lstTemas', array("div" => false, 'multiple' => true, "id" => "lstTemas", 'tag' => 'lstTemas', "label" => false, "type" => "select", "class" => "form-control")); ?>

                </div>

            </div> 
        </div>

        <br>

        <div class="row">
            <div class="col-lg-4">
                <?php
                $options = array('label' => 'Guardar', 'type' => "submit", "id" => "btnGuaPro", 'class' => 'btn btn-primary', 'div' => false);
                echo $this->Form->end($options);
                ?> 
                <?php
                $options = array('label' => 'Cancelar', "id" => "btnCanRegPro", 'class' => 'btn btn-warning', 'div' => false);
                echo $this->Form->end($options);
                ?>
            </div>
        </div>
    </div>
</div>
