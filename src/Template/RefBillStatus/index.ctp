<?php
$urlToRestApi = $this->Url->build('/api/refBillStatus', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('RefBillStatus/index', ['block' => 'scriptBottom']);
?>

<div class="container">
    <div class="row">
        <div class="panel panel-default refBillStatuss-content">
            <div class="panel-heading">RefBillStatuss <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add RefBillStatus</h2>
                <form class="form" id="refBillStatusAddForm" enctype='application/json'>
                   <!-- <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>!-->
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" id="description"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="refBillStatusAction('add')">Add RefBillStatus</a>
                    <!-- input type="submit" class="btn btn-success" id="addButton" value="Add RefBillStatus" -->
                </form>
            </div>
            <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit RefBillStatus</h2>
                <form class="form" id="refBillStatusEditForm" enctype='application/json'>
                    <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" name="name" id="nameEdit"/>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" name="bill_status_description" id="bill_status_descriptionEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="refBillStatusAction('edit')">Update RefBillStatus</a>
                    <!-- input type="submit" class="btn btn-success" id="editButton" value="Update RefBillStatus" -->
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="refBillStatusData">
                <?php
                $count = 0;
                foreach ($refBillStatuss as $refBillStatus): $count++;
                    ?>
                    <tr>
                        <td><?php echo '#' . $count; ?></td>
                        <td><?php echo $refBillStatus['id']; ?></td>
                        <td><?php echo $refBillStatus['bill_status_description']; ?></td>
                        <td>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editRefBillStatus('<?php echo $refBillStatus['id']; ?>')"></a>
                            <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? refBillStatusAction('delete', '<?php echo $refBillStatus['id']; ?>') : false;"></a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr><td colspan="5">No refBillStatus(s) found......</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

