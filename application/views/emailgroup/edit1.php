<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">تعديل مجموعة</h3>
            </div>
           <?php echo form_open("emailgroup/edit/$groupid"); ?>
          	<div class="box-body">
          		<div class="row clearfix">
                            <div class="col-md-6">
                                    <label for="groupname" class="control-label">اسم المجموعة</label>
                                    <div class="form-group">
                                            <input type="text" name="groupname" value="<?php echo $emailgroup[0]['groupname']; ?>" class="form-control" id="groupname" />
                                    </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="groupname" class="control-label">اختر من القائمة</label>
                                    <div class="form-group">
                                        <select name="lists" class="form-control" id="lists">
                                            <option value="">اختر من القائمة</option>
                                            <option value="company">منشات</option>
                                            <option value="customers">عملاء</option>
                                            <option value="employees">موظفين</option>
                                        </select>
                                    </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
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
                            <p class="btn btn-primary pull-right" id="add_t">اضافة</p>
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
                               <?php foreach ($grdetails as $gr){?>
                                    <tr>
                                <td><input type="text" name="name[]" value="<?php echo $gr['name']?>"/></td>
                                <td><input type="text" name="email[]" value="<?php echo $gr['email']?>"/></td>
                                <td><p class="btn btn-danger"><i class="fa fa-trash-o"></i></p></td>
                                    </tr>
                               <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

			</div>
          	<div class="box-footer">
                    <input type="hidden" name="groupid" value="<?php echo $groupid?>"/>
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
     $('#lists').change(function(){
         var tblname=$(this).val();
         console.log(tblname);
         $.post( "<?php echo site_url()?>emailgroup/loadData", { tblname: tblname },  function( data ) {
            if(data){
                $( "#loadList" ).html( data );
            }else{
                $( "#loadList" ).html( '' );
            }
         });
     });
     
     $('#add_t').on('click',function(){
         
     var values = new Array();
     var i=1;
$.each($("input[name='list_ids[]']:checked").closest("tr"),
       function () {
           var oList = $('#finalList').html();
           console.log('name'+$(this).children('td.name').text());
           console.log('email'+$(this).children('td.email').text());
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
   console.log(values);
     });
     
   

     
     
 })
 
 $(document).delegate('.btn.btn-danger', 'click', function(){
     $(this).closest('tr').remove();
    console.log('hello');
}); 
    
 </script>