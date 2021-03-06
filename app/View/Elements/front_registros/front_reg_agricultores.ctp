<!-- DATOS BASICOS -->
<div class="panel panel-default maginPanel" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Datos del usuario tipo agricultor </b></h3>
    </div>
    <div class="panel-body">

        <?php echo $this->Form->create('User', array('id' => "formFrontUserAgr", 'controller'=>"users",'action'=>"add", 'type' => 'file', "novalidate" => "novalidate")); ?>
       
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
                    <?php echo $this->Form->input('genero', array("div" => false, "label" => "Genero*", "id" => "cboGenero", 'tag' => 'genero', "type" => "select", "options" => $generos, "class" => "form-control")); ?>

                </div>

            </div>
            
              <!-- GENERO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('nickname', array("div" => false, "label" => "Nickname *", "id" => "txtNickName", 'tag' => 'nickname', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>


            <!-- EMAIL -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('email', array("div" => false, "label" => "Email*", "id" => "txtEmail", 'tag' => 'email', "maxlength" => 254, "class" => "form-control")); ?>

                </div>
            </div>
         </div>
        
             <div class="row">
            <!-- DIRECCION -->
            <!--<div class="col-lg-4">
                <div class="form-group">
            <?php //echo $this->Form->input('direccion', array("div" => false, 'tag'=>'direccion',"label" => "Direccion", "class" => "form-control")); ?>
        
                </div>
            </div> -->


            <!-- TELEFONO DE CONTACTO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('telefono_contacto', array("div" => false, "id" => "txtTelCon", "label" => "Telefono de contacto", "maxlength" => 15, 'tag' => 'telefono_contacto', "class" => "form-control")); ?>

                </div>
            </div>

            <!-- CELULAR DE CONTACTO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('celular_contacto', array("div" => false, "id" => "txtCelCon", 'tag' => 'celular_contacto', "maxlength" => 15, "label" => "Celular de contacto", "class" => "form-control")); ?>

                </div>
            </div>


            <!-- CIUDAD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('ciudad_id', array("div" => false, "id" => "cboCiudad", "label" => "Municipio*", 'tag' => 'ciudad_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>

             </div>
         <div class="row">
            <!-- CORREGIMIENTOS -->
            <div class="col-lg-4" id="">
                <div class="form-group">
                    <?php echo $this->Form->input('corregimiento_id', array("div" => false, "id" => "cboCorregimientos", 'tag' => 'corregimiento_id', "label" => "Corregimiento, Vereda o Resguardo*", "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>


            <!-- TIPO DE AGRICULTURA -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('tipo_agricultura_id', array("div" => false, "id" => "cboTipAgr", "label" => "Tipo agricultura*", 'tag' => 'tipo_agricultura_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>      

            <!-- ASOCIACIONES -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('asociacion_id', array("options" => $asociaciones, "div" => false, "id" => "cboTipAgr", "label" => "Asociación (opcional)", 'tag' => 'tipo_agricultura_id', "type" => "select", "class" => "form-control")); ?>
                </div>

            </div>   
         </div>
        
         <div class="row">
            <!-- CERTIFICACIONES -->
            <div class="col-lg-4">
                <label>Certificaciónes (opcional)</label>
                <div class="form-group">
                    <?php
                    echo $this->Form->input('certificacion', array("options" => $certificaciones, "id" => "cboCertificaciones",
                        "label" => false, "multiple" => "multiple",
                        'tag' => 'certificacion', "type" => "select", "class" => "multiselect"));
                    ?>
                </div>
            </div> 

        </div>


        <!-- foto -->
        <div class="row"> 

            <!-- FOTO -->
            <div class="col-lg-7">
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
                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new" ><b>Buscar</b></span><span class="fileinput-exists"><b>Cambiar</b></span><input type="file" name="data[User][foto]"></span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><b>Remover</b></a>
                </div>
            </div> 

        </div> 
        <br>
        <div class="row"> 
            <div class="col-lg-4">
                <?php
                $options = array('label' => 'Guardar', 'type' => "submit", "name" => "btnFrontGuaAgr", "id" => "btnFrotGuaAgr", 'class' => 'btn btn-primary', 'div' => false);
                echo $this->Form->end($options);
                ?> 
                <?php
                $options = array('label' => 'Cancelar', "id" => "btnCanRegUsu", 'class' => 'btn btn-warning', 'div' => false);
                echo $this->Form->end($options);
                ?>
            </div>
        </div> 

    </div>
<!-- <input type="file" id="foto" name="data[User][foto]"> -->
</div>   
