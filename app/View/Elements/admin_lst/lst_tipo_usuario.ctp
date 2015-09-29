<!-- TIPO DE USUARIO -->
<div class="col-lg-4">
    <div class="form-group">
        <?php echo $this->Form->create('User', array('id' => "formUserList", "controller"=>"users","action"=>"index")); ?>
        <input type="hidden" name="data[User][busIndex]" value="busIndex" />

        <?php
        if ($this->Session->check("rolSeleccionado")) {
            $rolSeleccionado = $this->Session->read("rolSeleccionado");
        } else {
            $rolSeleccionado = null;
        }
       // echo $rolSeleccionado;
        echo $this->Form->input('rol_id', array("name" => "busqueda", "div" => false, "id" => "cboRolList", 'tag' => 'rol_id', "label" => "Tipo de usuario*", "type" => "select", "class" => "form-control", "default" => $rolSeleccionado));
        ?>
        </form>
    </div>

</div>  