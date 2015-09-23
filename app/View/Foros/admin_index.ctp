<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Filtros que puedes aplicar al listado </b></h3>
    </div>
    <div class="panel-body">
        <?php echo $this->Form->create('User', array('id' => "formBusAdmin")); ?>
        <input type="hidden" name="data[User][busqueda]" value="administradores" />
        <div class="row">
            <div class="col-lg-3">    
                <div class="form-group">
                    <label for="filtroNom">Titulo del foro</label>
                    <?php echo $this->Form->input('filIde', array("div" => false, "name" => "filIde", "id" => "filIde", "label" => "", "type" => "text", "class" => "form-control")); ?>
                </div>
            </div>

            <div class="col-lg-3">    
                <div class="form-group">
                    <label for="filtroNom">Creador del foro (nombre o iniciales)</label>
                    <?php echo $this->Form->input('filIde', array("div" => false, "name" => "filIde", "id" => "filIde", "label" => "", "type" => "text", "class" => "form-control")); ?>
                </div>
            </div>

            <div class="col-lg-3">    
                <div class="form-group">
                    <label for="filtroNom">Categoria</label>
                    <?php echo $this->Form->input('filNom', array("div" => false, "name" => "filNom", "id" => "filNom", "label" => "", "type" => "select", "options" => $categorias, "class" => "form-control")); ?>
                </div>
            </div>

            <div class="col-lg-3">    
                <div class="form-group">
                    <label for="filtroNom">Rango de fechas</label>
                    <?php echo $this->Form->input('filApe', array("div" => false, "name" => "filApe", "id" => "filApe", "label" => "", "type" => "text", "class" => "form-control")); ?>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xs-2">                 
                <button class="btn btn-primary"  tag ="administradores" id="btnBusAdm" type="submit">
                    <i class="fa fa-search" ></i> Filtrar listado 
                </button>

            </div>
        </div>

        </form>
    </div>
</div>

<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b><?php echo $titulo; ?></b></h3>
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
                                        <th><?php echo $this->Paginator->sort('nombre'); ?></th>
                                        <th><?php echo $this->Paginator->sort('descripcion'); ?></th>
                                        <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('estado'); ?></th>
                                        <th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                                        <th><?php echo $this->Paginator->sort('updated'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($foros as $foro): ?>
                                        <tr>
                                            <td><?php echo h($foro['Foro']['id']); ?>&nbsp;</td>
                                            <td><?php echo h($foro['Foro']['nombre']); ?>&nbsp;</td>
                                            <td><?php echo h($foro['Foro']['descripcion']); ?>&nbsp;</td>
                                            <td>
                                                <?php echo $this->Html->link($foro['User']['nombres'], array('controller' => 'users', 'action' => 'view', $foro['User']['id'])); ?>
                                            </td>
                                            <td><?php echo h($foro['Foro']['estado']); ?>&nbsp;</td>
                                            <td>
                                                <?php echo $this->Html->link($foro['Categoria']['nombre'], array('controller' => 'categorias', 'action' => 'view', $foro['Categoria']['id'])); ?>
                                            </td>
                                            <td><?php echo h($foro['Foro']['created']); ?>&nbsp;</td>
                                            <td><?php echo h($foro['Foro']['updated']); ?>&nbsp;</td>
                                            <td class="actions">
                                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $foro['Foro']['id'])); ?>
                                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $foro['Foro']['id'])); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $foro['Foro']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $foro['Foro']['id']))); ?>
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

