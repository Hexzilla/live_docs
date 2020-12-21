<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">إضافة مستخدم</h3>
            </div>
            <?php echo form_open_multipart('user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="username" class="control-label">إسم المستخدم</label><span class="text-danger">*</span>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">كلمة السر</label><span class="text-danger">*</span>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="user_group_id" class="control-label">المجموعة</label><span class="text-danger">*</span>
						<div class="form-group">
							<select name="user_group_id" id="user_group_id" class="form-control">
								<option value="">إختر المجموعة</option>
								<?php 
								foreach($all_user_group as $user_group)
								{
									$selected = ($user_group['user_group_id'] == $this->input->post('user_group_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$user_group['user_group_id'].'" '.$selected.'>'.$user_group['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('user_group_id');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="fullname" class="control-label">الاسم بالكامل</label>
						<div class="form-group">
							<input type="text" name="fullname" value="<?php echo $this->input->post('fullname'); ?>" class="form-control" id="fullname" />
						</div>
					</div>
										
					<div class="col-md-6">
						<label for="email" class="control-label">البريد الالكتروني</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
						
						<br>
						<div class="row">
			            <div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="status" value="1"  id="status" />
							<label for="status" class="control-label">فعال</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="addstatus" value="0"  id="addstatus" />
							<label for="addstatus" class="control-label">يسمح بالاضافة</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="editstatus" value="0"  id="editstatus" />
							<label for="editstatus" class="control-label">يسمح بالتعديل</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="delstatus" value="0"  id="delstatus" />
							<label for="delstatus" class="control-label">يسمح بالحذف</label>
						</div>
					</div>						
						
						
						</div>
						
					</div>
					<div class="col-md-6">
					<div class="form-group form_group">
					
<div class="avatar-upload">
        <div class="avatar-edit">
		
            <input type='file'  id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
		<?php
		
		if(!empty($user['image'])){
			$image="uploads/".$user['image'];
		} else {
			
			$image="resources/img/user2-160x160.jpg";
		} ?>
		
            <div id="imagePreview" style="background-image: url(<?php echo base_url().$image; ?>);">
            </div>
        </div>
    </div>
			
	<h1 class="h11">تحميل الصورة 
        <small>مع المعاينة</small>
    </h1>						
						</div>
					</div>
								
					
		
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> حفظ
            	</button>
                <a class="btn btn-default" href="<?php echo site_url("user/index")?>">
                    تراجع
                </a>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>