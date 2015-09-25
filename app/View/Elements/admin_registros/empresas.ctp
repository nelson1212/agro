<!-- DATOS BASICOS -->
<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Datos del usuario tipo empresa (lo campos marcados con * son obligatorios) </b></h3>
    </div>
    <div class="panel-body">

        <?php echo $this->Form->create('User', array('id' => "formUserEmp", "novalidate" => "novalidate")); ?>
      
        <div class="row">
            <!-- UBICACIÓN -->
            <div class="col-lg-4">
                <div class="form-group">
                    
                    <?php 
                        
                        echo $this->Form->input('ubicacion', array("div" => false, "options" => $ubicaciones, "id" => "cboSetDivUbiEmp", "label" => "Selecciona la ubicación de la empresa", 'tag' => 'ubicacion', "type" => "select", "default"=>"", "class" => "form-control")); ?>

                </div>

            </div>
        </div>
     

        <div id="divFormUbicacion">
            
        </div>
        
     

    </div>
    </form>
</div>
