<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Emptypes Listing</h3>
            	<div class="box-tools">
                    <?php if($this->auth->isAdd()):?>
                    <a href="<?php echo site_url('emptype/add'); ?>" class="btn btn-success btn-sm">Add</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Ctype</th>
                        <th>Ctname</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($emptypes as $e){ ?>
                    <tr>
                        <td><?php echo $e['Ctype']; ?></td>
                        <td><?php echo $e['ctname']; ?></td>
                        <td>
                            <?php if($this->auth->isEdit()):?>
                            <a href="<?php echo site_url('emptype/edit/'.$e['Ctype']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <?php endif;?>
                            <?php if($this->auth->isDelete()):?>
                            <a onclick="javascript:check=confirm( 'Are sure you want to Delete ?');if(check==false) return false;" href="<?php echo site_url('emptype/remove/'.$e['Ctype']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            <?php endif;?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
