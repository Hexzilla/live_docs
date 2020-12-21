
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search Listing</h5>
        <button type="button" class="close lise_close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_body">
        ...
      </div>
   
    </div>
  </div>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Search Listing</h3>
            
            </div>
            <div class="box-body">
			<div class="col-md-12">
			
					<div class="navbar_form"	>	
							 <form class="navbar-form" action="<?php echo base_url();?>search" method="post" role="search"> 
								<div class="input-group add-on">
								  <input class="form-control" placeholder="Search" value="<?php echo $this->input->post('search'); ?>" name="search" id="srch-term" type="text">
								  <div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								  </div>
								</div>
							  </form>			
					</div>		
						
			
			
			
			
			
			</div>
			
			<div class="col-md-12">
			   <h1 class="SearchResult">Search Result</h1>
			</div>
			
			<div class="col-md-12">
			
			
					<div id="accordion" role="tablist" aria-multiselectable="true">
					<div class="card">
					<div class="card-header" role="tab" id="headingOne">
					  <h5 class="mb-0">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						  Customer
						</a>
						
						<span style="float:right">found <label>(<?php echo count(@$customers);?>)</label></span>
					  </h5>
					</div>

					<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
					  <div class="card-block">
		
		
							<div class="row">
								<div class="col-md-12">
								   <div class="box-body">
									 <table class="table table-striped">
												<tr>
													<th>Customer ID</th>
													<th>Customer Name</th>
													<th>Nationality</th>
													<th>Email</th>
													<th>Mobile</th>
													<th>ID Card</th>
													<th>Position</th>
												 <th>ACTION</th>
												</tr>
												<?php if(!empty($customers)){ foreach($customers as $c){ ?>
												<tr>
													<td><?php echo $c['customer_id']; ?></td>
													<td><?php echo $c['Customer_name']; ?></td>
													<td><?php echo $c['Nationality']; ?></td>
													<td><?php echo $c['email']; ?></td>
													<td><?php echo $c['mobile']; ?></td>
													<td><?php echo $c['IDcard']; ?></td>
													<td><?php echo $c['Position']; ?></td>
									   	 <td><a  data-toggle="modal" data-listing="<table><tr><th>Customer ID</th><th>Customer Name</th><th>Nationality</th><th>Email</th><th>Mobile</th><th>ID Card</th><th>Position</th></tr><tr><td><?php echo $c['customer_id']; ?></td><td><?php echo $c['Customer_name']; ?></td><td><?php echo $c['Nationality']; ?></td><td><?php echo $c['email']; ?></td><td><?php echo $c['mobile']; ?></td><td><?php echo $c['IDcard']; ?></td><td><?php echo $c['Position']; ?></td></tr></table>" data-target="#exampleModal" class="Show_details">view</a></td>	
												</tr>
												<?php } }?>
											</table>
									</div>	
											
								</div>
							</div>		
							
							
							
			
							
							
		
		
		
		
		
		
		
		
					  </div>
					</div>
					</div>
					<div class="card">
					<div class="card-header" role="tab" id="headingTwo">
					  <h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						  Company
						</a>
						<span style="float:right">found <label>(<?php echo count(@$company);?>)</label></span>
					  </h5>
					</div>
					<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
					  <div class="card-block">
				
				
							<div class="box-body">
								<table class="table table-striped">
									<tr>
										<th>Company ID</th>
										<th>Name</th>
										<th>Company Type</th>
										<th>Customer</th>
									<!--    <th>Manager</th> -->
									   
										<th>Company No</th>
										<th>Registeration</th>
									  <th>ACTION</th>
									
									</tr>
									<?php if(!empty($company)){  foreach($company as $c){ ?>
									<tr>
										<td><?php echo $c['companyid']; ?></td>
										<td><?php echo $c['Name']; ?></td>
										<td><?php echo $c['CTypeName']; ?></td>
										<td><?php echo $c['customer']; ?></td>
									  <!--  <td><?php echo $c['manager']; ?></td> -->
										
										<td><?php echo $c['companyNo']; ?></td>
										<td><?php echo $c['CompReg']; ?></td>
									 	 <td><a  data-toggle="modal" data-listing="<table><tr><th>Company ID</th><th>Name</th><th>Company Type</th><th>Customer</th><th>Company No</th><th>Registeration</th></tr><tr><td><?php echo $c['companyid']; ?></td><td><?php echo $c['Name']; ?></td><td><?php echo $c['CTypeName']; ?></td><td><?php echo $c['customer']; ?></td><td><?php echo $c['companyNo']; ?></td><td><?php echo $c['CompReg']; ?></td></tr>		</table>" data-target="#exampleModal" class="Show_details">view</a></td>	
				
									</tr>
									<?php } } ?>
								</table>
								              
							</div>				
								
								
								
								
						
								
								
								
								
								
								
								
				
			
				
				
				
				
				
				
				
					  </div>
					</div>
					</div>
					<div class="card">
					<div class="card-header" role="tab" id="headingThree">
					  <h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						  Employee
						</a>
						
						<span style="float:right">found <label>(<?php echo count(@$employees);?>)</label></span>
					  </h5>
					</div>
					<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
					  <div class="card-block">
					
					
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Employee ID</th>
                        <th>Type</th>
                        <th>Employee Name</th>
						<th>Companyid</th>
                        <th>Email</th>
                        <th>Mobile</th>
						<th>ACTION</th>
                    <!--    <th>Nationality</th> -->
                    <!--    <th>Position</th> -->
                      
                    </tr>
                    <?php if(!empty($employees)){  foreach($employees as $e){ ?>
                    <tr>
                        <td><?php echo $e['employee_id']; ?></td>
                        <td><?php echo $e['empposition']; ?></td>
                        <td><?php echo $e['emp_name']; ?></td>
						<td><?php echo $e['companyname']; ?></td>
                        <td><?php echo $e['email']; ?></td>
                        <td><?php echo $e['mobile']; ?></td>
                     <!-- <td><?php echo $e['Nationality']; ?></td> -->
                    <!--  <td><?php echo $e['position']; ?></td> -->
					
					     <td><a  data-toggle="modal" data-listing="<table><tr><th>Employee ID</th><th>Type</th><th>Employee Name</th><th>Companyid</th><th>Email</th><th>Mobile</th></tr><tr><td><?php echo $e['employee_id']; ?></td><td><?php echo $e['empposition']; ?></td><td><?php echo $e['emp_name']; ?></td><td><?php echo $e['companyname']; ?></td><td><?php echo $e['email']; ?></td><td><?php echo $e['mobile']; ?></td><tr></table>" data-target="#exampleModal" class="Show_details">view</a></td>	
         
                    </tr>
                    <?php } }?>
                </table>
                          
            </div>					
					
					
					
		               
                  	
					
					
					
					
					
					
					
				
					
					
					
					
					
					
					  </div>
					</div>
					</div>
					
					
				<div class="card">
					<div class="card-header" role="tab" id="headingThree1">
					  <h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
						  Document
						</a>
						<span style="float:right">found <label>(<?php echo count(@$documents);?>)</label></span>
					  </h5>
					</div>
					<div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree1">
					  <div class="card-block">
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>#</th>
                     <!--   <th>Remarks</th> -->
                        <th>Comapny Name</th>
                        <th>Document Type</th>
                        <th>Category</th>
                        <th>Document No</th>
                        <th>Issue Date</th>
                        <th>Expire Date</th>
                        <th>Warndays</th>
                        <th>ACTION</th>
                    </tr>
                    <?php if(!empty($documents)){ foreach($documents as $d){ ?>
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
						<td><a  data-toggle="modal" data-listing="<table><tr><th>#</th><th>Comapny Name</th><th>Document Type</th><th>Category</th><th>Document No</th><th>Issue Date</th><th>Expire Date</th><th>Warndays</th></tr> <tr><td><?php echo $d['docid']; ?></td><td><?php echo $d['compname']; ?></td><td><?php echo $d['docname']; ?></td><td><?php echo $d['category']; ?></td><td><?php echo $d['docno']; ?></td><td><?php echo $d['issuedate']; ?></td><td><?php echo $d['expiredate']; ?></td><td><?php echo $d['warndays']; ?></td></tr></table>" data-target="#exampleModal" class="Show_details">view</a></td>
            
			
			
			
			
			
			
			</table>
			
			
			
			
			
			
                    </tr>
                    <?php } }?>
                </table>
                           
            </div>
					  </div>
					</div>
					</div>					
					
					
					
					
					
					
					
					</div>		
							
										
							
			
			
			
			
			
			
			
			</div>
			

			
			
			
			
			

                            
            </div>
        </div>
    </div>
</div>
