<!-- DATOS BASICOS -->
<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Datos del usuario tipo administrador </b></h3>
    </div>
    <div class="panel-body">
        <?php echo $this->Form->create('Administrador', array('id' => "formAdmin", 'type' => 'file', "novalidate" => "novalidate")); ?>

        <div class="row">
            <!-- IDENTIFICACIÓN -->
            <div class="col-lg-4" >
                <div class="form-group">
                    <?php echo $this->Form->input('identificacion', array("div" => false, "id" => "txtIdentificacion", "label" => "Identificación*", "maxlength" => 25, 'tag' => 'identificacion', "class" => "form-control")); ?>
                </div>
            </div>

            <!-- NOMBRES -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('nombres', array("div" => false, "id" => "txtNombres", "label" => "Nombres*", 'tag' => 'nombres', "maxlength" => 80, "class" => "form-control")); ?>

                </div>

            </div>

            <!-- APELLIDOS -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('apellidos', array("div" => false, "id" => "txtApellidos", "label" => "Apellidos*", 'tag' => 'apellidos', "maxlength" => 80, "class" => "form-control")); ?>

                </div>

            </div>


        </div>
        <div class="row">

            <!-- GENERO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('genero_id', array("div" => false, "label" => "Genero*", "id" => "cboGenero", 'tag' => 'genero_id', "type" => "select", "options" => $generos, "class" => "form-control")); ?>

                </div>

            </div>


            <!-- EMAIL -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('email', array("name" => "data[User][email]", "div" => false, "label" => "Email*", "id" => "txtEmail", 'tag' => 'email', "maxlength" => 254, "class" => "form-control")); ?>

                </div>
            </div>

            <!-- CELULAR DE CONTACTO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('celular', array("name" => "data[User][celular]", "div" => false, "id" => "txtCelCon", 'tag' => 'celular', "maxlength" => 15, "label" => "Celular de contacto", "class" => "form-control")); ?>

                </div>
            </div>



        </div>
        <div class="row">

            <!-- TELEFONO DE CONTACTO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('telefono', array("name" => "data[User][telefono]", "div" => false, "id" => "txtTelCon", "label" => "Telefono de contacto", "maxlength" => 15, 'tag' => 'telefono', "class" => "form-control")); ?>

                </div>
            </div>

            <!-- DIRECCION -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('direccion', array("name" => "data[User][direccion]","div" => false, 'tag'=>'direccion',"label" => "Direccion", "class" => "form-control")); ?>

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
            
             <!-- FOTO -->
            <div class="col-lg-4">
                <label>Selecciona una foto (opcional)</label>
                <div class="form-group">
                    <input type="file" name="data[User][foto]" id="foto" tag="foto" class="filestyle" />

                </div>

            </div>

       

<!-- <input type="file" id="foto" name="data[User][foto]"> -->
        </div>


        <!-- foto -->
        <div class="row"> 

                 <!-- COMENTARIOS -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('comentarios', array("name" => "data[User][comentarios]", "type" => "textarea", "div" => false, "id" => "txtComentarios", "label" => "Comentarios", "maxlength" => 15, 'tag' => 'comentarios', "class" => "form-control")); ?>

                </div>
            </div>
        

        </div> 
        <br>
        <div class="row"> 
            <div class="col-lg-4">
                <?php
                $options = array('label' => 'Guardar', 'type' => "submit", "name" => "btnGuaAdmin", "id" => "btnGuaAdmin", 'class' => 'btn btn-primary', 'div' => false);
                echo $this->Form->end($options);
                ?> 
                <?php
                $options = array('label' => 'Cancelar', "id" => "btnCanGuaAdmin", 'class' => 'btn btn-warning', 'div' => false);
                echo $this->Form->end($options);
                ?>
            </div>
        </div> 
        </form>
    </div>
</div>  
