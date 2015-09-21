<?php echo $this->Html->script('jquery-2.1.4'); ?>
<?php echo $this->Html->script('jquery.dataTables'); ?>
 
<script type="text/javascript">
    $(document).ready(function() {
        $('#browserList').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "<?php echo $this->Html->Url(array('controller' => 'ciudads', 'action' => 'ajaxData')); ?>"
        });
    });
</script>
 
<h1>Browser List</h1>
 
<table id="browserList">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Release Year</th>          
            <th>Rating</th>        
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4" class="dataTables_empty">Loading data from server...</td>
        </tr>
    </tbody>
</table>