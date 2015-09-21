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
        <fieldset class="well the-fieldset"> 
            <legend class="the-legend">
                Datos basicos del foro
            </legend>  

            <div class="row">
                <!-- NOMBRE CIENTIFICO -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('titulo', array("div" => false, "id" => "txtTitulo", 'tag' => 'titulo', "label" => "Titulo del foro *", "type" => "text", "class" => "form-control")); ?>

                    </div>

                </div>  
                
                 <!-- NOMBRE COMUN -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('texto', array("div" => false, "id" => "txtTexto", 'tag' => 'texo', "label" => "Breve descripción *", "type" => "text", "class" => "form-control")); ?>

                    </div>

                </div> 

                <!-- VARIEDADES -->
                <div class="col-lg-4">
                    <label>Variedades*</label>
                    <div class="form-group">
                        <?php echo $this->Form->input('categoria_id', array("div" => "Categoria *", "id" => "cboCategorias", "label" => false, "maxlength" => 15, 'tag' => 'categoria_id', "type" => "select", "class" => "form-control")); ?>

                    </div>

                </div>

               
            </div>
            
        </fieldset>





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
