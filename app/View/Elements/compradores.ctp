<!-- DATOS BASICOS -->
<fieldset class="well the-fieldset"> 
    <legend class="the-legend">
        Datos basicos
    </legend>
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

    <!-- GENERO -->
    <div class="col-lg-4">
        <div class="form-group">
            <?php echo $this->Form->input('genero', array("div" => false, "label" => "Genero*", "id" => "cboGenero", 'tag' => 'genero', "type" => "select", "options" => $generos, "class" => "form-control")); ?>

        </div>

    </div>


    <!-- EMAIL -->
    <div class="col-lg-4">
        <div class="form-group">
            <?php echo $this->Form->input('email', array("div" => false, "label" => "Email*", "id" => "txtEmail", 'tag' => 'email', "maxlength" => 254, "class" => "form-control")); ?>

        </div>
    </div>

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
    
  <!-- UBICACIÓN -->
    <div class="col-lg-4">
        <div class="form-group">
            <?php echo $this->Form->input('ubicacion', array("div" => false, "options"=>$ubicaciones, "id" => "cboUbicacion", "label" => "Ubicación*", 'tag' => 'ubicacion', "type" => "select", "class" => "form-control")); ?>

        </div>

    </div>
<!-- <input type="file" id="foto" name="data[User][foto]"> -->
</fieldset>   

<!-- foto -->
<fieldset class="well the-fieldset"> 
    <legend class="the-legend">
        Foto
    </legend>
    <!-- FOTO -->
    <div class="col-lg-6">
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
            <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new"><b>Buscar foto</b></span><span class="fileinput-exists"><b>Cambiar</b></span><input type="file"  name="data[User][foto]"></span>
            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput"><b>Remover</b></a>
        </div>
    </div> 

</fieldset> 



