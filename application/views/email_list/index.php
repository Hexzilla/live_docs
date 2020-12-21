<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Email Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('email_list/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped" id="dataTable">
                    <thead>
                    <tr>
						<th>SL#</th>
						<th>Name</th>
						<th>Email</th>
                                                <th>Mobile</th>
                                                <th>Nationality</th>
                                                <th>IDcard</th>
                                                <th>Position</th>
                                                <th>Remark</th>
						<th>Actions</th>
                    </tr>
                    </thead>
                    <?php
                    $i=1;
                    foreach($email_list as $e){ ?>
                    <tr>
						<td><?php echo $i;$i++; ?></td>
						<td><?php echo $e['customer_name']; ?></td>
						<td><?php echo $e['email']; ?></td>
                                                <td><?php echo $e['mobile']; ?></td>
                                                <td><?php echo $e['nationality']; ?></td>
                                                <td><?php echo $e['idcard']; ?></td>
                                                <td><?php echo $e['position']; ?></td>
                                                <td><?php echo $e['remarks']; ?></td>
						<td>
                            <a href="<?php echo site_url('email_list/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('email_list/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
