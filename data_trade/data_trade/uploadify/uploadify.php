<?php
/*
*	Functions taken from CI_Upload Class
*
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
   
   $file_temp = $_FILES['Filedata']['tmp_name'];
   $file_ext = get_extension($_FILES['Filedata']['name']);
   $today=date("j-n-Y_|");
  // $file_name = date("j-n-y_").$file_ext;         
   $real_name = $file_name;
   $newf_name = set_filename($path, $file_name, $file_ext);
   $file_size = round($_FILES['Filedata']['size']/1024, 2);
   $file_type = preg_replace("/^(.+?);.*$/", "\\1", $_FILES['Filedata']['type']);
   $file_type = strtolower($file_type);
   $targetFile =  str_replace('//','/',$path) . $newf_name;
   move_uploaded_file($file_temp,$targetFile);
   
	/*$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'password';

	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die                      ('Error connecting to mysql');

	$dbname = 'petstore';
	mysql_select_db($dbname);
	*/
   $filearray = array();
   $filearray['file_name'] = $newf_name;
   $filearray['real_name'] = $real_name;
   $filearray['file_ext'] = $file_ext;
   $filearray['file_size'] = $file_size;
   $filearray['file_path'] = $targetFile;
   $filearray['file_temp'] = $file_temp;
   //$filearray['client_id'] = $client_id;

   $json_array = json_encode($filearray);
   echo $json_array;
}else{
	echo "1";	
}