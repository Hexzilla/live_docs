<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Letter Edit</h3>
            </div>
			<?php echo form_open('letter/edit/'.$letter['letterid']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="mdate" class="control-label">Mdate</label>
						<div class="form-group">
							<input type="text" name="mdate" value="<?php echo ($this->input->post('mdate') ? $this->input->post('mdate') : $letter['mdate']); ?>" class="has-datepicker form-control" id="mdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="sdate" class="control-label">Sdate</label>
						<div class="form-group">
							<input type="text" name="sdate" value="<?php echo ($this->input->post('sdate') ? $this->input->post('sdate') : $letter['sdate']); ?>" class="has-datepicker form-control" id="sdate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="recipients" class="control-label">Recipients</label>
						<div class="form-group">
							<input type="text" name="recipients" value="<?php echo ($this->input->post('recipients') ? $this->input->post('recipients') : $letter['recipients']); ?>" class="form-control" id="recipients" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subject" class="control-label"><span class="text-danger">*</span>Subject</label>
						<div class="form-group">
							<input type="text" name="subject" value="<?php echo ($this->input->post('subject') ? $this->input->post('subject') : $letter['subject']); ?>" class="form-control" id="subject" />
							<span class="text-danger"><?php echo form_error('subject');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>