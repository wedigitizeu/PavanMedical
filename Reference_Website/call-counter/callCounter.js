$(document).ready(function()
	{

		var num=1;
		$("#callCounter").click(function()
			{
				
				$.post("callCounter.php",{num:num},function(data)
					{
						$("#result").html(data);

						window.location.href="tel:09844389749";

					});
			});
	});