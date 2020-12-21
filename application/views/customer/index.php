<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة العملاء</h3>
            	<div class="box-tools">
                    <?php if($this->auth->isAdd()):?>
                    <a href="<?php echo site_url('customer/add'); ?>" class="btn btn-success btn-sm">اضافة</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="box-body">
            <!--   <table class="table table-striped"> -->
				<table class="table tb_example table-striped table-bordered dt-responsive nowrap" style="width:100%">
				
			   <thead>
				  
                    <tr>
                        <th>رقم العميل</th>
                        <th>اسم العميل</th>
                        <th>الجنسية</th>
                        <th>البريد الالكتروني</th>
                        <th>الجوال</th>
                        <th>رقم الهوية</th> 
                    <!--    <th>المنصب</th> -->
                        <th>العملية</th>
                    </tr>
					
					</thead>

			<tbody>
				 
					
                    <?php foreach($customers as $c){ ?>
                    <tr>
                        <td><?php echo $c['customer_id']; ?></td>
                        <td><?php echo $c['Customer_name']; ?></td>
                        <td><?php echo $c['Nationality']; ?></td>
                        <td><?php echo $c['email']; ?></td>
                        <td><?php echo $c['mobile']; ?></td>
                        <td><?php echo $c['IDcard']; ?></td> 
                     <!--   <td><?php echo $c['Position']; ?></td> -->
                        <td>
                            <?php if($this->auth->isEdit()):?>
                            <a href="<?php echo site_url('customer/edit/'.$c['customer_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> تعديل</a>
                            <?php endif;?>
                            <?php if($this->auth->isDelete()):?>
                            <a onclick="javascript:check=confirm( 'Are sure you want to Delete ?');if(check==false) return false;" href="<?php echo site_url('customer/remove/'.$c['customer_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> حذف</a>
                            <?php endif;?>
                            <a href="<?php echo site_url('customer/profile/'.$c['customer_id']); ?>" class="btn bg-purple btn-xs"><span class="fa fa-bars"></span> الملف</a>		
                        </td>
                    </tr>
                    <?php } ?>
					 </tbody>	
                </table>
                             
            </div>
        </div>
    </div>
</div>
