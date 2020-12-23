<?php
    if (isset($this->session->logged_in) && $this->session->logged_in) {
        $user = $this->session->user;
        $userGroup = $this->User_group_model->get_user_group($this->session->user_group_id);
    } else {
        redirect('/login');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Documents Managent</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <!-- <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>"> -->
		<link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-rtl.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE-rtl.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/plugin/jquery.filer-dragdropbox-theme.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/plugin/jquery.filer.css');?>">
		
			<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
		 <script src="http://clinicupdate.com/documents/resources/js/jquery-2.2.3.min.js"></script>
    <link href="<?php echo site_url('assets/js/jquery.autocomplete.css')?>" rel="stylesheet">
	
	<!-- datatable starts -->
		<link rel="stylesheet" href="<?php echo site_url('assets/datatables/css/dataTables.bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo site_url('assets/datatables/css/responsive.bootstrap.min.css');?>">
	<!-- datatables ends -->
	
	
	<style>
	body{
	font-family: 'Cairo', sans-serif;
	
	}
	</style> 
	
	 <style>
            .table-list tbody {
                display:block;
                max-height:300px;
                overflow:auto;
            }
            .table-list thead, .table-list tbody tr {
                display:table;
                width:100%;
                table-layout:fixed;/* even columns width , fix width of table too*/
            }
            .hide-item{
                display: none !important;
            }
            .show-item{
                display: table !important;
            }
            #finalList input{
                border: 0;
                background-color: transparent;
                width: 100%;
            }
            .hide-item-td{
                display: none;
            }
            .hide{
                display: none !important;
            }
            .disabled {
                pointer-events: none;
                color: #ccc;
            }
        </style>
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo site_url();?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">نظام المستندات</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">نظام المستندات</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								
		<?php
		
		if(!empty($user['image'])){
			$image="uploads/".$user['image'];
		} else {
			
			$image="default_avatar_male.jpg";
		} ?>
								
								
								
								
								
								
                                    <img src="<?php echo site_url($image);?>" class="user-image" alt="User Image">
                                <!--    <span class="hidden-xs"><?php echo $user['username'], " ", $user['fullname']?></span> -->
									<span class="hidden-xs"><?php echo $user['username']?></span>
									
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url($image);?>" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo $user['fullname'] ?>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo site_url("user/edit/{$user['user_id']}");?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('session/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url($image);?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $user['fullname']?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
					
					 <!-- search form 
      <form action="<?php echo base_url();?>search" method="post" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" value="<?php echo $this->input->post('search'); ?>" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search_but" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
				
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
                    <ul class="sidebar-menu">
                        <li class="header">القائمة الرئيسية</li>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>الشاشة الرئيسية</span>
                            </a>
                        </li>
						
						
						 <li>
                            <a href="<?php echo site_url('search/index');?>"><i class="fa fa-search"></i> البحث</a>
							
                           
                        </li>
						
						 <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>العملاء</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('customer/add');?>"><i class="fa fa-plus"></i> إضافة</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('customer/index');?>"><i class="fa fa-list-ul"></i> قائمة العملاء</a>
                                </li>
                            </ul>
                        </li>
						
						
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>المنشأت</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('company/add');?>"><i class="fa fa-plus"></i> إضافة</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('company/index');?>"><i class="fa fa-list-ul"></i> قائمة المنشأت</a>
                                </li>
                            </ul>
                        </li>
					
                       
					<!--	<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Dcategory</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('dcategory/add');?>"><i class="fa fa-plus"></i> Add</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('dcategory/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
                       
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>المستندات</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('document/add');?>"><i class="fa fa-plus"></i> إضافة</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('document/index');?>"><i class="fa fa-list-ul"></i> قائمة المستندات</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>الموظفين</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('employee/add');?>"><i class="fa fa-plus"></i> إضافة</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('employee/index');?>"><i class="fa fa-list-ul"></i> قائمة الموظفين</a>
                                </li>
                            </ul>
                        </li>
						
						<!--
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Emptype</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('emptype/add');?>"><i class="fa fa-plus"></i> Add</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('emptype/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
                            </ul>
                        </li> -->
						
                        <?php if ($userGroup['name'] == 'Admin') { ?>
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>المستخدمين</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i> إضافة</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i> قائمة المستخدمين</a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>
						
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>أنواع الشركات</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('comptype/add');?>"><i class="fa fa-plus"></i> إضافة</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('comptype/index');?>"><i class="fa fa-list-ul"></i> قائمة أنواع الشركات</a>
                                </li>
                            </ul>
                        </li> 
						
						 <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>أنواع المستندات</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('doctype/add');?>"><i class="fa fa-plus"></i> إضافة</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('doctype/index');?>"><i class="fa fa-list-ul"></i> قائمة أنواع المستندات</a>
                                </li>
                            </ul>
                        </li>
						
						 <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>البريد</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('message/add'); ?>"><i class="fa fa-plus"></i> إنشاء</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('message/index'); ?>"><i class="fa fa-list-ul"></i> قائمة الرسائل</a>
                                </li>
                            </ul>
                        </li>
						
						 <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>المجموعات البريدية</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active">
                                <?php if($this->auth->isAdd()):?>
                                    <a href="<?php echo site_url('emailgroup/add'); ?>"><i class="fa fa-plus"></i> إنشاء</a>
                                <?php endif;?>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('emailgroup/index'); ?>"><i class="fa fa-list-ul"></i> قائمة المجموعات</a>
                                </li>
                            </ul>
                        </li>
						
						<li>
                            <a href="<?php echo site_url('settings'); ?>">
                                <i class="fa fa-desktop"></i> <span>إعدادات البريد</span>
                            </a>
						</li>
						
						
						
						
						
						
                        <li class="header"> تنبيهات المستندات</li>
                        <li><a href="<?php echo site_url('document/expired');?>"><i class="fa fa-circle-o text-red"></i>
                            <span>  منتهية (<?php echo $this->Document_model->count_important() ?>)</span></a>
                        </li>
                        <li><a href="<?php echo site_url('document/expired30');?>"><i class="fa fa-circle-o text-yellow"></i>
                            <span>  تنتهي بعد 30 يوم (<?php echo $this->Document_model->count_warning() ?>)</span></a>
                        </li>
                        <li><a href="<?php echo site_url('document/expired60');?>"><i class="fa fa-circle-o text-aqua"></i>
                            <span>  تنتهي بعد 60 يوم(<?php echo $this->Document_model->count_information() ?>)</span></a>
                        </li>		 
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php if($this->session->flashdata('success')):?>
                    <div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success!</strong> <?php echo $this->session->flashdata('success')?>
                    </div>
                    <?php endif;?>

                    <?php if($this->session->flashdata('info')):?>
                    <div class="alert alert-info alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Info!</strong> <?php echo $this->session->flashdata('info')?>
                    </div>
                    <?php endif;?>
                    
                    <?php if($this->session->flashdata('warning')):?>
                    <div class="alert alert-warning alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!</strong> <?php echo $this->session->flashdata('warning')?>
                    </div>
                    <?php endif;?>
                    <?php if($this->session->flashdata('error')):?>
                    <div class="alert alert-danger alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Danger!</strong> <?php echo $this->session->flashdata('error')?>
                    </div>
                    <?php endif;?>
                    
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Developed By <a href="#">MicroMax</a> </strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
		
		 <script src="<?php echo site_url('resources/plugin/jquery.filer.min.js');?>"></script>
		 <script src="<?php echo site_url('resources/plugin/media_custom.js');?>"></script>
		
		
		
		
<script src="<?php echo site_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo site_url('assets/datatables/js/dataTables.bootstrap.min.js')?>"></script>
 <script src="<?php echo site_url('assets/js/jquery.autocomplete.js')?>"></script>
 
 <script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
        roles = $('input.rolesHidden').map(function() {
            return [[this.value]];
        }).get();

		$.ajax({
    		type: "POST",
	    	url: "<?php echo base_url();?>company/get_customer",
		    data:'keyword='+$(this).val()+'&role_id='+roles,
		    beforeSend: function(){
			    $("#search-box").css("background","#FFF url(<?php echo base_url();?>LoaderIcon.gif) no-repeat 165px");
		    },
		    success: function(data){
			    $("#suggesstion-box").show();
			    $("#suggesstion-box").html(data);
			    $("#search-box").css("background","#FFF");
		    }
		});
	});

    $("#main_company_name").keyup(function(){
        roles = $('input.companyHidden').map(function() {
            return [[this.value]];
        }).get();

		$.ajax({
    		type: "POST",
	    	url: "<?php echo base_url();?>company/get_company",
		    data: 'keyword=' + $(this).val() + '&role_id='+ roles,
		    beforeSend: function(){
			    $("#main_company_name").css("background", "#FFF url(<?php echo base_url();?>LoaderIcon.gif) no-repeat 165px");
		    },
		    success: function(data){
			    $("#suggesstion-company").show();
			    $("#suggesstion-company").html(data);
			    $("#main_company_name").css("background", "#FFF");
		    }
		});
	});
});

