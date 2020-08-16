<?php
include_once('../db/db.php');
date_default_timezone_set('Asia/Kolkata');


 echo $date=Date('d-m-Y');
 echo $time=date("h:i:s A");

$query="INSERT INTO `call_counter`(`date`, `time`) VALUES 
('$date','$time')";

if($obj->insertQuery($query))
{
  
}
else
{
	
}

?>