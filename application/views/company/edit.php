<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">تعديل بيانات منشأة</h3>
            </div>
			<?php echo form_open('company/edit/'.$company['companyid']); ?>
			<div class="box-body">
				<?php if(!empty($save_done)){?>
				<script>
				setTimeout(function(){ window.location.href = "<?php echo base_url();?>company"; }, 3000);
				</script>
			<div class="row clearfix">
			 <div class="col-md-12">
			
												<span class="save_done"> <?php echo $save_done;?></span>
				 </div>			
			</div>
			<?php } ?>
			
			
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
							<span class="text-danger"><?php echo form_error('CompType');?></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">						
						<label for="Customer_id" class="control-label">اسم العميل</label><span class="text-danger">*</span>						
						<div class="form-group">
				            <input type="text" name="Customer_ids" value="<?php echo $this->input->post('Customer_id'); ?>" class="form-control" id="search-box" >
							<div id="suggesstion-box"></div>
							<div id="list_boxs">
							<?php if(!empty($custome)){
								?>							
							<?php 	foreach($custome as $comp){?>
							<input type="hidden" value="<?php echo $comp['customer_id'];?>" class="rolesHidden">
							
							<div class="my_delete_my" id="my_deletes<?php echo $comp['id'];?>"><span class="class_lists"><?php echo $comp['Customer_name'];?></span><label data-id="<?php echo $comp['id'];?>" class="my_deletes"><i class="fa fa-trash" aria-hidden="true"></i></label></div>
							<?php } ?>
							<?php } ?>
							
							</div>	
							<span class="text-danger"><?php echo $err_customer_id;?></span>
						</div>
					</div>
					<!--HAS MAIN COMPANY BEGIN-------------------------------------------------------------------------->
					<div class="col-md-6">						
						<?php 
							$comp_checked_state = empty($company_list) ? "" : "checked"; 
							$comp_disabled = empty($company_list) ? "disabled" : "";
						?>
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="has_company" name="has_company" <?php echo($comp_checked_state);?> />
							<label for="has_company" class="control-label" style="margin-right:8px;">Has a compnay</label>
						</div>
						<div id="div_has_main_compnay" class="form-group <?php echo $comp_disabled; ?>">
				            <input type="text" name="Company_ids" value="<?php echo $this->input->post('Company_id'); ?>" class="form-control" id="search-company" >
							<div id="suggesstion-company"></div>
							<div id="list_company">
								<?php if(!empty($company_list)){ ?>							
									<?php foreach($company_list as $comp){ $mcompid = $comp['main_company_id']; ?>
										<div class="my_delete_my" id="com_delete<?php echo $mcompid;?>">
											<input type="hidden" name="Company_id[]" value="<?php echo $mcompid;?>" class="companyHidden">
											<span class="class_lists"><?php echo $comp['main_company_name'];?></span>
											<label data-id="<?php echo $mcompid;?>" class="com_delete">
												<i class="fa fa-trash" aria-hidden="true"></i>
											</label>
										</div>
									<?php } ?>
								<?php } ?>
							</div>	
							<span class="text-danger"><?php echo $err_company_id;?></span>
						</div>
					</div>
					<!--HAS MAIN COMPANY END-------------------------------------------------------------------------->
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
				</div>
				<div class="row">					
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
				</div>
				<div class="row">
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