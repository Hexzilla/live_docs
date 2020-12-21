$(document).ready(function() {
      var myhost='http://'+window.location.hostname+'/admin_lt';
	  //alert(myhost);
    //Example 1
    $('#filer_input').filer({
		showThumbs: true
    });
    
	
    //Example 2
    $("#filer_input2").filer({
        limit: 8,
        maxSize: null,
        extensions: null,
        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag & Drop files here</h3> <span style="display:inline-block;">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a><!--<p class="max_uplode_class">Maximum upload file size: 2 MB.</p>--></div></div>',
        showThumbs: true,
        theme: "dragdropbox",
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
            item: '<li class="jFiler-item">\<div class="jFiler-item-container app_view_first">\<div class="jFiler-item-inner">\<div class="jFiler-item-thumb">\<div class="jFiler-item-status"></div>\ <div class="jFiler-item-info">\<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\<span class="jFiler-item-others">{{fi-size2}}</span>\</div>\{{fi-image}}\</div>\<div class="jFiler-item-assets jFiler-row">\<ul class="list-inline pull-left">\<li>{{fi-progressBar}}</li>\</ul>\<ul class="list-inline pull-right">\<li><a class="icon-jfi-trash jFiler-item-trash-action"><i class="fa fa-trash-o"></i></a></li>\</ul>\</div>\</div>\</div>\</li>',
            itemAppend: '<li class="jFiler-item jFiler-item-areas">\<div class="jFiler-item-container">\<div class="jFiler-item-inner">\<div class="jFiler-item-thumb">\<div class="jFiler-item-status"></div>\<div class="jFiler-item-info">\<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\<span class="jFiler-item-others">{{fi-size2}}</span>\</div>\{{fi-image}}\</div>\<div class="jFiler-item-assets jFiler-row">\<ul class="list-inline pull-left">\<li><span class="jFiler-item-others">{{fi-icon}}</span></li>\</ul>\<ul class="list-inline pull-right">\<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\</ul>\</div>\</div>\</div>\</li>',
            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: false,
            removeConfirmation: true,
            _selectors: {
                list: '.jFiler-items-list',
                item: '.jFiler-item',
                progressBar: '.bar',
                remove: '.jFiler-item-trash-action'
            }
        },
        dragDrop: {
            dragEnter: null,
            dragLeave: null,
            drop: null,
        },
        uploadFile: {
            url: myhost+'/media_functions/single',
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            beforeSend: function(){},
            success: function(datas, el){
				$('.deleteimg').remove('');				
			
				var value ="";			
				var obj = jQuery.parseJSON(datas);			
				$.each(obj,function(index,item){

				   value +='<input type="hidden" id="'+index+'" name="'+index+'[]" value="'+item+'">';

				}); 				
                //data_show = datas.split("_");	
                		
				//console.log('insert_id'+data_show[0]);
				//console.log('type'+data_show[1]);
				//console.log('type-extension'+data_show[2]);
		
				
				
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
					   if(obj.error=='Filetype not allowed'){  
                         $("<div class=\"jFiler-item-others text-success\"><i aria-hidden=\"true\" class=\"fa fa-check\"></i>Not allowed this formate </div>").hide().appendTo(parent).fadeIn("slow"); 
					   }
					   else{
						   $("<div class=\"jFiler-item-others text-success\"><i aria-hidden=\"true\" class=\"fa fa-check\"></i>Success</div>").hide().appendTo(parent).fadeIn("slow");  
						   
					   }
			       });
				  
				 if(obj.error!='Filetype not allowed'){  
					var appent = el.find(".app_view_first").parent();			
					//el.find(".app_view_first").fadeOut("slow", function(){
					$("<div class=\"mask_checks\">"+value+"</div>").appendTo(appent); 					
					//});
				 }				
		  		   
				   
/*	            					   
							
			var appent = el.find(".app_view_first").parent();			
			el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
			$("<div class=\"mask\"><div class=\"form-group\"><div class=\"col-md-12 col-sm-12 col-xs-12\"><div class=\"mask_div\"><span class=\"switch\"><label><input type=\"checkbox\" id=\"featured_100\" name=\"featured\" class=\"js-switch\" checked /> Set as Featured</label></span></div></div></div><div class=\"form-group\"><div class=\"col-md-12 col-sm-12 col-xs-12\"><div class=\"mask_div\"><span class=\"switch\"><label><input type=\"checkbox\" id=\"gallery_100\" name=\"gallery[]\" class=\"js-switch\" checked /> Select in Gallery</label></span></div></div></div></div>").appendTo(appent).fadeIn("slow"); 					
		   });				   
		   */
				   
				   
				   
				   
            },
            error: function(el){
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div  class=\"jFiler-item-others text-error\"><i aria-hidden=\"true\" class=\"fa fa-check\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");    
                });
            },
            statusCode: null,
            onProgress: null,
            onComplete: null
        },
        files: null,
        addMore: false,
        clipBoardPaste: true,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: null,
        onSelect: null,
        afterShow: null,
        onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
            var file = file.name;
            $.post(myhost+'/media_functions/remove_files', {file: file});
        },
        onEmpty: null,
        options: null,
        captions: {
            button: "Choose Files",
            feedback: "Choose files To Upload",
            feedback2: "files were chosen",
            drop: "Drop file here to Upload",
            removeConfirmation: "Are you sure you want to remove this file?",
            errors: {
                filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                filesType: "Only Images are allowed to be uploaded.",
                filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
            }
        }
    });
    
});
