<!-- PANEL -->
<div class="panel panel-default" id="divPanel"> 
    <div class="panel-heading">
        <h3 class="panel-title"><b>Ingresa la siguiente información para el pre-registro del usuario de tipo <?php echo $titulo; ?></b></h3>
    </div>
    <div class="panel-body">

        <?php echo $this->Form->create('Preregistro', array('id' => "formUserPreEmp", "novalidate" => "novalidate")); ?>
        <!-- DATOS DE PERFIL -->

        <div class="row">

            <!-- NIT -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('nombre', array("div" => false, "id" => "txtNombre", "label" => "Nombre", "maxlength" => 20, 'tag' => 'nombre', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- RAZÓN SOCIAL -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('persona_contacto', array("div" => false, "id" => "txtPersonaContacto", "label" => "Persona de contacto", "maxlength" => 200, 'tag' => 'persona_contacto', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('email', array("div" => false, "id" => "txtEmail", "label" => "Correo electronico", "maxlength" => 150, 'tag' => 'email', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

        </div>  



        <div class="row">


            <!-- PAIS -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('paiss_id', array("div" => false, "options" => $paisses, "id" => "cboPaisesEmpInt", "label" => "Paises *", 'tag' => 'paiss_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>



            <!-- CIUDAD -->
            <div class="col-lg-4" id="">
                <div class="form-group">
                    <?php echo $this->Form->input('ciudad', array("div" => false, "options" => array(), "id" => "txtCiudad", 'tag' => 'ciudad', "label" => "Ciudad*", "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>
            
              <!-- NÚMERO CONSULADO -->
            <div class="col-lg-4" id="">
                <div class="form-group">
                    <?php echo $this->Form->input('certificado_consulado', array("div" => false, "id" => "txtNumConsulado", 'tag' => 'consulado', "label" => "Certificado consulado*", "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>
        </div>
            <div class="row">

                <div class="col-lg-4">
                    <?php
                    $options = array('label' => 'Realizar pre-registro', 'type' => "button", "id" => "btnGuaUsuPreEmp", 'class' => 'btn btn-primary', 'div' => false);
                    echo $this->Form->end($options);
                    ?> 
                    <?php
                    $options = array('label' => 'Cancelar', "id" => "btnCanRegUsu", 'class' => 'btn btn-warning', 'div' => false);
                    echo $this->Form->end($options);
                    ?>
                </div>
            </div>
        </div>
    </div>
