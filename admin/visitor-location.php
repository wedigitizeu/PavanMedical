<?php
//error_reporting(0);
//session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta name="description" content="We Provide Best Website at Lowest Price for Small Business">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="#">
    <meta property="twitter:site" content="@#">
    <meta property="twitter:creator" content="@#">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sangameshwara Florist Mathikere">
    <meta property="og:title" content="Design & Developed By We Digitize You. Mob.No:Sagar Ganechary 8618696064">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="#">
    <meta property="og:description" content="We Provide Digital Marketing Services at lowest Price">
    <title>Visitor Location</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<!-----Table Exports---->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css"/>
 
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!------font awesome-------------->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<style>
	


	.scroll_on{
		
		
		overflow:scroll;
		width:100%;
	}

	</style>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
		<?php include_once('menu.php');?>
		
    <main class="app-content">
	
		  
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Visitor Location</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
					<div class="container-fluid">
 
<?php
$sel="SELECT * FROM `visitor` ORDER BY id DESC";
$exe=mysqli_query($conn,$sel);
if(mysqli_num_rows($exe)==0)
{
	echo "No Results to Show";
}
else
{
?>
  <div class="row">
	
    <div class="col-sm-1"></div>
    <div class="col-sm-10" >
	
		<div class="col-sm-12 scroll_on " >
			
			<br/><br/>
			<table class="table display nowrap" id="example" style="width:100%">
				<thead>
					  <tr>
  						<th>Sl.No</th>
  						<th>Date</th>
  						<th>Time</th>
  						<th>City</th>
              <th>Region</th>
  						<th>Country</th>
  						<th>Nearest Postal Place</th>

						 
					  </tr>
				</thead>
				<tbody>
				<?php
				
				$i=0;	
			while($data=mysqli_fetch_assoc($exe))
			{
		
			
			

?>
					 
					 <tr>
						<td><?php echo $i=$i+1;?></td>
						
						<td><?php echo $data['date'];?></td>
						<td><?php echo $data['time'];?></td>
						<td><?php echo $data['city'];?></td>
						<td><?php echo $data['region'];?></td>
            <td><?php echo $data['country'];?></td>
						<td>
        <a href="https://www.latlong.net/c/?lat=<?php echo $data['lat']?>&long=<?php echo $data['lon'];?>">
              <button class="btn btn-success btn-sm">See Location</button>
              </a>
            </td>
						

				    </tr>
			<?php
			
			}
			}
			?>
			
					  
					
		</tbody>
			</table>
</div>
</div>
</div>
				</div>
			
			</div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
			<?php include_once('../export_data/export_data_scripts.php') ?>
			
		
</html>