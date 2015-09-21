<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>REGISTRO DE USUARIOS </b></h3>
    </div>
    <div class="panel-body">

        <div class="form-group">
            Los campos marcados con * son obligatorios

        </div>


        <?php echo $this->Form->create('User', array('id' => "formUser", 'type' => 'file', "novalidate" => "novalidate")); ?>
        <input type="hidden" name="data[User][tipo]" value="otros" />
        <!-- DATOS DE PERFIL -->
        <fieldset class="well the-fieldset"> 
            <legend class="the-legend">
                Datos de perfil
            </legend>  
            <!-- TIPO DE USUARIO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('rol_id', array("div" => false, "id" => "cboRol", 'tag' => 'rol_id', "label" => "Tipo de usuario*", "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>  

            <!-- USERNAME -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('username', array("div" => false, "id" => "txtUsername", "label" => "Usuario*", "maxlength" => 15, 'tag' => 'username', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- PASSWORD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('password', array("div" => false, "id" => "txtContrasena", "label" => "Contraseña*", "maxlength" => 15, 'tag' => 'password', "type" => "password", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- CONFIRMAR PASSWORD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('password1', array("div" => false, "id" => "txtContrasena1", "label" => "Confirmar contraseña*", "maxlength" => 15, 'tag' => 'password1', "type" => "password", "class" => "form-control")); ?>

                </div>

            </div>

            
        </fieldset>

        <div id="divElementos">
            <div id="divContenido">

            </div>
        </div>




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



