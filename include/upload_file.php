<?php
ini_set('display_errors', '0');    
error_reporting(none); 
if(empty($_FILES) && empty($_POST) && isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) == 'post'){ //catch file overload error...
        $postMax = ini_get('post_max_size'); //grab the size limits...
        echo "<p style=\"color: #F00;\">files larger than 5 Mb not allowed"; // echo out error and solutions...
        
}
else{
$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 5388608)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo 'error';
    }
  else
    {
   $a=1;

    if (file_exists("uploads/photo/" . $_FILES["file"]["name"]))
      {
      $a++;
      }
    
	  
	  $fileName = rand(1,100000).rand(1,9999999999).'.'. pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/photo/" . $fileName);
    
      
    }
  }

//--------------------------------------------Resume upload-------------------------------------------

$allowedExts = array("txt", "doc","docx","rtl", "pdf");
$extension = end(explode(".", $_FILES["file1"]["name"]));
if ((($_FILES["file1"]["type"] == "text/plain")
|| ($_FILES["file1"]["type"] == "application/msword")
|| ($_FILES["file1"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
|| ($_FILES["file1"]["type"] == "text/rtl")
|| ($_FILES["file1"]["type"] == "application/pdf")
&& ($_FILES["file1"]["size"] < 8388608))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file1"]["error"] > 0)
    {
    
    }
  else
    {
   
	$b=1;
    if (file_exists("uploads/resume/" . $_FILES["file1"]["name"]))
      {
     $b++;
      }
    
	  $imageName = rand(1,100000).rand(1,9999999999).'.'. pathinfo($_FILES['file1']['name'],PATHINFO_EXTENSION);
      move_uploaded_file($_FILES["file1"]["tmp_name"],
      "uploads/resume/" . $imageName);
     
      
    }
  }
}
?>

