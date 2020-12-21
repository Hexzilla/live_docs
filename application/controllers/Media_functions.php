<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media_functions extends CI_Controller {
	
	
   public function welcome(){	   
	   echo 'welcome';
   }	
	
	
	
	
	
	
	

   public function for_test(){	   
	   $return=$this->resize('cropper.jpg','rr','rr/welcome',50,50);
	   echo $return;
   }

      public function for_test2(){	   
	   $return=$this->watermark_text('cropper.jpg','rr','rr/welcome2');
	   echo $return;
   } 
   
   public function for_test3(){	   
	   $return=$this->watermark_logo('cropper.jpg','rr','logo.png','rr','rr/welcome3');
	   echo $return;
   } 
	
   public function for_test4(){	   
	   $return=$this->crop('cropper.jpg','rr','rr/welcome4');
	   echo $return;
   } 	
	

   public function for_test5(){	   
	   $return=$this->rotate('cropper.jpg','rr','rr/rotate');
	   echo $return;
   } 	
	
  public function for_test6(){	   
	   $return=$this->_image_path_creattion('rr');
	   echo $return;
   } 	

   public function _image_path_creattion($path){	  

       if(!empty($path)){
		   
		$year=date("Y");
		$month=date("m");
		$day=date("d");
		
		   
	   $return_year=$this->_directory_check_and_creation($path.'/'.$year);
	   if($return_year=='sucess'){
		    //echo '----------------------month-sucess----------------------<br>';
		      $return_month=$this->_directory_check_and_creation($path.'/'.$year.'/'.$month);
			if($return_month=='sucess'){
			//	echo '----------------------date-sucess----------------------<br>';
				$return_day=$this->_directory_check_and_creation($path.'/'.$year.'/'.$month.'/'.$day);
			}
	   }
	      
	   if($return_year=='already exists'){
		   
		    $return_month=$this->_directory_check_and_creation($path.'/'.$year.'/'.$month);
			if($return_month=='sucess'){
				//echo '----------------------month -sucess----------------------<br>';
				 $return_month=$this->_directory_check_and_creation($path.'/'.$year.'/'.$month.'/'.$day);
			}
			if($return_month=='already exists'){
				//echo '----------------------already-date----------------------<br>';
				 $return_month=$this->_directory_check_and_creation($path.'/'.$year.'/'.$month.'/'.$day);
			
			}			
	
	   }		   
		   
		   
		return $path.'/'.$year.'/'.$month.'/'.$day;  
		   
		   
		   
		   
	   }
	   
	   else{
		   return 'path empty'; 
		   
	   }
	   
	   
	   
	   
   } 	
	
public function _directory_check_and_creation($directory){
	if(!empty($directory)){
		if (!file_exists($directory)) {
		   mkdir($directory, 0777, true);
		   return "sucess";
		} else{
			return "already exists";
		}		
		
	}
	else{
		return "incurrected path";
	}

}
	
	
	
	
	
	




	
	//IMAGE RESIZE
   	public function _resize($filename,$path,$new_path,$width,$height,$type,$extension)
	{
		
	    $source_image=$path.'/'.$filename;
		$without_extension = pathinfo($source_image, PATHINFO_FILENAME);
		$thumbnail=$without_extension.'-'.$type.'-'.$width.'x'.$height.'.'.$extension;
		$new_image_path=$new_path.'/'.$filename;	
		$img_array['image_library'] = 'gd2';
		$img_array['source_image'] =$source_image;
		$img_array['new_image']    = $new_path.'/'.$thumbnail;    
		$img_array['quality']='100%'; 			
		//$img_array['thumb_marker'] = '_resize';
		$img_array['create_thumb'] = false;
		$img_array['maintain_ratio'] = TRUE;
		$img_array['width']         = $width;
		$img_array['height']       = $height;
		$img_array['overwrite'] = TRUE;

			//$this->load->library('image_lib', $config);
			$this->image_lib->clear();
			$this->image_lib->initialize($img_array);		
			$this->image_lib->resize();

			//print_r($resize);
			
				if ( ! $this->image_lib->resize())
				{
				 return 'Not Allowed ';
		 
				 				 
				} else {
							
					return $thumbnail;
				}
		
	}	
	//IMAGE RESIZE
	
	
	
   //WATER MARK TEXT
   public function watermark_text($filename,$path,$new_path){
	   
		$source_image=$path.'/'.$filename;
		$without_extension = pathinfo($source_image, PATHINFO_FILENAME);
		$thumbnail='_time'.time().'_'.$without_extension.'_watermark.jpg';
		$new_image_path=$new_path.'/'.$filename;		   
	   
	    $img_array['image_library'] = 'gd2';  
	    $watermark['source_image']     = $source_image; //The image path,which you would like to watermarking
		$watermark['new_image']        = $new_path.'/'.$thumbnail; 
        $watermark['wm_text']          = 'shemeer Copyright 2006 -@ Hamithzon IT Solutions';
        $watermark['wm_type']          = 'text';
       // $watermark['wm_font_path']     = './fonts/arial-webfont.ttf';
        $watermark['wm_font_size']     = 16;
        $watermark['wm_font_color']    = 'fff000';
        $watermark['wm_vrt_alignment'] = 'middle';
        $watermark['wm_hor_alignment'] = 'center';
        $watermark['wm_padding']       = '20';
		
		
		$this->image_lib->clear();
		$this->image_lib->initialize($watermark);
		$this->image_lib->watermark();	

		if ( ! $this->image_lib->watermark())
				{
				 return $this->image_lib->display_errors();
		 
				 
				} else {
							
					return $new_image_path;
		}

	   
   }
   
   
     //WATER MARK IMAGES
    public function watermark_logo($filename,$path,$logo,$logo_path,$new_path)
    {
       

		$source_image=$path.'/'.$filename;
		$without_extension = pathinfo($source_image, PATHINFO_FILENAME);
		$thumbnail='_time'.time().'_'.$without_extension.'_watermark.jpg';
		$new_image_path=$new_path.'/'.$filename;		   
        $logo_path=$logo_path.'/'.$logo;

	    $watermark['image_library']    = 'gd2';
	    $watermark['source_image']     = $source_image; //The image path,which you would like to watermarking
		$watermark['new_image']        = $new_path.'/'.$thumbnail; 
        $watermark['wm_type']          = 'overlay';
        $watermark['wm_overlay_path']  = $logo_path; //the overlay image
        $watermark['wm_opacity']       = 1;
        $watermark['wm_vrt_alignment'] = 'bottom';
        $watermark['wm_hor_alignment'] = 'right';
		//$watermark['wm_x_transp'] = 10;
		//$watermark['wm_y_transp'] = 50;
		//$watermark['wm_vrt_offset'] = 100;
		//$watermark['wm_hor_offset'] = 200;
		
		
        
		$this->image_lib->clear();
		$this->image_lib->initialize($watermark);
		$this->image_lib->watermark();	

		if ( ! $this->image_lib->watermark())
				{
				 return $this->image_lib->display_errors();
		 
				 
				} else {
							
					return $new_image_path;
		}
   
	}
   
   
   
   
   
   public function crop($filename,$path,$new_path){
	   
	$source_image=$path.'/'.$filename;
	$without_extension = pathinfo($source_image, PATHINFO_FILENAME);
	$thumbnail='time'.time().'_'.$without_extension.'crop.jpg';
	$new_image_path=$new_path.'/'.$filename;	   
	   
	$crop['image_library'] = 'gd2';
	//$crop['library_path'] = '/usr/X11R6/bin/';
	$crop['source_image']   = $source_image; //The image path,which you would like to watermarking
	$crop['new_image']  = $new_path.'/'.$thumbnail; 
	$crop['x_axis'] = 100;
	$crop['y_axis'] = 60;
    $this->image_lib->clear();
	$this->image_lib->initialize($crop);
    $this->image_lib->crop();	

		if ( ! $this->image_lib->crop())
				{
				 return $this->image_lib->display_errors();
		 
				 
				} else {
							
					return $new_image_path;
		}








	 
	   
   }
   
   
   
   
   
   
   
   
   
    public function rotate($filename,$path,$new_path){ 
   
   
   
   	$source_image=$path.'/'.$filename;
	$without_extension = pathinfo($source_image, PATHINFO_FILENAME);
	$thumbnail='time'.time().'_'.$without_extension.'crop.jpg';
	$new_image_path=$new_path.'/'.$filename;	
   
   
   
   
$config['image_library'] = 'gd2';
//$config['library_path'] = '/usr/bin/';
$crop['source_image']   = $source_image; //The image path,which you would like to watermarking
$crop['new_image']  = $new_path.'/'.$thumbnail; 
$config['rotation_angle'] = 'hor';

$this->image_lib->initialize($config);

if ( ! $this->image_lib->rotate())
{
        echo $this->image_lib->display_errors();
} 
   
   
   
	}  
   
   
   function _image_array($array=null){
	   if(!empty($array)){
	          $json_array=json_decode($array, true);
		     if(!empty($json_array)){
				 if(!empty($json_array['image_array'][2])){
				   return $json_array['image_array'][2];
				 }
				  else{
					  return $json_array['image_array'][0];
				  }
			 }
			
			  
	
				 
	   }
	   
   }
   
   
   public function auto_load(){
	   // echo"<pre>";		 
		 $result=$this->m_admin->_get_select('tbl_media','PK_MediaID','ASC',20);
		 if(!empty($result)){
			 foreach($result as $ress){
			    	 $image=$this->_image_array($ress['Media']);
				  //print_r($ress);
				   $path_gen = date_format( date_create($ress['Created_Date']),'Y/m/d');
				  //echo date_format('Y/m/d',strtotime($ress['Created_Date']));
				  $img_url=base_url().'/hs-uplode/'.$path_gen.'/'.$image;
				  $file_type= explode('/',$ress['File_Type']);
				  //if($file_type[0])					  
					$file_att=""; 
					$Featured="";
					$gallery="";
					$Attachment="";
	                $_att="";
					$media=$image;
			  if($file_type[0]=='image'){
				  $file_att= '<img height="200" src="'.$img_url.'" />';	
				 $_att=""; 
				
			}

			else{
				  
				  $file_att='<div class="file-icon file-icon-lg" data-type="'.$ress['Extension'].'"></div><div class="file-file-name-lg" >'.$ress['FileName'].'</div>';				
		   $_att="file_icon_attach"; 
	
			}

	 
echo '<li class="col-md-2 col-sm-3 col-xs-12 box effect2">												
	    <div class="attachment-preview-landscape">
	       <div class="landscape-thumbnail">
		           <div class="view view-first">
				       <div class="img_url_div '.$_att.'">'.$file_att.'</div> 							
			      </div>												
		  </div>
	   </div>
					
					
	<div class="button-link-check">
				<div class="checkbox">
						<input type="checkbox" data-cdate="'.$ress["Created_Date"].'"	data-path="'.$path_gen.'" data-media-id="'.$ress["PK_MediaID"].'" data-media-name="'.$ress["FileName"].'" data-media-type="'.$ress["File_Type"].'"	data-extension="'.$ress["Extension"].'"	data-replaced="'.$ress["Replaced"].'" data-size="'.$ress["Size"].'" data-createdBy="'.$ress["Created_By"].'" data-status="'.$ress["Status"].'"	data-media-created-date="'.$ress["Media_Created_Date"].'" data-file-type="'.$ress["Extension"].'"  name="getfileCheck[]" data-media="'.$media.'"  data-crr-media="'.$file_type[0].'" id="get_checkbox_'.$ress["PK_MediaID"].'" class=" css-checkbox select-checkbox" /><label id="label_'.$ress["PK_MediaID"].'" for="get_checkbox_'.$ress["PK_MediaID"].'" class="css-label     select_checkbox radGroup1 ">&nbsp;</label>
				</div>	
	</div>						  

</li>';
				  
	  
				 
			 }
			 
		 }
		 
		
		 exit();
	   
   }
   
   

   
   
   public function set_image_resize($file){
	   $md_setting=get_table('tbl_media_settings','PK_TypeID','ASC',null);
	   $image_array=array();
	   
	   if((!empty($file))&&(!empty($md_setting))){
		   
		   //IMAGE RESIZE AND UPLOAD
		                  
								$created_date=$file['date'];
								$extension=$file['extension'];
								$file_with_url=$file['file'];
								$file_name=$file['name'];
								$old_name=$file['old_name'];
								$replaced=$file['replaced'];
								$size=$file['size'];
								$size2=$file['size2'];
								$type=$file['type'][0];
								$type2=$file['type'][1];
								$image_array['image_array'][0]=$file_name;
		                       
			   
							   
							   //GET UPLOADE IMAGE WIDTH HEIGHT 
								//@$imgInfo =  getimagesize($file_with_url);
								//print_r($imgInfo);
				   
							   
							   
							   $path_creation=$this->_image_path_creattion('hs-uplode');	
							   $array_val=1;
							   foreach($md_setting as $setting){
								
								$PK_TypeID=$setting['PK_TypeID'];
								$Type=$setting['Type'];
								$Width=$setting['Width'];
								$Height=$setting['Height'];
								$Crop=$setting['Crop'];
								$Status=$setting['Status'];							
								
								
								if($path_creation!='path empty'){
									
										$return=$this->_resize($file_name,'hs-uplode/temp',$path_creation,$Width,$Height,$Type,$extension);
																	
										//echo $return;				
									 
										$path='hs-uplode/temp';


										
										$source_image=$path.'/'.$file['name'];
										$without_extension = pathinfo($source_image, PATHINFO_FILENAME);
										$thumbnail=$without_extension.'-'.$Type.'-'.$Width.'x'.$Height.'.'.$extension;									
										$image_array['image_array'][$array_val]=$thumbnail;				
										$array_val++;	
									
								}									
								
								
								
							}		   
		   
		   
		                       $media=json_encode($image_array);
		   
		   
		   
									$this->db->select('*');
									$this->db->where('FileName',$old_name);		
									$query = $this->db->get('tbl_media'); 
									$_array_check=$query->row_array();	
									
									if(empty($_array_check)){
									  $array=array(
												  //'FK_Media_TypeID'=>$PK_TypeID,
												  'Media'=>$media,
												  'FileName'=>$old_name,
												  'Extension'=>$extension,
												  'Replaced'=>$replaced,
												  'Size'=>$file['size2'],
												  'File_Type'=>$type.'/'.$type2,
												  'Status'=>1,
												  'Media_Created_Date'=>$created_date,
												  'Created_Date'=>date("Y-m-d H:i:s"),
												  'Created_By'=>1
											  
											  );
								 
								 //INSERT DATA
								  
								      $return = $insert_data=$this->m_admin->set_insert('tbl_media',$array);	
								    
								   } else{
									   
									  $return = 'file already exsist';
								   }
								   
                                
								if($path_creation!='path empty'){	
								    copy("hs-uplode/temp/$file_name","$path_creation/$file_name");								
								}  
								   
								   
								   
								//ORGINAL FILE ONE COPY MOVE TO  hs-uplode
								

								//TEMP FOLDER Cleaner
								if(!empty($file_name)){
									$file = './hs-uplode/temp/' .$file_name;
									if(file_exists($file)){
										unlink($file);
									}
									
								}											

								   
						  return $return;
								   
		   
	   }
	   
	   
   } 
   
   
   
   
   
   
	public function single()
	{
         // echo  APPPATH."third_party/class.uploader.php";
               include(APPPATH."third_party/class.uploader.php");
	        $uploader = new Uploader();
            $array=array();
			$image_array=array();
			$data = $uploader->upload($_FILES['files'], array(
				'limit' => 1, //Maximum Limit of files. {null, Number}
				'maxSize' => 20, //Maximum Size of files {null, Number(in MB's)}
				'extensions' => array('gif','jpg','jpeg','png','pdf','doc','docx','pdf'), //Whitelist for file extension. {null, Array(ex: array('jpg', 'png'))}
				'required' => false, //Minimum one file is required for upload {Boolean}
				'uploadDir' => './media/temp/', //Upload directory {String}
				'title' => time(), //New file name {null, String, Array} *please read documentation in README.md
				'removeFiles' => true, //Enable file exclusion {Boolean(extra for jQuery.filer), String($_POST field name containing json data with file names)}
				'perms' => null, //Uploaded file permisions {null, Number}
				'onCheck' => null, //A callback function name to be called by checking a file for errors (must return an array) | ($file) | Callback
				'onError' => null, //A callback function name to be called if an error occured (must return an array) | ($errors, $file) | Callback
				'onSuccess' => null, //A callback function name to be called if all files were successfully uploaded | ($files, $metas) | Callback
				'onUpload' => null, //A callback function name to be called if all files were successfully uploaded (must return an array) | ($file) | Callback
				'onComplete' => null, //A callback function name to be called when upload is complete | ($file) | Callback
				'onRemove' => 'remove_file' //A callback function name to be called by removing files (must return an array) | ($removed_files) | Callback
			));
			
			if($data['isComplete']){
			$files = $data['data'];

         	if(!empty($files['metas'])){
					foreach($files['metas'] as $file){
						
						
					   $path_gen = date("Y/m/d");  
			
						
						$created_date=$file['date'];
						$extension=$file['extension'];

						$file_with_url=$file['file'];
						$file_name=$file['name'];						



						$old_name=$file['old_name'];
						$replaced=$file['replaced'];
						$size=$file['size'];
						$size2=$file['size2'];
						$type=$file['type'][0];
						$type2=$file['type'][1];						
						
						
						$path_creation=$this->_image_path_creattion('media');						  
						
						  
						$path=$path_creation;  
						
							
								$width=120;  
								$height=186;  
								$source_image='media/temp/'.$file_name;
								$without_extension = pathinfo($source_image, PATHINFO_FILENAME);
								$thumbnail=$without_extension.'-'.$type.'-'.$width.'x'.$height.'.'.$extension;
								$new_image_path=$path_creation.'/'.$file_name;																	$img_array['new_image']=$source_image;/* 
								$img_array['image_library'] = 'gd2';
								$img_array['source_image'] =$source_image;
								$img_array['new_image']    = $path.'/'.$thumbnail;    
								$img_array['quality']='100%'; 			
								//$img_array['thumb_marker'] = '_resize';
								$img_array['create_thumb'] = false;
								$img_array['maintain_ratio'] = TRUE;
								$img_array['width']         = $width;
								$img_array['height']       = $height;
								$img_array['overwrite'] = FALSE; */

								//$this->load->library('image_lib', $config);
				/* 				$this->image_lib->clear();
								$this->image_lib->initialize($img_array);		
								$this->image_lib->resize();								 */
					
							$source_imagea=$path_creation.'/'.$file_name;
				

 							 

						     copy("media/temp/$file_name","$path_creation/$file_name"); 
						  
							 if(!empty($file_name)){
										$file = './media/temp/' .$file_name;
										if(file_exists($file)){
											unlink($file);
										}
									}						  
						  
                            echo '{"path": "'.$path_creation.'", "orginal": "'.$source_imagea.'","type": "'.$type.'","created_date": "'.$created_date.'","filename": "'.$old_name.'","extension":"'.$extension.'","date": "'.date("Y-m-d H:i:s").'"}';
						
						
						
					
							   

					
							
						} 
						
					
						
					}
					
					
					
				}
				
		


			if($data['hasErrors']){
				$errors = $data['errors'];
				if(!empty($errors)){
                         echo '{"error":"Filetype not allowed"}';			
				}

			} 
	}
	
	
	
	
	
	function remove_files(){
		$removed_files=$this->input->post('file');
		include(APPPATH."third_party/class.uploader.php");
        if(!empty($removed_files)){
            $file = './media/' . $removed_files;
            if(file_exists($file)){
                unlink($file);
            }
        }		
		
		
		
		
	}
    function remove_file($removed_files){
		include(APPPATH."third_party/class.uploader.php");
        foreach($removed_files as $key=>$value){
            $file = './hs-uplode/' . $value;
            if(file_exists($file)){
                unlink($file);
            }
        }
        
        return $removed_files;
    }

	
	

	
	
	
	
	
	
	
	
	
}
