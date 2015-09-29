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
                    <?php echo $this->Form->input('nit', array("div" => false, "id" => "txtNit", "label" => "Nit", "maxlength" => 20, 'tag' => 'nit', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- RAZÓN SOCIAL -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('razon_social', array("div" => false, "id" => "txtRazonSocial", "label" => "Razón social", "maxlength" => 200, 'tag' => 'razon_social', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('email', array("div" => false, "id" => "txtEmail", "label" => "Correo electronico", "maxlength" => 150, 'tag' => 'email', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

        </div>  



        <div class="row">


            <!-- CIUDAD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('departamento_id', array("div" => false, "options" => $departamentos, "id" => "cboDepComNac", "label" => "Departamentos *", 'tag' => 'departamento_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>



            <!-- CIUDAD -->
            <div class="col-lg-4" id="">
                <div class="form-group">
                    <?php echo $this->Form->input('ciudad_id', array("div" => false, "options" => array(), "id" => "cboCiudad", 'tag' => 'ciudad_id', "label" => "Ciudades/Municipios *", "type" => "select", "class" => "form-control")); ?>

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
