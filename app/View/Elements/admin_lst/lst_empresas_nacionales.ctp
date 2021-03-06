<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Filtros que puedes aplicar al listado </b></h3>
    </div>
    <div class="panel-body">

        <div class="row">     
            <?php echo $this->element("admin_lst/lst_tipo_usuario"); ?>
        </div>

        <?php echo $this->Form->create('Agricultor', array('id' => "formBusAdmin")); ?>
        <input type="hidden" name="data[User][busqueda]" value="administradores" />
        <div class="row">
            <div class="col-lg-2">    
                <div class="form-group">
                    <label for="filtroNom">Identificación</label>
                    <?php echo $this->Form->input('filIde', array("div" => false, "name" => "filIde", "id" => "filIde", "label" => "", "type" => "text", "class" => "form-control")); ?>
                </div>
            </div>

           <!-- <div class="col-lg-2">    
                <div class="form-group">
                    <label for="filtroNom">Nombres</label>
                    <?php echo $this->Form->input('filNom', array("div" => false, "name" => "filNom", "id" => "filNom", "label" => "", "type" => "text", "class" => "form-control")); ?>
                </div>
            </div>

            <div class="col-lg-2">    
                <div class="form-group">
                    <label for="filtroNom">Apellidos</label>
                    <?php echo $this->Form->input('filApe', array("div" => false, "name" => "filApe", "id" => "filApe", "label" => "", "type" => "text", "class" => "form-control")); ?>
                </div>
            </div>

            <div class="col-lg-3">    
                <div class="form-group">
                    <label for="filtroNom">Email</label>
                    <?php echo $this->Form->input('filEmail', array("div" => false, "name" => "filEmail", "id" => "filEmail", "label" => "", "type" => "text", "class" => "form-control")); ?>
                </div>
            </div> -->

        </div>

        <div class="row">
            <div class="col-xs-2">                 
                <button class="btn btn-primary"  tag ="administradores" id="btnBusAdm" type="submit">
                    <i class="fa fa-search" ></i> Filtrar busqueda 
                </button>

            </div>
        </div>

        </form>
    </div>
</div>

<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>
                <?php
                if ($this->Session->check("titulo")) {
                    $titulo = $this->Session->read("titulo");
                    echo $titulo;
                } else {
                   
                    $titulo = null;
                }
                ?>
            </b></h3>
    </div>
    <div class="panel-body">

        <div class="row">
            <div class="container-fluid"> 

                <div class="" id="">
                    <div class="form-group" id="data_table">


                        <div class="dataTable_wrapper" style="overflow: scroll;">
                            <table style="max-width:100%;white-space:nowrap;" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('nit'); ?></th>
                                        <th><?php echo $this->Paginator->sort('razón social'); ?></th>
                                        <th><?php echo $this->Paginator->sort('representante_legal'); ?></th>
                                        <th><?php echo $this->Paginator->sort('foto'); ?></th>


                                        <th><?php echo $this->Paginator->sort('username'); ?></th>

                                        <th><?php echo $this->Paginator->sort('email'); ?></th>

                                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                                        <th><?php echo $this->Paginator->sort('updated'); ?></th>
                                        <th class="text-center"><?php echo __('Acciones'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
//debug($users);
                                    foreach ($empresaNacionals as $user):
                                        ?>
                                        <tr>
                                            <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                                            <td><?php echo h($user['User']['identificacion']); ?>&nbsp;</td>
                                            <td><?php echo h($user['EmpresaNacional']['razon_social']); ?>&nbsp;</td>
                                            <td><?php echo h($user['EmpresaNacional']['representante_legal']); ?>&nbsp;</td>
                                            <td><?php echo h($user['User']['foto']); ?>&nbsp;</td>


                                            <td><?php echo h($user['User']['username']); ?>&nbsp;</td>

                                            <td><?php echo h($user['User']['email']); ?>&nbsp;</td>


                                            <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                                            <td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
                                            <td class="text-center block" >

                                                <?php //echo $this->Html->link(__('View'), array('action' => 'view', $barrio['Barrio']['id']));   ?>
                                                <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id']), array('id' => 'myId', 'class' => 'btn btn-info')); ?>
                                                <button type="button" class="btn btn-danger" value="<?php echo $user['User']['id']; ?>" id="btnBorrarAdmin">Borrar</button>   

                                            </td> 
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div> 
                    </div>
                </div>


                <div class="paging">
                    <p>
                        <?php
                        echo $this->Paginator->counter(array(
                            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                        ));
                        ?>	
                    </p>
                    <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                    ?>
                </div>

                <br>

            </div>

        </div>
    </div>
</div>

