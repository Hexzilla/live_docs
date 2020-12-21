<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">قائمة المستندات</h3>
            	<div class="box-tools">
                    <?php if($this->auth->isAdd()):?>
                    <a href="<?php echo site_url('document/add'); ?>" class="btn btn-success btn-sm">إضافة</a>
                    <?php endif;?>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                     <!--   <th>Remarks</th> -->
                        <th>إسم المنشأة</th>
                        <th>نوع المستند</th>
                        <th>التصنيف</th>
                        <th>رقم المستند</th>
                        <th>تاريخ الاصدار</th>
                        <th>تاريخ الانتهاء</th>
                        <th>التحذير قبل</th>
                        <th>العملية</th>
                    </tr>
                    <?php foreach($documents as $d){ ?>
                    <tr>
                        <td><?php echo $d['docid']; ?></td>
                      <!--  <td><?php echo $d['Remarks']; ?></td> -->
                        <td><?php echo $d['compname']; ?></td>
                        <td><?php echo $d['docname']; ?></td>
                        <td><?php echo $d['category']; ?></td>
                        <td><?php echo $d['docno']; ?></td>
                        <td><?php echo $d['issuedate']; ?></td>
                        <td><?php echo $d['expiredate']; ?></td>
                        <td><?php echo $d['warndays']; ?></td>
                        <td>
                            <?php if($this->auth->isEdit()):?>
                            <a href="<?php echo site_url('document/edit/'.$d['docid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> تعديل</a>
                            <?php endif;?>
                            <?php if($this->auth->isDelete()):?>
                            <a onclick="javascript:check=confirm( 'Are sure you want to Delete ?');if(check==false) return false;" href="<?php echo site_url('document/remove/'.$d['docid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> حذف</a>
                            <?php endif;?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
