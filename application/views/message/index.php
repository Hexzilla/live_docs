<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة الرسائل</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('message/add'); ?>" class="btn btn-success btn-sm">إضافة</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="dataTable">
                    <thead>
                    <tr>
							<th>الرقم</th>
						<th>التاريخ</th>
						<th>الموضوع</th>
						<th>مرسل الى:</th>
                                                <th>الحالة</th>
						<th>العملية</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=1;
                    foreach($message as $l){ ?>
                    <tr>
						<td><?php echo $i;$i++; ?></td>
						<td><?php echo $l['send_date_time']; ?></td>
						<td><?php echo $l['subject']; ?></td>
						<td><?php
                                                if($l['toemail']){                                                                                                
                                                    echo $l['toemail'];
                                                }else{
                                                    $this->load->model('Emails_model');
                                                    $emailgroups=$this->Emails_model->getRows('emailgroups', array('where'=> array('groupid'=>$l['mailto'])));
                                                    echo $emailgroups[0]['groupname']; 
                                                }
?></td>
						<td><?php echo $l['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('message/edit/'.$l['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> تعديل</a> 
                            <a href="<?php echo site_url('message/remove/'.$l['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> حذف</a>
                        </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
