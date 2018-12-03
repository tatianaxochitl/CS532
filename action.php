<?php $title="Information Confirmation"; ?>

<?php include  ("healthcareheader.php") ?>

<?php 
mysql_connect ('healthcareproj.cbo9k5pnt3ku.us-west-2.rds.amazonaws.com', 'admin', 'CS532health');

  foreach ($_POST as $key => $value) {
    $_POST[$key] = mysql_real_escape_string($value);
  }

  foreach ($_GET as $key => $value) {
    $_GET[$key] = mysql_real_escape_string($value);
  }
 ?>

 
 <?php 
 //this adds two last name and first name together
 $name = $firstname . $lastname; 
 
?> 

<?php
// this adds the address together 
$address = $street . $city . $state
?>

<h3> Please confirm that the information below is correct before proceeding <h3> 

<?php
print ("Your entered data is below.  Click <i>'back'</i> on your browser to make corrections, or proceed by clicking below.<P>
<table border=0 cellpadding=5>
<tr>
<td valign=top align=right><b>Physician ID:</b></td><td valign=top>$_POST[physicianID]</td></tr>
<tr>
<td valign=top align=right><b>Patient Name:</b></td><td valign=top>$name</td></tr>
<tr>
<td valign=top align=right><b>Patient ID:</b></td><td valign=top>$_POST[patientID]</td></tr>
<tr>
<td valign=top align=right><b>Patient Address:</b></td><td valign=top>$address</td></tr>
<tr>
<td valign=top align=right><b>Patient Phone Number:</b></td><td valign=top>$_POST[phone]></tr>
<tr>
<td valign=top align=right><b>Patient Date of Birth:</b></td><td valign=top>$_POST[dob]</td></tr>
<tr>
<td valign=top align=right><b>Patient Gender:</b></td><td valign=top>$_POST[gender]</td></tr>
</table>
");
?> 

<br><br>
<table border=0 align=center>
<tr><td>

<form action="action2.php" method=post> 
<input type=hidden name="physicianID" value="<?php echo $_POST[physicianID]; ?>">
<input type=hidden name="name" value="<?php echo $name; ?>"> 
<input type=hidden name="patientID" value="<?php echo $_POST[patientID]; ?>"> 
<input type=hidden name="address" value="<?php echo $address; ?>"> 
<input type=hidden name="phone" value="<?php echo $_POST[phone]; ?>"> 
<input type=hidden name="dob" value="<?php echo $_POST[dob]; ?>"> 
<input type=hidden name="gender" value="<?php echo $_POST[gender]; ?>">

<center>
<input type=submit value="This is correct.  Submit my data >>"> 
</center>
</form> 
</td>
</tr>
</table>

 <?php include("healthcarefooter.php") ; ?>
