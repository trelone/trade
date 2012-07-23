<?php
/*
*	Functions taken from CI_Upload Class
*
*/


/*function createThumbnail( $fileSrc, $thumbDest, $thumb_width = 76, $thumb_height = 76 )
{
    $ext = strtolower( substr($fileSrc, strrpos($fileSrc, ".")) );

    if( $ext == ".png" )
    {
        $base_img = ImageCreateFromPNG($fileSrc);
    }
    else if( ($ext == ".jpeg") || ($ext == ".jpg") )
    {
        $base_img = ImageCreateFromJPEG($fileSrc);
    }

    // If the image is broken, skip it?
    if ( !$base_img)
        return false;


    // Get image sizes from the image object we just created
    $img_width = imagesx($base_img);
    $img_height = imagesy($base_img);


    // Work out which way it needs to be resized
    $img_width_per  = $thumb_width / $img_width;
    $img_height_per = $thumb_height / $img_height;

    if ($img_width_per <= $img_height_per)
    {
        $thumb_width = $thumb_width;
        $thumb_height = intval($img_height * $img_width_per);
    }
    else
    {
        $thumb_width = intval($img_width * $img_height_per);
        $thumb_height = $thumb_height;
    }

    $thumb_img = ImageCreateTrueColor($thumb_width, $thumb_height);

    ImageCopyResampled($thumb_img, $base_img, 0, 0, 0, 0, $thumb_width, $thumb_height, $img_width, $img_height);


    if( $ext == ".png" )
    {
        ImagePNG($thumb_img, $thumbDest);
    }
    else if( ($ext == ".jpeg") || ($ext == ".jpg") )
    {
        ImageJPEG($thumb_img, $thumbDest);
    }

    // Clean up our images
    ImageDestroy($base_img);
    ImageDestroy($thumb_img);

    return true;
}
*/

/*	function thumb_all($name_orig,$name_new,$destWidth=76,$destHeight=76){

		$src=$name_orig;
		$img_properties=getImageSize($src);
		$originalWidth=$img_properties[0];
		$originalHeight=$img_properties[1];
		/* now evaluate if it is X or Y that must fit above the destWidht or destHeight. Calculate a coeficient that redimention the chosen one and then place it correctly
		*/
/*		if(($originalWidth/$destWidth)<($originalHeight/$destHeight)){
				$coef=$destWidth/$originalWidth;
				$pos_x=0;
				$pos_y=-((($destWidth/$originalWidth)*$originalHeight-$destHeight)/5);

		}elseif(($originalWidth/$destWidth)>($originalHeight/$destHeight)){
			$coef=$destHeight/$originalHeight;
			$pos_x=-((($destHeight/$originalHeight)*$originalWidth-$destWidth)/2);
			$pos_y=0;
		}
		else{
			$coef=$destWidth/$originalWidth;
			$pos_x=0;
			$pos_y=0;

		}
		$destWidth_modif=$coef*$originalWidth;
		$destHeight_modif=$coef*$originalHeight;
		$destImage = imageCreateTrueColor($destWidth,$destHeight);
		switch ($img_properties[2]) {
				   case 1: //GIF
				   $srcImage = imageCreateFromGif($src);
				   break;
				   case 2: //JPEG
				   $srcImage = imageCreateFromJpeg($src);
				   break;
				   case 3: //PNG
				   $srcImage = imageCreateFromPng($src);
				   break;
				   default:
				   return false;
				   break;
			   }

		imagecopyresampled($destImage, $srcImage, $pos_x, $pos_y, 0,0,$destWidth_modif, $destHeight_modif, $originalWidth, $originalHeight);
		switch ($img_properties[2]) {
		   case 1: //GIF
		    imagegif($destImage, $name_new);
                    break;
		   case 2: //JPEG
		    imagejpeg($destImage, $name_new);
                    break;
		   case 3: //PNG
		     imagepng($destImage, $name_new);
                    break;
		   default:
		   return false;
		   break;
	    }

	}

*/
	
	function set_filename($path, $filename, $file_ext, $encrypt_name = FALSE)
	{
		if ($encrypt_name == TRUE)
		{		
			mt_srand();
			$filename = md5(uniqid(mt_rand())).$file_ext;	
		}
	
		if ( ! file_exists($path.$filename))
		{
			return $filename;
		}
	
		$filename = str_replace($file_ext, '', $filename);
		
		$new_filename = '';
		for ($i = 1; $i < 10000000; $i++)
		{			
			if ( ! file_exists($path.$filename.$i.$file_ext))
			{
				$new_filename = $filename.$i.$file_ext;
				break;
			}
		}

		if ($new_filename == '')
		{
			return FALSE;
		}
		else
		{
			return $new_filename;
		}
	}
	
	function prep_filename($filename) {
	   if (strpos($filename, '.') === FALSE) {
		  return $filename;
	   }
	   $parts = explode('.', $filename);
	   $ext = array_pop($parts);
	   $filename    = array_shift($parts);
	   foreach ($parts as $part) {
		  $filename .= '.'.$part;
	   }
	   $filename .= '.'.$ext;
	   return $filename;
	}
	
	function get_extension($filename) {
	   $x = explode('.', $filename);
	   return '.'.end($x);
	}

// Uploadify v1.6.2
// Copyright (C) 2009 by Ronnie Garcia
// Co-developed by Travis Nickels
if (!empty($_FILES)) {
	$path = $_SERVER['DOCUMENT_ROOT'] . $_REQUEST['folder'] . '/';
   $file_temp= $_FILES['Filedata']['tmp_name'];
   $file_ext = get_extension($_FILES['Filedata']['name']);
   $today=date("j-n-Y_|");
   $file_name = $_FILES['Filedata']['name'];
   $real_name = $file_name;  
   $newf_name = set_filename($path, $file_name, $file_ext);
   $file_size = round($_FILES['Filedata']['size']/1024, 2);
   $file_type = preg_replace("/^(.+?);.*$/", "\\1", $_FILES['Filedata']['type']);
   $file_type = strtolower($file_type);
   $targetFile =  str_replace('//','/',$path) . $newf_name;
   move_uploaded_file($file_temp,$targetFile);

   //thumb_all("../foto/".$newf_name, "../foto/".$newf_name,750,500);

   //thumb_all("../foto/".$newf_name, "../foto/thumbnails/thm_".$newf_name);
   //thumb_all("../foto/".$newf_name, "../foto/title/title_".$newf_name,200,200);
   $filearray = array();
   $filearray['file_name'] = $newf_name;
   $filearray['real_name'] = $real_name;
   $filearray['file_ext'] = $file_ext;
   $filearray['file_size'] = $file_size;
   $filearray['file_path'] = $targetFile;
   $filearray['file_temp'] = $file_temp;
   //$filearray['client_id'] = $client_id;

  // $json_array = json_encode($filearray);
  // echo $json_array;
    echo $newf_name;
}else{
	echo "1";	
}