<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">أنواع الشركات</h3>
            	<div class="box-tools">
                    <?php if($this->auth->isAdd()):?>
                    <a href="<?php echo site_url('comptype/add'); ?>" class="btn btn-success btn-sm">Add</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>الرقم</th>
                        <th>الاسم</th>
                        <th>العملية</th>
                    </tr>
                    <?php foreach($comptypes as $c){ ?>
                    <tr>
                        <td><?php echo $c['CompType']; ?></td>
                        <td><?php echo $c['Name']; ?></td>
                        <td>
                            <?php if($this->auth->isEdit()):?>
                            <a href="<?php echo site_url('comptype/edit/'.$c['CompType']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> تعديل</a>
                            <?php endif;?>
                            <?php if($this->auth->isDelete()):?>
                            <a onclick="javascript:check=confirm( 'Are sure you want to Delete ?');if(check==false) return false;" href="<?php echo site_url('comptype/remove/'.$c['CompType']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> حذف</a>
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
