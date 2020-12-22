<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">تعديل رسالة</h3>
            </div>
            <?php echo form_open_multipart('message/edit/'.$id); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            
                            
                            
                            <div class="col-sm-8">
					<div class="col-md-12">
						<label for="mdate" class="control-label">الموضوع <span class="text-danger">*</span></label>
						<div class="form-group">
                                                    <input type="text" name="subject"  class="form-control" value="<?php echo $message[0]['subject']?>" required="required"/>
						</div>
					</div>

                                <div class="col-md-12">
                                            <label for="recipients" class="control-label">المرسل اليه: <small>(عنوان بريد واحد)</small></label>
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
						<label for="subject" class="control-label">محتوى الرسالة <span class="text-danger">*</span></label>
						<div class="form-group">
						
                                                        <textarea rows="12" cols="50" name="content" class="form-control"><?php echo $message[0]['content']?></textarea>
						</div>
					</div>
                                <div class="col-sm-12">
                                    <h3>المرفقات الحالية</h3>
                                    <?php 
									if(!empty($emailgroups)){
                                    $attachments1=  explode(',',  $message[0]['attachments']);
                                    $attachments2=  explode(',',  $message[0]['uploaded_file_names']);
                                    for ($i = 0; $i < count($attachments1); $i++) { ?>
                                    <a href="<?php echo site_url()."assets/upload/$attachments2[$i]"?>" target="_NEW"><?php echo $attachments1[$i];?></a><br/>
                                    <?php }}?>
                                </div>
				</div>
                            <div class="col-sm-4">
                                <div class="col-md-12">
						<label for="recipients" class="control-label">تاريخ الارسال والوقت <span class="text-danger">*</span></label>
						<div class="form-group">
                                                    <input type="text" name="send_date_time"  class="form-control has-datepicker" id="recipients" value="<?php echo $message[0]['send_date_time']?>" required="required"/>
						</div>
				</div>
				
				
				
					<div class="col-md-12">
						<label for="sdate" class="control-label">اختر المجموعة</label>
                                                <div class="col-sm-12">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>اسم المجموعة</th>
                                                                <th>تحديد</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
															if(!empty($emailgroups)){
                                                            foreach ($emailgroups as $eg){
                                                                ?>
                                                            <tr>
                                                                <td><?php echo $eg['groupname']?></td>
                                                                <td><input type="checkbox" name="group_ids[]" value="<?php echo $eg['groupid']?>" <?php if( strpos( $message[0]['mailto'], $eg['groupid'] ) !== false ) echo 'checked="checked"'?> /></td>
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
            		<i class="fa fa-close"></i> تراجع
            	</a>    
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> حفظ
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
        <?php if($message[0]['status']!='send'){?>
        <a class="btn btn-primary" href="<?php echo site_url()."sendit/index/$id"?>">ارسل</a>
        <?php }else{?>
        <a class="btn btn-primary" href="<?php echo site_url()."sendit/index/$id"?>">إعادة الارسال</a>
        <?php } ?>
    </div>
</div>
<style>
    .mce-notification {
    display: none!important;
}
</style>