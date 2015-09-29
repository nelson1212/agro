<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>REGISTRO BASE DE PRODUCTOS </b></h3>
    </div>
    <div class="panel-body">

        <div class="form-group">
            Los campos marcados con * son obligatorios

        </div>


        <?php echo $this->Form->create('Producto', array('id' => "formProducto", 'type' => 'file', "novalidate" => "novalidate")); ?>
        <input type="hidden" name="data[User][tipo]" value="otros" />
        <!-- DATOS DE PERFIL -->


        <div class="row">
            <!-- NOMBRE CIENTIFICO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('nombre_cientifico', array("div" => false, "id" => "txtNombreCientifico", 'tag' => 'nombre_cientifico', "label" => "Nombre cientifico *", "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>  

            <!-- NOMBRE COMUN -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('nombre_comun', array("div" => false, "id" => "txtNombreComun", 'tag' => 'nombre_comun', "label" => "Nombre comun *", "type" => "text", "class" => "form-control")); ?>

                </div>

            </div> 

            <!-- VARIEDADES -->
            <div class="col-lg-4">
                <label>Variedades*</label>
                <div class="form-group">
                    <?php echo $this->Form->input('variedades', array("div" => false, "id" => "txtVariedades", "label" => false, "maxlength" => 15, 'tag' => 'variedades', "data-role" => "tagsinput", "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>


        </div>







        <div class="row">
            <!-- FOTO -->
            <div class="col-lg-6">
                <label>Selecciona una foto (opcional)</label>
                <div class="fileinput fileinput-new input-group" tag="foto" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><b>Buscar foto</b></span><span class="fileinput-exists"><b>Cambiar</b></span><input type="file"  name="data[User][foto]"></span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><b>Remover</b></a>
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
