<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">تعديل نوع المستند</h3>
            </div>
			<?php echo form_open('doctype/edit/'.$doctype['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label">الاسم</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $doctype['name']); ?>" class="form-control" id="name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="warndays" class="control-label">التحذير قبل</label>
						<div class="form-group">
							<input type="text" name="warndays" value="<?php echo ($this->input->post('warndays') ? $this->input->post('warndays') : $doctype['warndays']); ?>" class="form-control" id="warndays" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> حفظ
                            </button>
                            <a class="btn btn-default" href="<?php echo site_url("doctype/index")?>">
                                تراجع
                            </a>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>