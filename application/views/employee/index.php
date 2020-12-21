<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة الموظفين</h3>
            	<div class="box-tools">
                    <?php if($this->auth->isAdd()):?>
                    <a href="<?php echo site_url('employee/add'); ?>" class="btn btn-success btn-sm">إضافة موضف</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="box-body">
                <!-- <table class="table table-striped"> -->
				<table class="table tb_example table-striped table-bordered dt-responsive nowrap" style="width:100%">
				
			   <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>المنصب</th>
                        <th>إسم الموظف</th>
						<th>اسم المنشأة</th>
                     <!--   <th>البريد الالكتروني</th> -->
                        <th>الجوال</th>
                    <!--    <th>Nationality</th> -->
                    <!--    <th>Position</th> -->
                        <th>العملية</th>
                    </tr>
					
					</thead>

			<tbody>
                    <?php foreach($employees as $e){ ?>
                    <tr>
                        <td><?php echo $e['employee_id']; ?></td>
                        <td><?php echo $e['empposition']; ?></td>
                        <td><?php echo $e['emp_name']; ?></td>
						<td><?php echo $e['companyname']; ?></td>
                     <!--   <td><?php echo $e['email']; ?></td> -->
                        <td><?php echo $e['mobile']; ?></td>
                     <!-- <td><?php echo $e['Nationality']; ?></td> -->
                    <!--  <td><?php echo $e['position']; ?></td> -->
                        <td>
                            <?php if($this->auth->isEdit()):?>
                            <a href="<?php echo site_url('employee/edit/'.$e['employee_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> تعديل</a>
                            <?php endif;?>
                            <?php if($this->auth->isDelete()):?>
                            <a onclick="javascript:check=confirm( 'Are sure you want to Delete ?');if(check==false) return false;" href="<?php echo site_url('employee/remove/'.$e['employee_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> حذف</a>
                            <?php endif;?>
                        </td>
                    </tr>
                    <?php } ?>
					 </tbody>	
                </table>
                            
            </div>
        </div>
    </div>
</div>
