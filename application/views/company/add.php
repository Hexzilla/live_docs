<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              		<h3 class="box-title">إضافة منشأة</h3>
            </div>
            <?php echo form_open('company/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Name" class="control-label"><span class="text-danger">*</span> الاسم </label>
						
						<div class="form-group">
							<input type="text" name="Name" value="<?php echo $this->input->post('Name'); ?>" class="form-control" id="Name" />
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
									$selected = ($comptype['CompType'] == $this->input->post('CompType')) ? ' selected="selected"' : "";

									echo '<option value="'.$comptype['CompType'].'" '.$selected.'>'.$comptype['Name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('CompType');?></span>
						</div>
					</div>
				</div>
          		<div class="row">
					<div class="col-md-6">
						<label for="Customer_id" class="control-label">العميل</label><span class="text-danger">*</span>
						<div class="form-group">
				            <input type="text" name="Customer_ids" value="<?php echo $this->input->post('Customer_id'); ?>" class="form-control" id="search-box" >
							<div id="suggesstion-box"></div>
							<div id="list_boxs"></div>
							<span class="text-danger"><?php echo $err_customer_id;?></span>
						</div>
					</div>
					<!--HAS MAIN COMPANY BEGIN-------------------------------------------------------------------------->
					<div class="col-md-6">
						<?php 
							$main_company_id = $this->input->post('main_company_id');
							$comp_checked_state = empty($main_company_id) ? "" : "checked"; 
							$comp_disabled = empty($main_company_id) ? "disabled" : "";
						?>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="has_company" name="has_company" <?php echo($comp_checked_state);?> />
							<label for="has_company" class="control-label" style="margin-right:8px;">Has a compnay</label>
						</div>
						<div  id="div_has_main_compnay" class="form-group <?php echo $comp_disabled; ?>">
				            <input type="text" name="main_company_name" value="<?php echo $this->input->post('main_company_name'); ?>" class="form-control" id="main_company_name" >
							<input type="hidden" name="main_company_id" value="<?php echo $this->input->post('main_company_id'); ?>" class="form-control" id="main_company_id" >
							<div id="suggesstion-company"></div>
							<span class="text-danger"><?php echo $err_main_company_id;?></span>
						</div>
					</div>
					<!--HAS MAIN COMPANY END-------------------------------------------------------------------------->
					<div class="col-md-6">
						<label for="Managerid" class="control-label">المدير</label>
						<div class="form-group">
							<select name="Managerid" class="form-control">
								<option value="">اختر المدير</option>
								<?php 
								foreach($all_employees as $employee)
								{
									$selected = ($employee['employee_id'] == $this->input->post('Managerid')) ? ' selected="selected"' : "";

									echo '<option value="'.$employee['employee_id'].'" '.$selected.'>'.$employee['emp_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
				</div>
          		<div class="row">
					<div class="col-md-6">
						<label for="companyNo" class="control-label">رقم المنشأة</label>
						<div class="form-group">
							<input type="text" name="companyNo" value="<?php echo $this->input->post('companyNo'); ?>" class="form-control" id="companyNo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CompReg" class="control-label">رقم التسجيل</label>
						<div class="form-group">
							<input type="text" name="CompReg" value="<?php echo $this->input->post('CompReg'); ?>" class="form-control" id="CompReg" />
						</div>
					</div>
				</div>
          		<div class="row">
					<div class="col-md-6">
						<label for="email" class="control-label">البريد الالكتروني</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="Remarks" class="control-label">ملاحظات</label>
						<div class="form-group">
							<input type="text" name="Remarks" value="<?php echo $this->input->post('Remarks'); ?>" class="form-control" id="Remarks" />
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