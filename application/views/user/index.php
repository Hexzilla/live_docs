<?php
    if (isset($this->session->logged_in) && $this->session->logged_in) {
        $user = $this->session->user;
       
    } 
?>






<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة المستخدمين</h3>
            	<div class="box-tools">
                    <?php if($this->auth->isAdd()):?>
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">إضافة مستخدم</a> 
                    <?php endif;?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>الرقم</th>
						 <th>اسم المستخدم</th>
                       
                        
                        <th>اسم المستخدم كاملا</th>
                     
                        <th>البريد الالكتروني</th>
						<th>المجموعة </th>
						 <th>الحالة</th>
                        <th>العملية</th>
                    </tr>
					 <?php if($user['privilege']=='user'){?>
                    <?php foreach($users as $u){ ?>
                    <tr>
                        <td><?php echo $u['user_id']; ?></td>
						<td><?php echo $u['username']; ?></td>
                       
                        <td><?php echo $u['fullname']; ?></td>
                       
                        <td><?php echo $u['email']; ?></td>
						<td><?php echo $u['groupname']; ?></td>
						<!-- <td><?php echo $u['status']; ?></td> -->
					<?php	$active = '';
						if($u['status'] == 1) {
		$active = '<label class="label label-success">Active</label>';
	} else {
		$active = '<label class="label label-danger">Deactive</label>'; 
	}?>
	 <td><?php echo $active ; ?></td>
                        
						
                        <td>
                            <?php if($this->auth->isEdit()):?>
                            <a href="<?php echo site_url('user/edit/'.$u['user_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <?php endif;?>
                            <?php if($this->auth->isDelete()):?>
                           <a onclick="javascript:check=confirm( 'Are sure you want to Delete ?');if(check==false) return false;" href="<?php echo site_url('user/remove/'.$u['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
							
                            <?php endif;?>
                        </td>
                    </tr>
					 <?php } } else {?>
					 
              <?php foreach($users as $u){ ?>
                    <tr>
                        <td><?php echo $u['user_id']; ?></td>
						<td><?php echo $u['username']; ?></td>
                       
                        <td><?php echo $u['fullname']; ?></td>
                       
                        <td><?php echo $u['email']; ?></td>
						<td><?php echo $u['groupname']; ?></td>
						<!-- <td><?php echo $u['status']; ?></td> -->
					<?php	$active = '';
						if($u['status'] == 1) {
		$active = '<label class="label label-success">Active</label>';
	} else {
		$active = '<label class="label label-danger">Deactive</label>'; 
	}?>
	 <td><?php echo $active ; ?></td>
                        
						
                        <td>
                            <?php if($this->auth->isEdit()):?>
                            <a href="<?php echo site_url('user/edit/'.$u['user_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> تعديل</a> 
                            <?php endif;?>
                            <?php if(($this->auth->isDelete()) &&($u['user_id']!=$user['user_id'])){?>
                           <a onclick="javascript:check=confirm( 'Are sure you want to Delete ?');if(check==false) return false;" href="<?php echo site_url('user/remove/'.$u['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> حذف</a>
							
			                  <?php } ?>
                        </td>
                    </tr>					 
					 
					 
					 <?php } ?>
					 <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
