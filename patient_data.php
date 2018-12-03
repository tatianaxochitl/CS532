<?php $title="Patient Data"?>
<?php include ("healthcareheader.php") ?>

<h3>Patient Data</h3>
<table border = "1">
<tr>
<td>Patient ID</td><td>Name</td><td>Phone</td><td>Address</td><td>Date Of Birth</td><td>Gender</td><td>Physician ID</td>
</tr>
<?php
   $dbhost = 'localhost:3306';
   $dbuser = 'admin';
   $dbpass = 'yourpass';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "Health_Care_Database");
   
   if(! $conn ) {
      die("Could not connect: " . mysqli_error());
   }
   
   $sql = 'SELECT patient_id, patient_name, patient_phone, patient_address, patient_dob, patient_gender, physician_id FROM Electronic_Patient_Record';
   $retval = mysqli_query($conn,$sql);
   
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQLI_BOTH)) {
      echo "<tr><td>{$row[0]}</td>".
         "<td>{$row[1]}</td>".
         "<td>{$row[2]}</td>".
         "<td>{$row[3]}</td>".
         "<td>{$row[4]}</td>".
         "<td>{$row[5]}</td>".
         "<td>{$row[6]}</td>";
   }
   
   mysqli_free_result($retval);
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>
</table>


                                                                 
<?php include ("healthcarefooter.php") ?>
