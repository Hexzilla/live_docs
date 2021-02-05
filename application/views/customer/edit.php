<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">تعديل بيانات عميل</h3>
            </div>
			<?php echo form_open('customer/edit/'.$customer['customer_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Customer_name" class="control-label"><span class="text-danger">*</span>إسم العميل</label>
						<div class="form-group">
							<input type="text" name="Customer_name" value="<?php echo ($this->input->post('Customer_name') ? $this->input->post('Customer_name') : $customer['Customer_name']); ?>" class="form-control" id="Customer_name" />
							<span class="text-danger"><?php echo form_error('Customer_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Nationality" class="control-label">الجنسية</label>
						<div class="form-group">
							<input type="text" name="Nationality" value="<?php echo ($this->input->post('Nationality') ? $this->input->post('Nationality') : $customer['Nationality']); ?>" class="form-control" id="Nationality" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="Position" class="control-label">المنصب</label>
						<div class="form-group">
							<input type="text" name="Position" value="<?php echo ($this->input->post('Position') ? $this->input->post('Position') : $customer['Position']); ?>" class="form-control" id="Position" />
						</div>
					</div>
					
					
					<div class="col-md-6">
						<label for="mobile" class="control-label">الجوال</label>
						<div class="form-group">
							<input type="text" name="mobile" value="<?php echo ($this->input->post('mobile') ? $this->input->post('mobile') : $customer['mobile']); ?>" class="form-control" id="mobile" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="IDcard" class="control-label">رقم الهوية</label>
						<div class="form-group">
							<input type="text" name="IDcard" value="<?php echo ($this->input->post('IDcard') ? $this->input->post('IDcard') : $customer['IDcard']); ?>" class="form-control" id="IDcard" />
							<span class="text-danger"><?php echo form_error('IDcard');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="email" class="control-label">البريد الالكتروني</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $customer['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="Remarks" class="control-label">ملاحظات</label>
						<div class="form-group">
							<input type="text" name="Remarks" value="<?php echo ($this->input->post('Remarks') ? $this->input->post('Remarks') : $customer['Remarks']); ?>" class="form-control" id="Remarks" />
						</div>
					</div>
					
					
					
					
				</div>
			</div>
			<div class="box-footer">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> حفظ
                            </button>
                            <a class="btn btn-default" href="<?php echo site_url("customer/index")?>">
                                تراجع
                            </a>
                        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	var edit_id = "<?php echo $customer['customer_id']; ?>";
	$("#Customer_name").blur(function() {
		console.log($(this).val())
		$.ajax({
    		type: "POST",
			url: "<?php echo base_url();?>customer/check_name",
			data: "name=" + $(this).val() + "&edit_id=" + edit_id,
		    beforeSend: function() {
		    },
		    success: function(data) {
				console.log('is_dup:' + data);
			    if (data == "0") {
					$("#name-text-danger").html("");
				}
				else {
					$("#name-text-danger").html("The name is duplicated.");
				}
		    }
		});
	})
});    
</script>