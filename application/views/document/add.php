<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">إضافة مستند</h3>
            </div>
            <?php echo form_open('document/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="comapnyid" class="control-label"><span class="text-danger">*</span>المنشأة</label>
						<div class="form-group">
						<input type="text" name="comapnyid" value="<?php echo $this->input->post('comapnyid'); ?>" class="form-control" id="get_company" />
						
		
							<span class="text-danger"><?php echo form_error('comapnyid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="doctype" class="control-label"><span class="text-danger">*</span>نوع المستند</label>
						<div class="form-group">
							<select name="doctype" id="myId"   class="form-control">
								<option data-recipientId="0" value="">اختر نوع المستند</option>
								<?php 
								foreach($all_doctype as $doctype)
								{
									
								
									$selected = ($doctype['id'] == $this->input->post('doctype')) ? ' selected="selected"' : "";

									echo '<option data-recipientId="'.$doctype['warndays'].'"  value="'.$doctype['id'].'" '.$selected.'>'.$doctype['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('doctype');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dtype" class="control-label"><span class="text-danger">*</span>التصنيف</label>
						<div class="form-group">
							<select name="dtype" class="form-control">
								<option value="">إختر التصنيف</option>
								<?php 
								foreach($all_dcategory as $dcategory)
								{
									$selected = ($dcategory['dtype'] == $this->input->post('dtype')) ? ' selected="selected"' : "";

									echo '<option value="'.$dcategory['dtype'].'" '.$selected.'>'.$dcategory['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('dtype');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="docno" class="control-label">رقم المستند</label>
						<div class="form-group">
							<input type="text" name="docno" value="<?php echo $this->input->post('docno'); ?>" class="form-control" id="docno" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="issuedate" class="control-label">تاريخ الاصدار</label>
						<!-- <div class="form-group">
							<input type="text" name="issuedate" value="<?php echo date("d / m / Y") ?>" class="has-datepicker form-control" id="issuedate" />
						</div> -->

						<div class='input-group date' id='datetimepicker1'>
							<input type='text' class="form-control" name="issuedate" value="<?php echo($this->input->post('issuedate')); ?>"/>
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="expiredate" class="control-label">تاريخ الانتهاء</label>
						<!-- <div class="form-group">
							<input type="text" name="expiredate" value="<?php echo date("d / m / Y") ?>" class="has-datepicker form-control" id="expiredate" />
						</div> -->

						<div class='input-group date' id='datetimepicker2'>
							<input type='text' class="form-control" name="expiredate" value="<?php echo($this->input->post('expiredate')); ?>" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="warndays" class="control-label">التحذير قبل</label>
						<div class="form-group">
							<input type="text" name="warndays" value="التحذير قبل" class="form-control" id="warndays" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="Remarks" class="control-label">ملاحظات</label>
						<div class="form-group">
							<input type="text" name="Remarks" value="<?php echo $this->input->post('Remarks'); ?>" class="form-control" id="Remarks" />
						</div>
					</div>
					
			<div class="col-md-12">
			<input type="file" name="files[]" id="filer_input2" multiple="multiple">


								
					
			</div>
					
					
					
					
					
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> حفظ
            	</button>
                <a class="btn btn-default" href="<?php echo site_url("document/index")?>">
                    تراجع
                </a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>