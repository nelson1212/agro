<div class="panel panel-default" id="divPanel" > <!-- PANEL -->
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
                    <?php echo $this->Form->input('filNom', array("div" => false, "name" => "filNom", "id" => "filNom", "label" => "", "type" => "select", "options" => "", "class" => "form-control")); ?>
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
                                        <th><?php echo $this->Paginator->sort('nombre_cientifico'); ?></th>
                                        <th><?php echo $this->Paginator->sort('foto'); ?></th>
                                        <th><?php echo $this->Paginator->sort('lavado_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('embalaje_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('perido_cosecha'); ?></th>
                                        <th><?php echo $this->Paginator->sort('estado_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('peso_gr'); ?></th>
                                        <th><?php echo $this->Paginator->sort('peso_lb'); ?></th>
                                        <th><?php echo $this->Paginator->sort('peso_kg'); ?></th>
                                        <th><?php echo $this->Paginator->sort('precio'); ?></th>
                                        <th><?php echo $this->Paginator->sort('cotactado'); ?></th>
                                        <th><?php echo $this->Paginator->sort('cantidad'); ?></th>
                                        <th><?php echo $this->Paginator->sort('color_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('temperatura'); ?></th>
                                        <th><?php echo $this->Paginator->sort('altura_msnm'); ?></th>
                                        <th><?php echo $this->Paginator->sort('imagen'); ?></th>
                                        <th><?php echo $this->Paginator->sort('calidad_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('forma_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('firmeza_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('presentacion_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('brillo_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('sanidad_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('madurez_id'); ?></th>
                                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                                        <th><?php echo $this->Paginator->sort('updated'); ?></th>
                                        <th class="actions"><?php echo __('Actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($productos as $producto): ?>
                                        <tr>
                                            <td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['nombre_cientifico']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['foto']); ?>&nbsp;</td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Lavado']['nombre'], array('controller' => 'lavados', 'action' => 'view', $producto['Lavado']['id'])); ?>
                                            </td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Embalaje']['nombre'], array('controller' => 'embalajes', 'action' => 'view', $producto['Embalaje']['id'])); ?>
                                            </td>
                                            <td><?php echo h($producto['Producto']['perido_cosecha']); ?>&nbsp;</td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $producto['Estado']['id'])); ?>
                                            </td>
                                            <td><?php echo h($producto['Producto']['peso_gr']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['peso_lb']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['peso_kg']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['precio']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['cotactado']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['cantidad']); ?>&nbsp;</td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Color']['nombre'], array('controller' => 'colors', 'action' => 'view', $producto['Color']['id'])); ?>
                                            </td>
                                            <td><?php echo h($producto['Producto']['temperatura']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['altura_msnm']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['imagen']); ?>&nbsp;</td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Calidad']['nombre'], array('controller' => 'calidads', 'action' => 'view', $producto['Calidad']['id'])); ?>
                                            </td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Forma']['nombre'], array('controller' => 'formas', 'action' => 'view', $producto['Forma']['id'])); ?>
                                            </td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Firmeza']['nombre'], array('controller' => 'firmezas', 'action' => 'view', $producto['Firmeza']['id'])); ?>
                                            </td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Presentacion']['nombre'], array('controller' => 'presentacions', 'action' => 'view', $producto['Presentacion']['id'])); ?>
                                            </td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Brillo']['nombre'], array('controller' => 'brillos', 'action' => 'view', $producto['Brillo']['id'])); ?>
                                            </td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Sanidad']['nombre'], array('controller' => 'sanidads', 'action' => 'view', $producto['Sanidad']['id'])); ?>
                                            </td>
                                            <td>
                                                <?php echo $this->Html->link($producto['Madurez']['nombre'], array('controller' => 'madurezs', 'action' => 'view', $producto['Madurez']['id'])); ?>
                                            </td>
                                            <td><?php echo h($producto['Producto']['created']); ?>&nbsp;</td>
                                            <td><?php echo h($producto['Producto']['updated']); ?>&nbsp;</td>
                                            <td class="actions">
                                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id'])); ?>
                                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id'])); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $producto['Producto']['id']))); ?>
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

