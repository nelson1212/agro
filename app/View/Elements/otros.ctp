<!-- DATOS BASICOS -->
            <input type="hidden" name="tipo" id="tipo" value="otros" />
            <fieldset class="well the-fieldset"> 
                <legend class="the-legend">
                    Datos basicos
                </legend>
                <!-- IDENTIFICACIÓN -->
                <div class="col-lg-4" >
                    <div class="form-group">
                        <?php echo $this->Form->input('identificacion', array("div" => false, "id" => "txtIdentificacion", "label" => "Identificación*", "maxlength"=>25,'tag' => 'identificacion', "class" => "form-control")); ?>
                    </div>
                </div>

                <!-- NOMBRES -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('nombres', array("div" => false, "id" => "txtNombres", "label" => "Nombres*", 'tag' => 'nombres', "maxlength"=>80,"class" => "form-control")); ?>

                    </div>

                </div>

                <!-- APELLIDOS -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('apellidos', array("div" => false, "id" => "txtApellidos", "label" => "Apellidos*", 'tag' => 'apellidos',"maxlength"=>80, "class" => "form-control")); ?>

                    </div>

                </div>

                <!-- GENERO -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('genero', array("div" => false, "label" => "Genero*", "id" => "cboGenero", 'tag' => 'genero', "type" => "select", "options" => $generos, "class" => "form-control")); ?>

                    </div>

                </div>


                <!-- FOTO -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('foto', array('type' => 'file', 'label' => 'Foto', "id" => "imgFoto", 'tag' => 'foto', "class" => "form-control")); ?>

                    </div>

                </div>

            </fieldset>   

            <!-- DATOS DE UBICACIÓN -->
            <fieldset class="well the-fieldset"> 
                <legend class="the-legend">
                    Datos de ubicación
                </legend>




                <!-- DEPARTAMENTO -->
                <!-- <div class="col-lg-4">
                     <div class="form-group">
                <?php echo $this->Form->input('departamento_id', array("div" => false, "id" => "cboDepartamento", "label" => "Departamento*", 'tag' => 'departamento_id', "type" => "select", "class" => "form-control")); ?>
     
                     </div>
     
                 </div> -->

                <!-- CIUDAD -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('ciudad_id', array("div" => false, "id" => "cboCiudad", "label" => "Municipio*", 'tag' => 'ciudad_id', "type" => "select", "class" => "form-control")); ?>

                    </div>

                </div>

                <!-- CORREGIMIENTOS -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('corregimiento_id', array("div" => false, "id" => "cboCorregimiento", 'tag' => 'corregimiento_id', "label" => "Corregimiento, Vereda o Resguardo*", "type" => "select", "class" => "form-control")); ?>

                    </div>

                </div>

                <!-- EMAIL -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('email', array("div" => false, "label" => "Email*", "id" => "txtEmail", 'tag' => 'email', "maxlength"=>254, "class" => "form-control")); ?>

                    </div>
                </div>

                <!-- DIRECCION -->
                <!-- <div class="col-lg-4">
                    <div class="form-group">
                <?php //echo $this->Form->input('direccion', array("div" => false, 'tag'=>'direccion',"label" => "Direccion", "class" => "form-control")); ?>

                    </div>
                </div> -->


                <!-- TELEFONO DE CONTACTO -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('telefono_contacto', array("div" => false,"id" => "txtTelCon", "label" => "Telefono de contacto", "maxlength"=>15,'tag' => 'telefono_contacto', "class" => "form-control")); ?>

                    </div>
                </div>

                <!-- CELULAR DE CONTACTO -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('celular_contacto', array("div" => false, "id" => "txtCelCon", 'tag' => 'celular_contacto', "maxlength"=>15, "label" => "Celular de contacto", "class" => "form-control")); ?>

                    </div>
                </div>


            </fieldset> 

            <!-- DATOS AGRICOLAS -->
            <fieldset class="well the-fieldset"> 
                <legend class="the-legend">
                    Datos agricolas
                </legend>
                <!-- TIPO DE AGRICULTURA -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('tipo_agricultura_id', array("div" => false, "id" => "cboTipAgr", "label" => "Tipo agricultura*", 'tag' => 'tipo_agricultura_id', "type" => "select", "class" => "form-control")); ?>

                    </div>

                </div>                   
            </fieldset>


      