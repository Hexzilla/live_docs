<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Message Add</h3>
            </div>
            <?php echo form_open_multipart('message/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            
                            
                            
                            <div class="col-sm-8">
					<div class="col-md-12">
						<label for="mdate" class="control-label">Subject <span class="text-danger">*</span></label>
						<div class="form-group">
                                                    <input type="text" name="subject"  class="form-control" id="mdate" required="required" />
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
                                                                <td><input type="checkbox" name="group_ids[]" value="<?php echo $eg['groupid']?>"/></td>
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
							<input type="text" name="toemail"  class="form-control" id="recipients" />
						</div>
					</div>
                                
					<div class="col-md-12">
						<label for="recipients" class="control-label">CC</label>
						<div class="form-group">
							<input type="text" name="mailcc"  class="form-control" id="recipients" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="subject" class="control-label">Message body <span class="text-danger">*</span></label>
						<div class="form-group">
						
                                                        <textarea name="content" class="form-control"></textarea>
						</div>
					</div>
                                <div class="form-group">
                            
                           

                            <input type="file" id="pimg" name="attachments">
                            <p class="help-block">Upload attachments Here</p>
                        </div>
                                <div class="form-group">
                            

                            <input type="file" id="pimg" name="attachments2">
                            <p class="help-block">Upload attachments Here</p>
                        </div>
                                <div class="form-group">
                            

                            <input type="file" id="pimg" name="attachments3">
                            <p class="help-block">Upload attachments Here</p>
                        </div>
				</div>
                            <div class="col-sm-4">
                                <div class="col-md-12">
						<label for="recipients" class="control-label">Send date time <span class="text-danger">*</span></label>
						<div class="form-group">
                                                    <input type="text" name="send_date_time"  class="form-control has-datepicker" id="recipients" required="required"/>
						</div>
					</div>
					
					
					
					<div class="col-md-12">
						<label for="sdate" class="control-label">Group Name:</label>
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
															if(!empty($emailgroups)){
                                                            foreach ($emailgroups as $eg){
                                                                ?>
                                                            <tr>
                                                                <td><?php echo $eg['groupname']?></td>
                                                                <td><input type="checkbox" name="group_ids[]" value="<?php echo $eg['groupid']?>"/></td>
                                                            </tr>
                                                            <?php
                                                            }}
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
					</div>
					
					
					
					
                            </div>
                        </div>
			</div>
          	<div class="box-footer">
            	<a href="<?php echo site_url()?>/message/index" class="btn btn-danger">
            		<i class="fa fa-close"></i> Cancel
            	</a>
                    <button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
                    
                
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
<style>
    .mce-notification {
    display: none!important;
}
</style>