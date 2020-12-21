<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Emailgroup Edit</h3>
            </div>
			<?php echo form_open('email_list/edit/'.$id); ?>
			<div class="box-body">
                    <div class="col-md-8">
          		<div class="row clearfix">
                            <div class="col-md-12">
                                    <label for="groupname" class="control-label">Name</label>
                                    <div class="form-group">
                                        <input type="text" name="customer_name" value="<?php echo $email_list[0]['customer_name']?>" class="form-control" id="groupname" />
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <label for="groupcount" class="control-label">Email</label>
                                    <div class="form-group">
                                        <input type="email" name="email"  value="<?php echo $email_list[0]['email']?>" class="form-control" id="groupcount" />
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <label for="groupname" class="control-label">Mobile</label>
                                    <div class="form-group">
                                            <input type="text" name="mobile"  value="<?php echo $email_list[0]['mobile']?>" class="form-control" id="groupname" />
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <label for="groupcount" class="control-label">Nationality</label>
                                    <div class="form-group">
                                            <input type="text" name="nationality" value="<?php echo $email_list[0]['nationality']?>" class="form-control" id="groupcount" />
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <label for="groupname" class="control-label">ID Card</label>
                                    <div class="form-group">
                                            <input type="text" name="idcard" value="<?php echo $email_list[0]['idcard']?>" class="form-control" id="groupname" />
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <label for="groupcount" class="control-label">Position</label>
                                    <div class="form-group">
                                            <input type="text" name="position" value="<?php echo $email_list[0]['position']?>" class="form-control" id="groupcount" />
                                    </div>
                            </div>
                            <div class="col-md-12">
                                    <label for="groupcount" class="control-label">Remarks</label>
                                    <div class="form-group">
                                            <input type="text" name="remarks" value="<?php echo $email_list[0]['remarks']?>" class="form-control" id="groupcount" />
                                    </div>
                            </div>
				</div>
			</div>
                </div>
			<div class="box-footer">
                            <input type="hidden" name="id"  value="<?php echo $email_list[0]['id']?>"/>
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Update
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>