function selectCountry(val) {
	
	res = val.split(",");
	
	
	
	$("#list_boxs").append('<div class="my_delete_my" id="my_delete'+res[0]+'"><input class="rolesHidden" type="hidden" name="Customer_id[]" value="'+res[0]+'"><span class="class_lists">'+res[1]+'</span><label data-id="'+res[0]+'" class="my_delete"><i class="fa fa-trash" aria-hidden="true"></i></label></div>');
	
$("#search-box").val('');
$("#suggesstion-box").hide();
}

function selectCompany(val) {
	res = val.split(",");
    $("#main_company_name").val(res[1]);
    $("#main_company_id").val(res[0]);
    $("#suggesstion-company").hide();
}
</script>

 
 
<script type="text/javascript">
$().ready(function() {
	$("#get_customer").autocomplete("<?php echo base_url();?>/ajax/get_customer", {
	width: 260,
	matchContains: true,
	//mustMatch: true,
	//minChars: 0,
	//multiple: true,
	//highlight: false,
	//multipleSeparator: ",",
	selectFirst: false
	});
	
	
	$("#get_company").autocomplete("<?php echo base_url();?>/ajax/get_company", {
	width: 260,
	matchContains: true,
	//mustMatch: true,
	//minChars: 0,
	//multiple: true,
	//highlight: false,
	//multipleSeparator: ",",
	selectFirst: false
	});	
	
	
	$("#has_company").change(function(e) {
        if (this.checked) {
            $("#div_has_main_compnay").removeClass("disabled");
        }
        else {
            $("#div_has_main_compnay").addClass("disabled");
        }
    });
	
});
</script>
 
 
 
 
 
 
 
 

	<script>
	
