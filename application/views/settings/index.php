<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Settings</h3>
            	
            </div>
            <div class="box-body">

            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                <?php echo form_open('settings/update/'); ?>
                <div class="col-md-12"><h4>SMTP SETTINGS</h4></div>
                    <div class="col-md-12">
                            <label for="groupname" class="control-label">SMTP HOST</label>
                            <div class="form-group">
                                    <input type="text" name="smtp_host" value="<?php echo $settings[0]['smtp_host']; ?>" class="form-control" id="groupname" />
                            </div>
                    </div>
                    <div class="col-md-12">
                            <label for="groupcount" class="control-label">SMTP PORT</label>
                            <div class="form-group">
                                    <input type="text" name="smtp_port" value="<?php echo $settings[0]['smtp_port']; ?>" class="form-control" id="groupcount" />
                            </div>
                    </div>
                    <div class="col-md-12">
                            <label for="groupname" class="control-label">SMTP USERNAME</label>
                            <div class="form-group">
                                    <input type="text" name="smtp_username" value="<?php echo $settings[0]['smtp_username']; ?>" class="form-control" id="groupname" />
                            </div>
                    </div>
                    <div class="col-md-12">
                            <label for="groupcount" class="control-label">SMTP PASSWORD</label>
                            <div class="form-group">
                                    <input type="text" name="smtp_password" value="<?php echo $settings[0]['smtp_password']; ?>" class="form-control" id="groupcount" />
                            </div>
                    </div>                
                <hr>
                <div class="col-md-12"><h4>Regular Settings</h4></div>
                     <div class="col-md-12">
                            <label for="groupcount" class="control-label">MAX GROUP</label>
                            <div class="form-group">
                                    <input type="text" name="max_group" value="<?php echo $settings[0]['max_group']; ?>" class="form-control" id="groupcount" />
                            </div>
                    </div>
                <div class="col-md-12">
                    <input type="hidden" name="id" value="<?php echo $settings[0]['id']?>"/>
                    <input type="submit" value="<?php if($settings[0]['id']){ echo 'Update';}else{ echo 'Save';}?>" class="btn btn-primary" />
					 <a class="btn btn-default" href="<?php echo site_url("/")?>">
                                تراجع
                            </a>
                </div>
				 
				
                <?php echo form_close(); ?>
                    </div>
                
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
