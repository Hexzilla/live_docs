<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">اضافة نوع شركة</h3>
            </div>
            <?php echo form_open('comptype/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="Name" class="control-label">الاسم</label>
						<div class="form-group">
							<input type="text" name="Name" value="<?php echo $this->input->post('Name'); ?>" class="form-control" id="Name" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> حفظ
            	</button>
                <a class="btn btn-default" href="<?php echo site_url("comptype/index")?>">
                    تراجع
                </a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>