<?php
include_once('../db/db.php');

?>

<?php

 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $msg=$_POST['message'];
 $date=Date('d-m-Y');
$query="INSERT INTO `enquiry`(`date`, `name`, `email`, `mobile`, `msg`) 
VALUES ('$date','$name','$email','$mobile','$msg')";
		if($obj->insertQuery($query))
		{
		?>
			<script >
				$("document").ready(function(){

					$("#tq").show(2000);
					$("#msg").show(3000);

						

				});
			</script>

			<h3 id="tq" style="display:none;">Thank you for getting in touch!</h3>
			<h6 id="msg" style="display:none;">
				We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the mobile number listed below to talk to one of our staff members. Otherwise, we will reply by call as soon as possible.<br>
				<br><b>Mr. Santosh Kumar <br> 9886653237 <br> 9731878389</b>

			</h6>

		<?php		
		}
		else
		{
			echo "<h1>Error</h1>";
		}

?>
