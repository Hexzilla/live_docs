<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة الشركات</h3>
            	<div class="box-tools">
                    <?php if($this->auth->isAdd()):?>
                    <a href="<?php echo site_url('company/add'); ?>" class="btn btn-success btn-sm">إضافة</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>الرقم</th>
						<th>الاسم</th>
                        <th>نوع المنشأة</th>
                        <th>اسم العميل</th>
                    <!--    <th>Manager</th> -->
                       
                        <th>رقم المنشأة</th>
                        <th>رقم التسجيل</th>
                     <!--   <th>Email</th> -->
                        <th>العملية</th>
                    </tr>
                    <?php foreach($company as $c){ ?>
                    <tr>
                        <td><?php echo $c['companyid']; ?></td>
						<td><?php echo $c['Name']; ?></td>
                        <td><?php echo $c['CTypeName']; ?></td>
                        <td><?php echo $c['customer']; ?></td>
                      <!--  <td><?php echo $c['manager']; ?></td> -->
                        
                        <td><?php echo $c['companyNo']; ?></td>
                        <td><?php echo $c['CompReg']; ?></td>
                     <!--   <td><?php echo $c['email']; ?></td> -->
                        <td>
                            <?php if($this->auth->isEdit()):?>
                            <a href="<?php echo site_url('company/edit/'.$c['companyid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> تعديل</a>
                            <?php endif;?>
                            <?php if($this->auth->isDelete()):?>
                            <a onclick="javascript:check=confirm( 'هل ترغب حقا في حذف البيانات');if(check==false) return false;" href="<?php echo site_url('company/remove/'.$c['companyid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> حذف</a>
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
