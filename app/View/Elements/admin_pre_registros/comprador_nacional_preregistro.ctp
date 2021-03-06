<!-- PANEL -->
<div class="panel panel-default" id="divPanel"> 
    <div class="panel-heading">
        <h3 class="panel-title"><b>Ingresa la siguiente información para el pre-registro del usuario de tipo <?php echo $titulo; ?></b></h3>
    </div>
    <div class="panel-body">
       

            <?php echo $this->Form->create('Preregistro', array('id' => "formUserPreCom", 'type' => 'file', "novalidate" => "novalidate")); ?>

            <!-- DATOS DE PERFIL -->
            
            <div class="row">
            <!-- IDENTIFICACIÓN -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('identificacion', array("div" => false, "id" => "txtIdentificacion", "label" => "Identificación", "maxlength" => 20, 'tag' => 'identificacion', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- NOMBRES -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('nombres', array("div" => false, "id" => "txtNombres", "label" => "Nombres", "maxlength" => 40, 'tag' => 'nombres', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- APELLIDOS -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('apellidos', array("div" => false, "id" => "txtApellidos", "label" => "Apellidos", "maxlength" => 40, 'tag' => 'apellidos', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>
            </div>

            <div class="row">
                <!-- EMAIL -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('email', array("div" => false, "id" => "txtEmail", "label" => "Correo electronico", "maxlength" => 150, 'tag' => 'email', "type" => "text", "class" => "form-control")); ?>

                    </div>

                </div>

                <!-- DEPARTAMENTOS -->
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
        
      <!--  <div class="row" style="display: none;" id="reqInte">
           
               <!-- NÚMERO DE CONSULADO -
            <div class="col-lg-4">
                <div class="form-group">
                    <?php //echo $this->Form->input('num_consulado', array("div" => false, "id" => "txtNumConsulado", "label" => "Certificado(número) de consulado", "maxlength" => 50, 'tag' => 'num_consulado', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>
            <!-- NÚMERO DE IDONIEDAD 
            <div class="col-lg-4" >
                <div class="form-group">
                    <?php //echo $this->Form->input('num_idoniedad', array("div" => false, "id" => "txtNumIdoniedad", "label" => "Certificado(número) de idoneidad", "maxlength" => 50, 'tag' => 'num_idoniedad', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>
       
        </div> -->
   
        <div class="row">

            <div class="col-lg-4">
                <?php
                $options = array('label' => 'Realizar pre-registro', 'type' => "button", "id" => "btnGuaUsuPreCom", 'class' => 'btn btn-primary', 'div' => false);
                echo $this->Form->end($options);
                ?> 
                <?php
                $options = array('label' => 'Cancelar', "id" => "btnCanRegUsuCom", 'class' => 'btn btn-warning', 'div' => false);
                echo $this->Form->end($options);
                ?>
            </div>
        </div>

</div>
