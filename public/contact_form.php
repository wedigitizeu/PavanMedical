<?php
include('public/head.php');
?>
<div class="contact-form " id="contact" >
<!-- IF MAIL SENT SUCCESSFULLY -->
<!-- 	<div id="success">
		<div role="alert" class="alert alert-success">
			<strong>Thanks</strong> for using our template. Your message has been sent.
		</div>
	</div> -->

<!-- END IF MAIL SENT SUCCESSFULLY -->
<div class="row">
	<div class="col-lg-6">
		<div class="form-field">
		<input class="input-sm form-full" id="name" type="text"  placeholder="Your Name">
		</div>
		
		<div class="form-field">
		<input class="input-sm form-full" id="email" type="text"  placeholder="Email" >
		</div>
		
		<div class="form-field">
		
		<input class="input-sm form-full" id="mobile" 
		type="text"  placeholder="Mobile Number">
		
		</div>
	</div>
		<div class="col-lg-6">
			<div class="form-field">
			
			<textarea class="form-full" id="message" rows="7"  placeholder="Your Message" ></textarea>
			
			</div>
		</div>
			
		<div class="col-lg-12 mt-30">
			<button class="btn-text" type="button" id="submit" name="button">Send Message</button>
			<p id="result"></p>
		
			<span>
				
				<h4 id="warning"></h4>

			</span>
		</div>
</div>

<script>
	
	$('document').ready(function()
	{
		$("#submit").click(function()
		{
		
	
	var emailReg= '^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$'; 
			mobileReg='^[0-9]{10}$';
			var name =$("#name").val();
			var email=$("#email").val();
			var mobile=$("#mobile").val();
			var message=$("#message").val();
			if(name=="")
			{
				$("#warning").html("Please Enter Your Name <i class='em em-disappointed'></i>");
			}

			else if(!email.match(emailReg))
			{
				$("#warning").html("Please Enter Valid Email Id <i class='em em-disappointed'></i>");
			}
			else if(!mobile.match(mobileReg))
			{
				$("#warning").html("Please Enter Valid Mobile Number <i class='em em-disappointed'></i>");
			}
			else if(message=="")
			{
				$("#warning").html("Message Field Should Not Empty <i class='em em-disappointed'></i>");
			}
else
{



	$("#warning").css("display","none")
	$.post("scripts/insert-contact_form.php",
	{
		name:name,
		email:email,
		mobile:mobile,
		message:message

	},function(data)
	{

		$("#result").html(data);

	
	});




		
}


});
	});

</script>
</div>