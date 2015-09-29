<div class="panel panel-default maginPanel" id="divPanel" > <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>REGISTRO DE USUARIOS </b></h3>
    </div>
    <div class="panel-body">
        <?php echo $this->Form->create('User', array('id' => "formUser1", "controller" => "users", "action" => "add", 'type' => 'file', "novalidate" => "novalidate")); ?>
        <label for="txtCodVer"> Ingresa el código de pre-registro y presiona el boton verificar</label>
        <div class="row">
            <div class="col-lg-6">

                <div class="input-group">
                    <?php
                    $label = "";
                    echo $this->Form->input('codVer', array("div" => false, "id" => "txtCodVer",
                        "label" => false, "maxlength" => 15, 'tag' => 'codVer', "class" => "form-control"));
                    ?>
                    <!-- <input type="text" id="txtCodVer" class="form-control"> -->
                    <span class="input-group-btn">
                        <button class="btn btn-success" id="btnVerificarReg1" type="submit">
                            <b>Verificar</b>
                        </button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
        </div>
        </form>
        </form>
    </div>
</div>
<div id="divContenido">
    <?php
    //echo $elemento;
    if (!empty($elemento)) {
        echo $this->element($elemento);
    }
    ?>
    <div id="divElemento"></div>
</div>
