<div class="row">
    <div class="col-md-12">
        <div class="box-default box box-solid">
            <div class="box-header with-border alert alert-info alert-dismissible">
                بيانات المنشأة
            </div>
            <div class="box box-info box-body">
                <div class="box-header with-border">
                    <h4 class="box-title">المنشآت</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label">الاسم</label> 
                        </div>
                        <div class="col-md-4">
                            <?php echo $companies['Name'] ?>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label">البريد الالكتروني</label>
                        </div>
                        <div class="col-md-4">
                            <?php echo $companies['email'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label">رقم المنشأة</label> 
                        </div>
                        <div class="col-md-4">
                            <?php echo $companies['companyNo'] ?>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label">نوع المنشأة</label>
                        </div>
                        <div class="col-md-4">
                            <?php echo $companies['comptypes_name'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label">اسم المدير</label> 
                        </div>
                        <div class="col-md-4">
                            <?php echo $companies['manager_name'] ?>
                        </div>
                        <!--div class="col-md-2">
                            <label class="control-label">manager mobile</label>
                        </div>
                        <div class="col-md-4">
                            <?php echo $companies['manager_mobile'] ?>
                        </div-->
                    </div>
                    
            
                    
                </div>
                <div class="box box-default box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">العملآء</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                   
                    <div class="box-body">
                        <table class="table table-striped">
                            <tr>
                                <th>اسم العميل</th>
                                <th>الجنسية</th>
                                <th>البريد الالكتروني</th>
                                <th>الجوال</th>
                                <th>رقم الهوية</th>
								 <th>المنصب</th>
                            </tr>
                            <?php foreach ($customers as $company):?>
                                <tr>
                                    <td><?php echo $company['Customer_name']?></td>
                                    <td><?php echo $company['Nationality']?></td>
                                    <td><?php echo $company['email']?></td>
                                    <td><?php echo $company['mobile']?></td>
                                    <td><?php echo $company['Position']?></td>
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                    
                </div>
                
                <div class="box box-default box-solid collapsed-box">
                    <div class="box-header with-border">
                      <h3 class="box-title">الموظفين</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                      </div>
            
                    </div>
                   
                    <div class="box-body" style="display: none;">
                        <table class="table table-striped">
                            <tr>
                                <th>اسم الموظف</th>
                                <th>المنصب</th>
                                <th>الجوال</th>
                                <th>البريد الالكتروني</th>
                            </tr>
                            <?php foreach ($employees as $employee):?>
                                <tr>
                                    <td><?php echo $employee['emp_name']?></td>
                                    <td><?php echo $employee['position']?></td>
                                    <td><?php echo $employee['mobile']?></td>
                                    <td><?php echo $employee['email']?></td>
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                    
                </div>
                
                <div class="box box-default box-solid collapsed-box">
                    <div class="box-header with-border">
                      <h3 class="box-title">المستندات</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                      </div>
            
                    </div>
                   
                    <div class="box-body" style="display: none;">
                        <table class="table table-striped">
                            <tr>
                                <th>اسم المنشأه</th>
                                <th>النوع</th>
                                <th>رقم المستند</th>
                                <th>تاريخ الانتهاء</th>
								 <th>تنزيل</th>
								 <th>View</th>
                            </tr>
                            <?php foreach ($documents as $document):?>
                                <tr>
                                    <td><?php echo $companies['Name'] ?></td>
                                    <td><?php echo $document['doctype_name']?></td>
                                    <td><?php echo $document['docno']?></td>
                                    <td><?php echo $document['expiredate']?></td>
								<!-- <td><a href="<?php echo  base_url().$document['attach']?>" download> DOWNLOAD</a></td> -->
									
                                <?php if  (!empty($document['attach'])) { ?>
                                    <td><a href="<?php echo base_url().$document['attach']?>" download> DOWNLOAD</a></td>
                                    <td><a href="<?php echo base_url().$document['attach']?>" target="blank"> View</a></td>
                                <?php } ?>
									
                                </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                    
                </div>
            </div>
			
				<div class="box-footer">
                        
                            <a class="btn btn-default" href="<?php echo site_url("company/index")?>">
                                تراجع
                            </a>
							
						
							
	        </div>		
        </div>
    </div>
</div>