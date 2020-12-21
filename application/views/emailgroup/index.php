<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة المجموعات</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('emailgroup/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>الرقم</th>
						<th>اسم المجموعة</th>
						<th>العدد</th>
						<th>العملية</th>
                    </tr>
                    <?php
					if(!empty($emailgroups)){
                    $i=1;
                    foreach($emailgroups as $e){ ?>
                    <tr>
						<td><?php echo $i; $i++; ?></td>
						<td><?php echo $e['groupname']; ?></td>
						<td><?php echo $e['groupcount']; ?></td>
						<td>
                            <a href="<?php echo site_url('emailgroup/edit/'.$e['groupid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> تعديل</a> 
                            <a href="<?php echo site_url('emailgroup/remove/'.$e['groupid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> حذف</a>
                        </td>
                    </tr>
                    <?php }} ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
