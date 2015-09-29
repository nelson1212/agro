<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Seleccione un tipo de usuario </b></h3>
    </div>
    <div class="panel-body">


        <div class="row">     

            <?php echo $this->element("admin_lst/lst_tipo_usuario"); ?>
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

