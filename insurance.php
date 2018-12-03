<?php $title="Insurance"?>
<?php include ("healthcareheader.php") ?>

<h3>Insurance Billing Informaton</h3>
<table border = "1">
<tr>
<td>Patient ID</td><td>Insurance Carrier</td><td>Insurance Billing Address</td><td>Status</td> 
</tr>
<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'admin';
   $dbpass = 'yourpass';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "Health_Care_Database");
   
   if(! $conn ) {
      die("Could not connect: " . mysqli_error());
   }
   
   $sql = 'SELECT patient_id, carrier_name, carrier_address, carrier_status FROM Insurance_Carrier';
   $retval = mysqli_query($conn,$sql);
   
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQLI_BOTH)) {
      echo "<tr><td>{$row[0]}</td>".
         "<td>{$row[1]}</td>".
         "<td>{$row[2]}</td>".
         "<td>{$row[3]}</td>";
   }
   
   mysqli_free_result($retval);
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>
</table>


                                                                 
<?php include ("healthcarefooter.php") ?>
