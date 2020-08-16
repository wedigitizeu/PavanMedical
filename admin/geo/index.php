<?php
include_once('../../db/db.php');

error_reporting(0);
require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();
$geoplugin->locate();

 $ip=$geoplugin->ip;
 $city=$geoplugin->city;
 $region=$geoplugin->region;

 $country=$geoplugin->countryName;
 $lat=$geoplugin->latitude;
 $lon=$geoplugin->longitude;
 $date=Date('d-m-Y');
 $time=date("h:i:s A");


$query="INSERT INTO `visitor`(`date`, `time`, `ip`, `city`, `region`, `country`, `lat`, `lon`) VALUES 
('$date','$time','$ip','$city','$region','$country','$lat','$lon')";

if($obj->insertQuery($query))
{
  echo "<script>
  	alert('Inserted');
  </script>";
}
else
{
	echo "error";
}







?>