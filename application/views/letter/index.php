<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Letters Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('letter/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Letterid</th>
						<th>Date</th>
						<th>Subject</th>
						<th>Recipients</th>
					    <th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($letters as $l){ ?>
                    <tr>
						<td><?php echo $l['letterid']; ?></td>
						<td><?php echo $l['sdate']; ?></td>
						<td><?php echo $l['subject']; ?></td>
						<td><?php echo $l['recipients']; ?></td>
						<td><?php echo $l['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('letter/edit/'.$l['letterid']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('letter/remove/'.$l['letterid']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
