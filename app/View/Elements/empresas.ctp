 <input type="hidden" name="tipo" id="tipo" value="empresas" />
            <!-- DATOS BASICOS -->
            <fieldset class="well the-fieldset"> 
                <legend class="the-legend">
                    Datos basicos
                </legend>
                <!-- IDENTIFICACIÓN -->
                <div class="col-lg-4" >
                    <div class="form-group">
                        <?php echo $this->Form->input('identificacion', array("div" => false, "type"=>"number", "id" => "txtIdentificacion", "label" => "NIT", "maxlength"=>30, 'tag' => 'identificacion', "class" => "form-control")); ?>
                    </div>
                </div>

                <!-- NOMBRES -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('nombres', array("div" => false, "label" => "Nombre o Razon Social", "id" => "txtNombres", "maxlength"=>80, 'tag' => 'nombres', "class" => "form-control")); ?>

                    </div>

                </div>
                <!-- FOTO -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('foto', array('type' => 'file', "id" => "imgFoto", 'label' => 'Logo, Foto o Imagen alusiva', 'tag' => 'foto', "class" => "form-control")); ?>

                    </div>

                </div>

            </fieldset>   

            <!-- DATOS DE UBICACIÓN -->
            <fieldset class="well the-fieldset"> 
                <legend class="the-legend">
                    Datos de ubicación
                </legend>

                <!-- CIUDAD -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('ciudad_id', array("div" => false,"id" => "cboCiudad2", "label" => "Municipio", 'tag' => 'ciudad_id', "type" => "select", "class" => "form-control")); ?>

                    </div>

                </div>


                <!-- CORREGIMIENTOS -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('corregimiento_id', array("div" => false,"id" => "2", 'tag' => 'corregimiento_id', "label" => "Corregimiento, Vereda o Resguardo", "type" => "select", "class" => "form-control")); ?>

                    </div>

                </div>

                <!-- DIRECCION -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('direccion', array("div" => false, "id" => "txtDireccion", "label" => "Direccion", 'tag' => 'direccion', "class" => "form-control")); ?>

                    </div>
                </div>

                <!-- PERSONA DE CONTACTO -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('persona_contacto', array("div" => false, "id" => "txtPerCon", 'tag' => 'persona_contacto', "maxlength"=>150, "label" => "Nombre de la persona de contacto", "class" => "form-control")); ?>

                    </div>
                </div>


                <!-- Celular de contacto -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('celular_contacto', array("div" => false, "id" => "txtCelCon", "label" => "Celular de contacto", "maxlength"=>15, 'tag' => 'celular_contacto', "class" => "form-control")); ?>

                    </div>
                </div>




                <!-- Telefono de contacto -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('telefono_contacto', array("div" => false, "id" => "txtTelCon", "label" => "Telefono de contacto", "maxlength"=>15,'tag' => 'telefono_contacto', "class" => "form-control")); ?>

                    </div>
                </div>

                <!-- EMAIL -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('email', array("div" => false, "label" => "Email", "id" => "txtEmail", 'tag' => 'email', "maxlength"=>254,"class" => "form-control")); ?>

                    </div>
                </div>



                <!-- DEPARTAMENTO -->
                <!-- <div class="col-lg-4">
                     <div class="form-group">
                <?php //echo $this->Form->input('departamento_id', array("div" => false, "label" => "Departamento",  'tag'=>'departamento2', "type" => "select", "class" => "form-control")); ?>
     
                     </div>
     
                 </div> -->





            </fieldset> 

            <!-- DATOS DE UBICACIÓN -->
            <fieldset class="well the-fieldset"> 
                <legend class="the-legend">
                    Datos agricolas
                </legend>
                <!-- TIPO DE AGRICULTURA -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('tipo_agricultura_id', array("div" => false, "id" => "cboTipAgr", "label" => "Tipo agricultura", 'tag' => 'tipAgr2', "type" => "select", "class" => "form-control")); ?>

                    </div>

                </div>                   
            </fieldset>