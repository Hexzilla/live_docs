<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Emptype Add</h3>
            </div>
            <?php echo form_open('emptype/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="ctname" class="control-label">Ctname</label>
						<div class="form-group">
							<input type="text" name="ctname" value="<?php echo $this->input->post('ctname'); ?>" class="form-control" id="ctname" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
            	</button>
                <a class="btn btn-default" href="<?php echo site_url("emptype/index")?>">
                    Cancel
                </a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>