<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dcategory Listing</h3>
            	<div class="box-tools">
                    <?php if($this->auth->isAdd()):?>
                    <a href="<?php echo site_url('dcategory/add'); ?>" class="btn btn-success btn-sm">Add</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Dtype</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($dcategory as $d){ ?>
                    <tr>
                        <td><?php echo $d['dtype']; ?></td>
                        <td><?php echo $d['name']; ?></td>
                        <td>
                            <?php if($this->auth->isEdit()):?>
                            <a href="<?php echo site_url('dcategory/edit/'.$d['dtype']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <?php endif;?>
                            <?php if($this->auth->isDelete()):?>
                            <a onclick="javascript:check=confirm( 'Are sure you want to Delete ?');if(check==false) return false;" href="<?php echo site_url('dcategory/remove/'.$d['dtype']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <?php endif;?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
