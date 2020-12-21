<div class="row">
    <div class="col-md-12">
        <div class="box-default box box-solid">
            <div class="box-header with-border alert alert-info alert-dismissible">
                بيانات العميل
            </div>
            <div class="box box-info box-body">
                <div class="box-header with-border">
                    <h4 class="box-title">العميل</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-1">
                            <label class="control-label">الاسم</label> 
                        </div>
                        <div class="col-md-5">
                            <?php echo $customer['Customer_name'] ?>
                        </div>
                        <div class="col-md-1">
                            <label class="control-label">البريد الالكتروني</label>
                        </div>
                        <div class="col-md-5">
                            <?php echo $customer['email'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <label class="control-label">الجنسية</label> 
                        </div>
                        <div class="col-md-5">
                            <?php echo $customer['Nationality'] ?>
                        </div>
                        <div class="col-md-1">
                            <label class="control-label">رقم الهوية</label>
                        </div>
                        <div class="col-md-5">
                            <?php echo $customer['IDcard'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <label class="control-label">الجوال</label> 
                        </div>
                        <div class="col-md-5">
                            <?php echo $customer['mobile']?>
                        </div>
                        <div class="col-md-1">
                            <label class="control-label">المنصب</label>
                        </div>
                        <div class="col-md-5">
                            <?php echo $customer['Position']?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-1">
                            <label class="control-label">ملاحظات</label> 
                        </div>
                        <div class="col-md-11">
                            <?php echo $customer['Remarks'] ?>
                        </div>
                    </div>
                    
                </div>
                <div class="box box-default box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">الشركات</h3>
                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                   
                    <div class="box-body">
                        <table class="table table-striped">
                            <tr>
                                <th>اسم الشركة</th>
                                <th>النوع</th>
                                <th>رقم التسجيل</th>
                                <th>المدير</th>
                                <th>الجوال</th>
                            </tr>
                            <?php foreach ($companies as $company):?>
                                <tr>
                                    <td><?php echo $company['Name']?></td>
                                    <td><?php echo $company['comptypes_name']?></td>
                                    <td><?php echo $company['CompReg']?></td>
                                    <td><?php echo $company['manager_name']?></td>
                                    <td><?php echo $company['manager_mobile']?></td>
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
                                    <td><?php echo $document['company_name']?></td>
                                    <td><?php echo $document['doctype_name']?></td>
                                    <td><?php echo $document['docno']?></td>
                                    <td><?php echo $document['expiredate']?></td>
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
        </div>
    </div>
</div>