<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">تعديل بيانات مستند</h3>
            </div>
            <?php echo form_open('document/edit/' . $document['docid']); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="comapnyid" class="control-label"><span class="text-danger">*</span>المنشأة</label>

                        <div class="form-group">

                            <input type="text" name="comapnyid"
                                   value="<?php echo($this->input->post('comapnyid') ? $this->input->post('comapnyid') : $document['Name']); ?>"
                                   class="form-control" id="get_company"/>


                            <span class="text-danger"><?php echo form_error('comapnyid'); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="doctype" class="control-label"><span class="text-danger">*</span>نوع المستند</label>

                        <div class="form-group">
                            <select name="doctype" id="doctype_s" class="form-control">
                                <option value="">اختر توع المستند</option>
                                <?php
                                foreach ($all_doctype as $doctype) {
                                    $selected = ($doctype['id'] == $document['doctype']) ? ' selected="selected"' : "";

                                    echo '<option value="' . $doctype['id'] . '" ' . $selected . '>' . $doctype['name'] . '</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('doctype'); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="dtype" class="control-label"><span class="text-danger">*</span>التصنيف</label>

                        <div class="form-group">
                            <select name="dtype" class="form-control">
                                <option value="">إختر التصنيف</option>
                                <?php
                                foreach ($all_dcategory as $dcategory) {
                                    $selected = ($dcategory['dtype'] == $document['dtype']) ? ' selected="selected"' : "";

                                    echo '<option value="' . $dcategory['dtype'] . '" ' . $selected . '>' . $dcategory['name'] . '</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('dtype'); ?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="docno" class="control-label">رقم المستند</label>

                        <div class="form-group">
                            <input type="text" name="docno"
                                   value="<?php echo($this->input->post('docno') ? $this->input->post('docno') : $document['docno']); ?>"
                                   class="form-control" id="docno"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="issuedate" class="control-label">تاريخ الاصدار</label>

                        <!--                        <div class="form-group">-->
                        <!--                            <input type="text" name="issuedate"-->
                        <!--                                   value="-->
                        <?php //echo($this->input->post('issuedate') ? $this->input->post('issuedate') : date('d/m/Y', strtotime($document['issuedate']))); ?><!--"-->
                        <!--                                   class="has-datepicker form-control" id="issuedate"/>-->
                        <!--                        </div>-->

                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" name="issuedate"
                                   value="<?php echo($this->input->post('issuedate') ? $this->input->post('issuedate') : $document['issuedate']); ?>"/>
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <label for="expiredate" class="control-label">تاريخ الانتهاء</label>

<!--                        <div class="form-group">-->
<!--                            <input type="text" name="expiredate"-->
<!--                                   value="--><?php //echo($this->input->post('expiredate') ? $this->input->post('expiredate') : date('d/m/Y', strtotime($document['expiredate']))); ?><!--"-->
<!--                                   class="has-datepicker form-control" id="expiredate"/>-->
<!--                        </div>-->

                        <div class='input-group date' id='datetimepicker2'>
                            <input type='text' class="form-control" name="expiredate"
                                   value="<?php echo($this->input->post('expiredate') ? $this->input->post('expiredate') : $document['expiredate']); ?>"/>
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="warndays" class="control-label">التحذير قبل</label>

                        <div class="form-group">
                            <input type="text" name="warndays"
                                   value="<?php echo($this->input->post('warndays') ? $this->input->post('warndays') : $document['warndays']); ?>"
                                   class="form-control" id="warndays"/>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="Remarks" class="control-label">ملاحظات</label>

                        <div class="form-group">
                            <input type="text" name="Remarks"
                                   value="<?php echo($this->input->post('Remarks') ? $this->input->post('Remarks') : $document['Remarks']); ?>"
                                   class="form-control" id="Remarks"/>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <input type="file" name="files[]" id="filer_input2" multiple="multiple">

                        <div  <?php if (empty($attachment)) { ?> style="display:none" <?php } ?>
                            id="media-items-featureds">


                            <ul class="jFiler-items-list jFiler-items-grid">

                                <?php foreach ($attachment as $query) { ?>


                                    <li class="jFiler-item" data-jfiler-index="<?php echo $query['PK_MediaID'] ?>"
                                        style="">


                                        <div
                                            class="jFiler-item-container media_<?php echo $query['PK_MediaID'] ?> app_view_first">
                                            <div class="jFiler-item-inner">
                                                <div class="jFiler-item-thumb">

                                                    <div class="jFiler-item-info">
									   <span class="jFiler-item-title">
									   <b title="<?php echo $query['filename'] ?>"><?php echo $query['filename'] ?></b>
									   </span>
                                                    </div>
                                                    <div class="jFiler-item-thumb-image">
                                                        <?php if ($query['type'] == 'image') { ?>
                                                            <img
                                                                src="<?php echo base_url(); ?><?php echo $query['attach'] ?>"
                                                                draggable="false">
                                                        <?php } else { ?>
                                                            <span
                                                                class="jFiler-icon-file f-file f-file-ext-<?php echo $query['extension'] ?>"><?php echo $query['extension'] ?></span>
                                                        <?php } ?>

                                                    </div>
                                                </div>

                                                <div class="jFiler-item-assets jFiler-row">
                                                    <ul class="list-inline pull-left">
                                                        <li>
                                                            <div class="jFiler-item-others text-success" style="">
                                                                <i class="icon-jfi-check-circle"></i>Success
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-inline pull-right">
                                                        <li><a id="media_<?php echo $query['PK_MediaID'] ?>"
                                                               class="icon-jfi-trash delete_media"></a></li>
                                                    </ul>

                                                </div>

                                            </div>
                                        </div>

                                    </li>




                                <?php } ?>


                            </ul>


                        </div>

                    </div>


                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> حفظ
                </button>
                <a class="btn btn-default" href="<?php echo site_url("document/index") ?>">
                    تراجع
                </a>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

