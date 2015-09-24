<div class="panel panel-default maginPanel" id="divPanel" > <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>REGISTRO DE USUARIOS </b></h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <label for="txtCodVer"> Ingresa el código de pre-registro y presiona el boton verificar</label>
                <div class="input-group">
                    <input type="text" id="txtCodVer" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button">
                            <b>Verificar</b>
                        </button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>

    </div>
</div>


<div class="panel panel-default maginPanel" id="divPanel" style="visibility: hidden;"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>REGISTRO DE PRODUCTOS </b></h3>
    </div>
    <div class="panel-body">

        <div class="form-group">
            Los campos marcados con * son obligatorios

        </div>


        <?php echo $this->Form->create('Producto', array('id' => "formProducto", 'type' => 'file', "novalidate" => "novalidate")); ?>
        <input type="hidden" name="data[User][tipo]" value="otros" />
        <!-- DATOS DE PERFIL -->


        <div class="row">
            <!-- NOMBRE CIENTIFICO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('nombre_cientifico', array("div" => false, "id" => "txtNombreCientifico", 'tag' => 'nombre_cientifico', "label" => "Nombre cientifico *", "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>  

            <!-- NOMBRE COMUN -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('nombre_comun', array("div" => false, "id" => "txtNombreComun", 'tag' => 'nombre_comun', "label" => "Nombre comun *", "type" => "text", "class" => "form-control")); ?>

                </div>

            </div> 

            <!-- VARIEDADES -->
            <div class="col-lg-4">
                <label>Variedades*</label>
                <div class="form-group">
                    <?php echo $this->Form->input('variedades', array("div" => false, "id" => "txtVariedades", "label" => false, "maxlength" => 15, 'tag' => 'variedades', "data-role" => "tagsinput", "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>


        </div>
        <div class="row">
            <!-- EMBALAJE -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('embalaje_id', array("div" => false, "id" => "cboEmbalajes", "label" => "Tipo de embalaje*", "maxlength" => 15, 'tag' => 'embalaje_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>


            <!-- FECHA DE COSECHA -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('fecha_cosecha', array("div" => false, "id" => "txtFechaCosecha", "label" => "Fecha de cosecha*", "maxlength" => 15, 'tag' => 'fecha_cosecha', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- FECHA DE SIEMBRA -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('fecha_siembra', array("div" => false, "id" => "txtFechaSiembra", "label" => "Fecha de siembra*", "maxlength" => 15, 'tag' => 'fecha_siembra', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>
        </div>

        <div class="row">
            <!-- ESTADO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('estado_id', array("div" => false, "id" => "cboEstados", "label" => "Estados*", "maxlength" => 15, 'tag' => 'estado_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- PESO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('peso_gr', array("div" => false, "id" => "txtPeso", "label" => "Peso (en gramos) *", "maxlength" => 15, 'tag' => 'peso_gr', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- PRECIO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('precio', array("div" => false, "id" => "txtPrecio", "label" => "Precio *", "maxlength" => 15, 'tag' => 'precio', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>
        </div>

        <div class="row">
            <!-- CANTIDAD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('cantidad', array("div" => false, "id" => "txtCantidad", "label" => "Cantidad *", "maxlength" => 15, 'tag' => 'precio', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- COLOR -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('color_id', array("div" => false, "id" => "txtColor", "label" => "Color *", "maxlength" => 15, 'tag' => 'precio', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>


            <!-- ALTURA -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('altura_msnm', array("div" => false, "id" => "txtAltura", "label" => "Altura *", "maxlength" => 15, 'tag' => 'altura', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>
        </div>
        <div class="row">
            <!-- CALIDAD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('calidad_id', array("div" => false, "id" => "txtCalidad", "label" => "Calidad *", "maxlength" => 15, 'tag' => 'calidad_id', "type" => "text", "class" => "form-control")); ?>

                </div>

            </div>
            <!-- PRESENTACIÓN -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('presentacion_id', array("div" => false, "id" => "cboPresentaciones", "label" => "Presentacion *", "maxlength" => 15, 'tag' => 'presentacion_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>
            <!-- BRILLO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('brillo_id', array("div" => false, "id" => "cboBrillos", "label" => "Brillo *", "maxlength" => 15, 'tag' => 'brillo_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>
        </div>
        <div class="row">

            <!-- SANIDAD -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('sanidad_id', array("div" => false, "id" => "cboSanidades", "label" => "Sanidad *", "maxlength" => 15, 'tag' => 'sanidad_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>

            <!-- LAVADO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->input('lavado_id', array("div" => false, "id" => "cboLavados", "label" => "Tipo de lavado*", "maxlength" => 15, 'tag' => 'lavado_id', "type" => "select", "class" => "form-control")); ?>

                </div>

            </div>
        </div>

        <div class="row">
            <!-- FOTO -->
            <div class="col-lg-6">
                <label>Selecciona una foto (opcional)</label>
                <div class="fileinput fileinput-new input-group" tag="foto" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><b>Buscar foto</b></span><span class="fileinput-exists"><b>Cambiar</b></span><input type="file"  name="data[User][foto]"></span>
                    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><b>Remover</b></a>
                </div>
            </div> 
        </div>




        <br>
        <div class="row">

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
</div>

