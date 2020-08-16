<?php
include_once('../db/db.php');
?>
<?php
 
 $productName=$_POST['productName'];
  $productType=$_POST['productType'];
  $serviceType=$_POST['serviceType'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $address=$_POST['address'];
  $date=Date('d-m-Y');
  $book_time='';
  $status=0;

$query="INSERT INTO `booking`(`date`, `productType`, `productName`, `serviceType`, `name`, `email`, `mobile`, `address`, `book_time`, `status`) VALUES 
(
	'$date',
	'$productType',
	'$productName',
	'$serviceType',
	'$name',
	'$email',
	'$mobile',
	'$address',
	'$book_time',
	'$status'
)";
if($obj->insertQuery($query))
{
	?>
	
	<h2>
		<br>
		
		Thank you for booking with us!
		<i class="em em-smiley"></i>

	</h2>
<?php

}
else
{
	echo "error";
}


?>