jQuery(document).ready(function ($) { 
	$( "body" ).delegate( ".my_delete", "click", function() {
	 my_id=$(this).data("id");

	  $("#my_delete"+my_id).remove();

	});	

    $( "body" ).delegate( ".com_delete", "click", function() {
	 my_id=$(this).data("id");

	  $("#com_delete"+my_id).remove();

	});	
});		



jQuery(document).ready(function ($) { 
	$( "body" ).delegate( ".my_deletes", "click", function() {
	

	 
var answer = confirm('Are you sure you want to permanently delete this?');
if (answer)
{
  console.log('yes');
   my_id=$(this).data("id");

   
  							if(my_id > 0){

										  $.ajax({


													url:'<?php echo base_url();?>company/delete_client_from_company',
													data:'a_href='+my_id,
													// data:'USER_EMAIL=txt',
													type: "POST",
													dataType:'html',
													success:function(result)


													{
														
													  $("#my_deletes"+my_id).remove();	
														
													}
													
	                                          });
	 
							} 
   
   
   
   
   
   
   
  
}
else
{
  console.log('cancel');
}	 
	 
	 
	 
	  

	});	
});		















	$(".Show_details").on("click", function (e) {
	listing=$(this).data("listing");
	$('#modal_body').html(listing);

	
});
	
	
	
	
	
	
	
	
	
	
	
			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e) {
						$('#imagePreview').css('background-image', 'url('+e.target.result +')');
						$('#imagePreview').hide();
						$('#imagePreview').fadeIn(650);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}
			$("#imageUpload").change(function() {
				readURL(this);
			});
			
			
			
			jQuery(document).ready(function ($) { 

		
		
	

$("#delstatus").on("click", function (e) {
	values=$('#user_group_id').val();
	    if((values==2) || (values==3)){
		var checkbox = $(this);
		if (checkbox.is(":checked")) {
			// do the confirmation thing here
			e.preventDefault();
			return false;
		}
    }
});

	
		
$("#addstatus").on("click", function (e) {
	values=$('#user_group_id').val();
	    if(values==3){
		var checkbox = $(this);
		if (checkbox.is(":checked")) {
			// do the confirmation thing here
			e.preventDefault();
			return false;
		}
    }
});	
		
		
$("#editstatus").on("click", function (e) {
	values=$('#user_group_id').val();
	    if(values==3){
		var checkbox = $(this);
		if (checkbox.is(":checked")) {
			// do the confirmation thing here
			e.preventDefault();
			return false;
		}
    }
});			
		
		
		
$("#delstatus").on("click", function (e) {
	values=$('#user_group_id').val();
	    if(values==3){
		var checkbox = $(this);
		if (checkbox.is(":checked")) {
			// do the confirmation thing here
			e.preventDefault();
			return false;
		}
    }
});			
		

				  $( "body" ).delegate( '#user_group_id', "change", function(e) {
			          values=$(this).val();
					  if(values==1){
						  $('#status').prop( "checked", true );
						  $('#addstatus').prop( "checked", true ).prop( "disabled", false );
						  $('#editstatus').prop( "checked", true ).prop( "disabled", false );
						  $('#delstatus').prop( "checked", true ).prop( "disabled", false );
						  
					  }
					  
					  if(values==2){
						  
						$('#status').prop( "checked", true );
						  $('#addstatus').prop( "checked", true ).prop( "disabled", false );
						  $('#editstatus').prop( "checked", true ).prop( "disabled", false );
						  $('#delstatus').prop( "checked", false ).prop( "disabled", true );
				  
						  
						  
						  
					  }

					  if(values==3){
						  
						   $('#status').prop( "checked", true );
						  $('#addstatus').prop( "checked", false ).prop( "disabled", true );
						  $('#editstatus').prop( "checked", false ).prop( "disabled", true );	
						  $('#delstatus').prop( "checked", false ).prop( "disabled", true );
					  }					  
			
			
				  });
			 });	  
			
			
		   $(document).delegate(".delete_img","click",function(){	
			
			thisid= this.id;
			
			$('#image_image').val('');
			$('#imagePreview').css('background-image', 'url(<?php echo base_url();?>/default_avatar_male.jpg)');
			
		   });
		   $("#myId").on("change", function (e) {	
	
						var action = $('#myId option:selected').attr('data-recipientId');
						$("#warndays").val(action);
	
		
			
		   });		
			
			
			
			
			
			
			
	   $(document).delegate(".delete_media","click",function(){
	 
    	thisid= this.id;





							if(thisid.length > 0){


										  $.ajax({


													url:'<?php echo base_url();?>document/delete_brand_images',
													data:'a_href='+thisid,
													// data:'USER_EMAIL=txt',
													type: "POST",
													dataType:'html',
													success:function(result)


													{
														
													$( "."+thisid ).remove();		
														
													}
													
	                                          });
	 
							}
		
	});	
  		
			
			
			
</script>	
		
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>	
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js "></script>

	
<!-- <script>
$(document).ready(function() {
    $('#example').DataTable();
	  $('.tb_example').DataTable();
} );
</script> -->		 
		
 <script>
$(document).ready(function() {
    $('#example').DataTable();
	
	$('.tb_example').DataTable(
	  {
       
	    "info":     false,
		
		"language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
        }
    } 
	
	
	
	  
	  );
} );
</script>		
	
	
		<script src="<?php echo site_url('assets/libs/jquery.calendars.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/libs/jquery.calendars.ummalqura.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/libs/jquery.calendars.ummalqura-ar.js'); ?>"></script>
<script src="<?php echo site_url('assets/libs/bootstrap-calendars.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/libs/bootstrap-datetimepicker.min.js'); ?>"></script>
		
		
		<script>
		$(function () {

	// Umm ALqura Calendar
	$('#datetimepicker1').datetimepicker({
		format: 'DD/MM/YYYY',
	    locale: {calender: 'ummalqura', lang: 'ar', Default: false}
	});
	$('#datetimepicker2').datetimepicker({
		format: 'DD/MM/YYYY',
	    locale: {calender: 'ummalqura', lang: 'ar', Default: false}
	});


});</script>
		
    </body>
</html>
