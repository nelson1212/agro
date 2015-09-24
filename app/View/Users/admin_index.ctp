<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Seleccione un tipo de usuario </b></h3>
    </div>
    <div class="panel-body">


        <div class="row">     

            <!-- TIPO DE USUARIO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->create('User', array('id' => "formUserList")); ?>
                    <input type="hidden" name="data[User][busIndex]" value="busIndex" />
                  
                    <?php echo $this->Form->input('rol_id', array("div" => false, "id" => "cboRolList", 'tag' => 'rol_id', "label" => "Tipo de usuario*", "type" => "select", "class" => "form-control", "default"=>$rolSeleccionado)); ?>
                    </form>
                </div>

            </div>  
        </div>
    </div>
</div>


<div id="divElementos">
<?php
if (!empty($element)) {
    echo $this->element("admin_lst/".$element, array('flag' => 'value'));
}
?>
</div>

