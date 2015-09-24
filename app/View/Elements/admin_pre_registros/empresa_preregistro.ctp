<!-- PANEL -->
<div class="panel panel-default" id="divPanel"> 
    <div class="panel-heading">
        <h3 class="panel-title"><b>Ingresa la siguiente información para el pre-registro del usuario de tipo <?php echo $titulo; ?></b></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <?php echo $this->Form->create('Preregistro', array('id' => "formUserPreEmp", "novalidate" => "novalidate")); ?>
            <!-- DATOS DE PERFIL -->


       
            <!-- USERNAME -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('nit', array("div" => false, "id" => "txtNit", "label" => "Nit", "maxlength" => 20, 'tag' => 'identificacion', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- PASSWORD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('rut', array("div" => false, "id" => "txtRut", "label" => "Rut", "maxlength" => 25, 'tag' => 'nombres', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- CONFIRMAR PASSWORD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('razon_social', array("div" => false, "id" => "txtRazonSocial", "label" => "Razón social", "maxlength" => 200, 'tag' => 'apellidos', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>


            <!-- CONFIRMAR PASSWORD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('email', array("div" => false, "id" => "txtEmail", "label" => "Correo electronico", "maxlength" => 150, 'tag' => 'email', "type" => "text", "class" => "form-control")); ?>

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
