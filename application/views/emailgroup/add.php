<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">اضافة مجموعة بريدية</h3>
            </div>
           <?php echo form_open('emailgroup/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            <div class="col-md-6">
                                    <label for="groupname" class="control-label">اسم المجموعة</label>
                                    <div class="form-group">
                                        <input type="text" name="groupname"class="form-control" id="groupname" required="required"/>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="groupname" class="control-label">اختر من القائمة</label>
                                    <div class="form-group">
                                        <select name="lists" class="form-control" id="lists">
                                            <option value="">Select List</option>
                                            <option value="company">Company</option>
                                            <option value="customers">Customer</option>
                                            <option value="employees">Employee</option>
                                        </select>
                                    </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" id="search_text" class="form-control" placeholder="Search"/>
                        </div>
                        <div class="col-md-6 form-check">
							<input type="checkbox" class="form-check-input" id="select_all" />
							<label for="select_all" class="control-label" style="margin-right:8px;"> اختر الكل</label>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-list">
                                <thead class="hide-item">
                                <th>اختر</th>
                                <th style="width:33%">الاسم</th>
                                <th style="width:33%">البريد الالكتروني</th>
                                
                                </thead>
                                <tbody id="loadList">
                               

                                                               
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            <p class="btn btn-primary pull-right hide-item" id="add_t">اضافة</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                <th style="width:33%">الاسم</th>
                                <th style="width:33%">البريد الالكتروني</th>
                                <th></th>
                                </thead>
                                <tbody id="finalList">
                               


                                </tbody>
                            </table>
                        </div>
                    </div>

			</div>
          	<div class="box-footer">
                    <a href="<?php echo site_url()?>/emailgroup/index" class="btn btn-danger">
            		<i class="fa fa-close"></i> تراجع
            	</a>
                    <button type="submit" class="btn btn-success" id="save">
            		<i class="fa fa-check"></i> حفظ
            	</button>
          	</div>
           <?php echo form_close(); ?>
      	</div>
    </div>
</div>
<script>
 $(document).ready(function(){
    
    $("#select_all").on('click', function() {
        const checked = $(this).is(":checked")
        $('#loadList input[type=checkbox]').prop('checked', checked)
    })

    $("#search_text").keyup(function() {
        const keyword = $(this).val().toLowerCase()
        let trs = $('#loadList > tr')
        trs && trs.length > 0 && trs.each(function(index) {
            if (keyword.length <= 0) {
                $(this).show()
                return
            }

            let name = $(this).find('td.name')
            if (name && name.length > 0 && name.html().toLowerCase().indexOf(keyword) >= 0) {
                $(this).show()
                return
            }
            let email = $(this).find('td.email')
            if (email && email.length > 0 && email.html().toLowerCase().indexOf(keyword) >= 0) {
                $(this).show()
                return
            }
            $(this).hide()
        })
    });

     $('#lists').change(function(){
        $("#select_all").prop('checked', false);
         var tblname=$(this).val();

         $.post( "<?php echo site_url()?>emailgroup/loadData", { tblname: tblname },  function( data ) {
            if(data){
                $(".hide-item").addClass('show-item');
                $("#loadList").html( data );
            }else{
                $("#loadList").html( '' );
            }
         });
         if($(this).val()===""){
             $( ".hide-item" ).addClass('hide');
         }
     });

     $('#add_t').on('click',function(){
         
     var values = new Array();
     var i=1;
     $.each($("input[name='list_ids[]']:checked").closest("tr"),
       function () {
           var oList = $('#finalList').html();
                if(oList.indexOf($(this).children('td.email').text()) != -1){
                    console.log($(this).children('td.email').text()+' already at the list');
                }else{
           
           var nt='<tr><td><input type="text" name="name[]" value="'+$(this).children('td.name').text()+'"/></td>';
              nt=nt+'<td><input type="text" name="email[]" value="'+$(this).children('td.email').text()+'"/></td><td><p class="btn btn-danger"><i class="fa fa-trash-o"></i></p></td></tr>'; 
            values.push(nt);     
        }
            i++;
       });
       
 $('#finalList').append(values.join(" "));
   //console.log(values);
     });
     
   

     
     
 })
 
 $(document).delegate('.btn.btn-danger', 'click', function(){
     $(this).closest('tr').remove();
}); 
    
 </script>