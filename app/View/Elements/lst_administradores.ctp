<br><?php echo $this->Form->create('Votante'); ?>
<div class="row">




   <div class="col-lg-2">    
        <div class="form-group">
            <label for="filtroNom">Identificación</label>
            <?php echo $this->Form->input('identificacion', array("div" => false, "name" => "filtroNom", "id" => "filtroNom", 'tag' => 'identificacion', "label" => "", "type" => "text", "class" => "form-control")); ?>
        </div>
    </div>

     <div class="col-lg-2">    
        <div class="form-group">
            <label for="filtroNom">Nombres</label>
            <?php echo $this->Form->input('identificacion', array("div" => false, "name" => "filtroNom", "id" => "filtroNom", 'tag' => 'identificacion', "label" => "", "type" => "text", "class" => "form-control")); ?>
        </div>
    </div>

     <div class="col-lg-2">    
        <div class="form-group">
            <label for="filtroNom">Apellidos</label>
            <?php echo $this->Form->input('identificacion', array("div" => false, "name" => "filtroNom", "id" => "filtroNom", 'tag' => 'identificacion', "label" => "", "type" => "text", "class" => "form-control")); ?>
        </div>
    </div>
    
     <div class="col-lg-3">    
        <div class="form-group">
            <label for="filtroNom">Email</label>
            <?php echo $this->Form->input('identificacion', array("div" => false, "name" => "filtroNom", "id" => "filtroNom", 'tag' => 'identificacion', "label" => "", "type" => "text", "class" => "form-control")); ?>
        </div>
    </div>

    </div>

</div>

<div class="row">
    <div class="col-xs-2">                 
        <button class="btn btn-primary"  id="btnRealizarBusqueda" type="button">
            <i class="fa fa-search" ></i> Filtrar busqueda 
        </button>

    </div>
</div>
</form>
<br>
<!-- ADD SOME OPTIONS TO CAKEPHP PAGINATOR OBJECT-->
<?php 
  $this->Paginator->options(array(
    'update'=>'#data_table', //*** ELEMENT WITH ID #data_table WILL BE UPDATED
    'before'=>$this->Js->get('#loader')->effect('fadeIn'), //*** DISPLAY ELEMENT WITH ID #loader BEFORE JQUERY EXECUTED
    'after' =>$this->Js->get('#loader')->effect('fadeOut') //*** HIDE ELEMENT WITH ID #loader BEFORE JQUERY EXECUTED
    ));
  
?>
<div class="" id="">
    <div class="form-group" id="data_table">
        <div id ="loader" style="display: none;">Loading</div>

        <div class="dataTable_wrapper" style="overflow: scroll;">
            <table style="max-width:100%;white-space:nowrap;" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('identificacion'); ?></th>
                        <th><?php echo $this->Paginator->sort('nombres'); ?></th>
                        <th><?php echo $this->Paginator->sort('apellidos'); ?></th>
                        <th><?php echo $this->Paginator->sort('foto'); ?></th>
        
                     
                        <th><?php echo $this->Paginator->sort('username'); ?></th>
                   
                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                    
                        <th><?php echo $this->Paginator->sort('created'); ?></th>
                        <th><?php echo $this->Paginator->sort('updated'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['identificacion']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['nombres']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['apellidos']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['foto']); ?>&nbsp;</td>
                           
                            
                            <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                          
                            <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                           
                       
                            <td><?php echo h($user['User']['created']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['updated']); ?>&nbsp;</td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
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


<?php 
//*** IMPORTANT FOR JQUERY PAGINATION
echo $this->Js->writeBuffer();

?>

</div>
</div>
&nbsp;
