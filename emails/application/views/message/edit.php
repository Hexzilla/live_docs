<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Message Edit</h3>
            </div>
            <?php echo form_open_multipart('message/edit/'.$id); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            
                            
                            
                            <div class="col-sm-8">
					<div class="col-md-12">
						<label for="mdate" class="control-label">Subject <span class="text-danger">*</span></label>
						<div class="form-group">
                                                    <input type="text" name="subject"  class="form-control" value="<?php echo $message[0]['subject']?>" required="required"/>
						</div>
					</div>
					<div class="col-md-12">
						<label for="sdate" class="control-label">To</label>
                                              <!--  <div class="col-sm-12">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Group Name</th>
                                                                <th>Select</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            foreach ($emailgroups as $eg){
                                                                ?>
                                                            <tr>
                                                                <td><?php echo $eg['groupname']?></td>
                                                                <td><input type="checkbox" name="group_ids[]" value="<?php echo $eg['groupid']?>" <?php if( strpos( $message[0]['mailto'], $eg['groupid'] ) !== false ) echo 'checked="checked"'?> /></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div> -->
					</div>
                                <div class="col-md-12">
                                            <label for="recipients" class="control-label">To Email <small>(only for single user)</small></label>
						<div class="form-group">
							<input type="text" name="toemail"  class="form-control" id="recipients"  value="<?php echo $message[0]['toemail']?>"/>
						</div>
					</div>
					<div class="col-md-12">
						<label for="recipients" class="control-label">CC</label>
						<div class="form-group">
                                                    <input type="text" name="mailcc"  class="form-control" id="recipients" value="<?php echo $message[0]['mailcc']?>"/>
						</div>
					</div>
					<div class="col-md-12">
						<label for="subject" class="control-label">Message body <span class="text-danger">*</span></label>
						<div class="form-group">
						
                                                        <textarea name="content" class="form-control"><?php echo $message[0]['content']?></textarea>
						</div>
					</div>
                                <div class="col-sm-12">
                                    <h3>Current Attachments</h3>
                                    <?php 
                                    $attachments=  explode(',',  $message[0]['attachments']);
                                    foreach ($attachments as $attch){
                                    ?>
                                    <a href="<?php echo site_url()."assets/upload/$attch"?>" target="_NEW"><?php echo $attch;?></a><br/>
                                    <?php }?>
                                </div>
				</div>
                            <div class="col-sm-4">
                                <div class="col-md-12">
						<label for="recipients" class="control-label">Send date time <span class="text-danger">*</span></label>
						<div class="form-group">
                                                    <input type="text" name="send_date_time"  class="form-control has-datepicker" id="recipients" value="<?php echo $message[0]['send_date_time']?>" required="required"/>
						</div>
				</div>
				
				
				   <div class="col-sm-12">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Group Name</th>
                                                                <th>Select</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            foreach ($emailgroups as $eg){
                                                                ?>
                                                            <tr>
                                                                <td><?php echo $eg['groupname']?></td>
                                                                <td><input type="checkbox" name="group_ids[]" value="<?php echo $eg['groupid']?>" <?php if( strpos( $message[0]['mailto'], $eg['groupid'] ) !== false ) echo 'checked="checked"'?> /></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div> 
				
				
                            </div>
                        </div>
			</div>
          	<div class="box-footer">
                <a href="<?php echo site_url()?>/message/index" class="btn btn-danger">
            		<i class="fa fa-close"></i> Cancel
            	</a>    
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Update
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
        <?php if($message[0]['status']!='send'){?>
        <a class="btn btn-primary" href="<?php echo site_url()."sendit/index/$id"?>">Send Mail</a>
        <?php }else{?>
        <a class="btn btn-primary" href="<?php echo site_url()."sendit/index/$id"?>">Resend Mail</a>
        <?php } ?>
    </div>
</div>
<style>
    .mce-notification {
    display: none!important;
}
</style>