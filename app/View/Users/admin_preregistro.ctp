<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>PRE-REGISTRO DE USUARIOS </b></h3>
    </div>
    <div class="panel-body">
        <div class="row">

            <?php echo $this->Form->create('User', array('id' => "formUserPre", 'type' => 'file', "novalidate" => "novalidate")); ?>
            <!-- DATOS DE PERFIL -->


                <!-- TIPO DE USUARIO -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <?php echo $this->Form->input('rol_id', array("div" => false, "id" => "cboRolPre", 'tag' => 'rol_id', "label" => "Tipo de usuario*", "type" => "select", "class" => "form-control")); ?>

                    </div>

                </div>  
            </form>
        </div>
    </div>
</div>

<?php
if(!empty($element)){
    echo $this->element("admin_pre_registros/".$element); 
}
?>