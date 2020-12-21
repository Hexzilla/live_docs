<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">تعديل بيانات منشأة</h3>
            </div>
			<?php echo form_open('company/edit/'.$company['companyid']); ?>
			<div class="box-body">
				<div class="row clearfix">
				    <div class="col-md-6">
						<label for="Name" class="control-label"><span class="text-danger">*</span>الاسم</label>
						<div class="form-group">
							<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $company['Name']); ?>" class="form-control" id="Name" />
							<span class="text-danger"><?php echo form_error('Name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="CompType" class="control-label">نوع المنشأة</label><span class="text-danger">*</span>
						<div class="form-group">

							<select name="CompType" class="form-control">
								<option value="">إختر نوع المنشأة</option>
								<?php 
								foreach($all_comptypes as $comptype)
								{
									$selected = ($comptype['CompType'] == $company['CompType']) ? ' selected="selected"' : "";

									echo '<option value="'.$comptype['CompType'].'" '.$selected.'>'.$comptype['Name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo $err_customer_id;?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Customer_id" class="control-label">اسم العميل</label><span class="text-danger">*</span>
						<div class="form-group">
						
						<input type="text" name="Customer_id" value="<?php echo ($this->input->post('Customer_id') ? $this->input->post('Customer_id') : $company['Customer_name']); ?>" class="form-control" id="get_customer" />
						
					
							<span class="text-danger"><?php echo $err_customer_id;?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Managerid" class="control-label">اسم المدير</label>
						<div class="form-group">
							<select name="Managerid" class="form-control">
								<option value="">إختر المدير</option>
								<?php 
								foreach($all_employees as $employee)
								{
									$selected = ($employee['employee_id'] == $company['Managerid']) ? ' selected="selected"' : "";

									echo '<option value="'.$employee['employee_id'].'" '.$selected.'>'.$employee['emp_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="companyNo" class="control-label">رقم المنشأة</label>
						<div class="form-group">
							<input type="text" name="companyNo" value="<?php echo ($this->input->post('companyNo') ? $this->input->post('companyNo') : $company['companyNo']); ?>" class="form-control" id="companyNo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CompReg" class="control-label">رقم التسجيل</label>
						<div class="form-group">
							<input type="text" name="CompReg" value="<?php echo ($this->input->post('CompReg') ? $this->input->post('CompReg') : $company['CompReg']); ?>" class="form-control" id="CompReg" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">البريد الالكتروني</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $company['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<label for="Remarks" class="control-label">ملاحظات</label>
						<div class="form-group">
							<input type="text" name="Remarks" value="<?php echo ($this->input->post('Remarks') ? $this->input->post('Remarks') : $company['Remarks']); ?>" class="form-control" id="Remarks" />
							<span class="text-danger"><?php echo form_error('Remarks');?></span>
						</div>
					</div>
					
					
					
				</div>
			</div>
			<div class="box-footer">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> حفظ
                            </button>
                            <a class="btn btn-default" href="<?php echo site_url("company/index")?>">
                                تراجع
                            </a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>