<?php
include('public/head.php');
?>
<div class="contact-form " id="contact" >
<!-- IF MAIL SENT SUCCESSFULLY -->
	<!-- <div id="success">
		<div role="alert" class="alert alert-success">
			<strong>Thanks</strong> for using our template. Your message has been sent.
		</div>
	</div>
 -->
<!-- END IF MAIL SENT SUCCESSFULLY -->
<div class="row">
	
	<?php 
		$a="Book now for door Service For";
		$_SESSION["content"]=$a; 
	?>
	<div class="col-lg-6">
		
		
		<div class="form-field">
		<label style="float:left">Please select product</label>
			<select class="input-sm form-full" id="productName">
				<option value="">Plese Select </option>
				<option value="Washing Machine">Washing Machine</option>
				<option value="Refrigirator">Refrigirator</option>
			</select>
		
		</div>

		<div class="form-field" id="Washing_Machine">
			<label style="float:left">What type of Washing Machine do you have..?</label>
			<select class="input-sm form-full" 
			id="productType">
				<option value="">Please Select</option>
				<option value="Front Load">
					Front Load
				</option>
				<option value="Top Load">
					Top Load
				</option>
				<option value="Not sure" >
					I'm not sure
				</option>
				
			</select>
		
		</div>


		<div class="form-field" id="Refrigirator">
			<label style="float:left">What type of Refrigirator do you have..?</label>
		<select class="input-sm form-full" id="productType">
				<option value="">Please Select</option>
				<option value="Single Door">
					Single Door
				</option>
				<option value="Double Door">
					Double Door
				</option>
				<option value="Triple Door">
					Triple Door
				</option>
				<option value="Side by Side Door">
					Side by Side Door
				</option>
				<option value="Not sure">
					I'm not sure
				</option>
			</select>
		
		</div>

		<!--what service do you need--->

		<div class="form-field" id="Refrigirator">
			<label style="float:left">What service do you need..?</label>
		<select class="input-sm form-full" id="serviceType">
				<option value="">Please Select</option>
				<option value="Repair">
					Repair
				</option>
				<option value="Installation">
					Installation
				</option>
				<option value="Uninstallation">
					Uninstallation
				</option>
			</select>
		
		</div>
		
		<div class="form-field">
			<label style="float:left">Your Name</label>
			<input class="input-sm form-full" id="name" type="text"  placeholder="Your Name" required>
		</div>
		
		<div class="form-field">
			<label style="float:left">Email Id</label>
		<input class="input-sm form-full" id="email" type="text"  placeholder="Email" required >
		</div>
		
	</div>
		<div class="col-lg-6">
		


		

		<div class="form-field">
			<label style="float:left">Mobile Number</label>
		<input class="input-sm form-full" id="mobile" 
		type="text"  placeholder="Mobile Number" required>
		
		</div>
			<div class="form-field">
			
			<label style="float:left">Address</label>
			<textarea class="form-full" id="address" rows="7"  placeholder="Your Address
			" ></textarea>
			
			</div>

		</div>
			
		<div class="col-lg-12 mt-30">
			<button class="btn-text" type="button" id="book" name="button">Book</button>
			<p id="result"></p>
		</div>
</div>





<script >
	
	$('document').ready(function()
	{
		$("#Refrigirator").css("display","none");
		$("#Washing_Machine").css("display","none");
			
		$("#productName").change(function(){
			var productName=$("#productName").val();
			
			if(productName=="Washing Machine")
			{
				$("#Refrigirator").css("display","none");
				$("#Washing_Machine").css("display","block");
			}
			else if(productName=="Refrigirator")
			{
				$("#Refrigirator").css("display","block");
				$("#Washing_Machine").css("display","none");
			}
		});

		/*Booking */

		$("#book").click(function(){

			productName=$("#productName").val();
			productType=$("#productType").val();
			serviceType=$("#serviceType").val();
			name=$("#name").val();
			email=$("#email").val();
			mobile=$("#mobile").val();
			address=$("#address").val();

			$.post("scripts/insert-book_form.php",
			{
				productName:productName,
				productType:productType,
				serviceType:serviceType,
				name:name,
				email:email,
				mobile:mobile,
				address:address

			},
				function(data)
				{

					$("#result").html(data);
			});


		});
		
	})
</script>
</div>