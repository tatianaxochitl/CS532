<?php $title="Overview"?>
<?php include ("healthcareheader.php") ?>

<table>
<tr>
<td>Patient ID</td><td>Insurance Carrier</td><td>Insurance Billing Address</td><td>Status</td> 
<?php
   $dbhost = 'healthcareproj.cbo9k5pnt3ku.us-west-2.rds.amazonaws.com';
   $dbuser = 'admin';
   $dbpass = 'CS532health';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT patient_id, carrier_name, carrier_address, carrier_status FROM Insurance_Carrier';
   mysql_select_db('Health_Care_Database');
   $retval = mysql_query( $sql, $conn );
   
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
      echo "<tr><td>{$row[0]}</td>";
         "<td>{$row[1]}</td>";
         "<td>{$row[2]}</td>";
         "<td>{$row[3]}</td>";
   }
   
   mysql_free_result($retval);
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
</table>


                                                                 
<?php include ("healthcarefooter.php") ?>
