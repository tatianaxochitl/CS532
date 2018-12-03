<?php 


$con = mysqli_connect ('localhost:3306', 'admin', 'yourpass', 'Health_Care_Database');

  foreach ($_POST as $key => $value) {
    $_POST[$key] = mysqli_real_escape_string($con,$value);
  }

  foreach ($_GET as $key => $value) {
    $_GET[$key] = mysqli_real_escape_string($con,$value);
  }

// the main insert query
mysqli_connect ('localhost:3306', 'admin', 'yourpass', 'Health_Care_Database');

$MainQuery = mysqli_query ($con, "INSERT INTO Electronic_Patient_Record
			(patient_id, patient_name, patient_phone, patient_address, patient_dob, patient_gender, physician_id) Values
			('$_POST[patientID]', '$_POST[name]', '$_POST[phone]', '$_POST[address]', '$_POST[dob]', '$_POST[gender]', '$_POST[physicianID]')");
$regid = mysqli_insert_id($con);			

header("Location: patient.php?patientID=$_POST[patientID]&fep=$fep");
?>
