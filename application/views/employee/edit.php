<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">تعديل بيانات موظف</h3>
            </div>
			<?php echo form_open('employee/edit/'.$employee['employee_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Ctype" class="control-label"><span class="text-danger">*</span>التصنيف</label>
						<div class="form-group">
							<select name="Ctype" class="form-control">
								<option value="">اختر تصنيف</option>
								<?php 
								foreach($all_emptypes as $emptype)
								{
									$selected = ($emptype['Ctype'] == $employee['Ctype']) ? ' selected="selected"' : "";

									echo '<option value="'.$emptype['Ctype'].'" '.$selected.'>'.$emptype['ctname'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('Ctype');?></span>
						</div>
					</div>
					
					
						<div class="col-md-6">
						<label for="companyid" class="control-label"><span class="text-danger">*</span>المنشأة</label>
						<div class="form-group">
						
						<input type="text" name="companyid" value="<?php echo ($this->input->post('companyid') ? $this->input->post('companyid') : $employee['Name']); ?>" class="form-control" id="get_company" />
						
					
				
							<span class="text-danger"><?php echo @$err_companyid;?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						
						<label for="emp_name" class="control-label"><span class="text-danger">*</span>إسم الموظف</label>
						<div class="form-group">
							<input type="text" name="emp_name" value="<?php echo ($this->input->post('emp_name') ? $this->input->post('emp_name') : $employee['emp_name']); ?>" class="form-control" id="emp_name" />
							<span class="text-danger"><?php echo form_error('emp_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">البريد الالكتروني</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $employee['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile" class="control-label">الجوال</label>
						<div class="form-group">
							<input type="text" name="mobile" value="<?php echo ($this->input->post('mobile') ? $this->input->post('mobile') : $employee['mobile']); ?>" class="form-control" id="mobile" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Nationality" class="control-label">الجنسية</label>
						<div class="form-group">
							<input type="text" name="Nationality" value="<?php echo ($this->input->post('Nationality') ? $this->input->post('Nationality') : $employee['Nationality']); ?>" class="form-control" id="Nationality" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="position" class="control-label">المنصب</label>
						<div class="form-group">
							<input type="text" name="position" value="<?php echo ($this->input->post('position') ? $this->input->post('position') : $employee['position']); ?>" class="form-control" id="position" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="Remarks" class="control-label">رقم الهوية</label>
						<div class="form-group">
							<input type="text" name="Remarks" value="<?php echo ($this->input->post('Remarks') ? $this->input->post('Remarks') : $employee['Remarks']); ?>" class="form-control" id="Remarks" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> حفظ
                            </button>
                            <a class="btn btn-default" href="<?php echo site_url("employee/index")?>">
                                تراجع
                            </a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>