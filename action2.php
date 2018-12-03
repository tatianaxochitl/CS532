<?php 


mysql_connect ('healthcareproj.cbo9k5pnt3ku.us-west-2.rds.amazonaws.com', 'admin', 'CS532health');

  foreach ($_POST as $key => $value) {
    $_POST[$key] = mysql_real_escape_string($value);
  }

  foreach ($_GET as $key => $value) {
    $_GET[$key] = mysql_real_escape_string($value);
  }

// the main insert query
mysql_connect ('healthcareproj.cbo9k5pnt3ku.us-west-2.rds.amazonaws.com', 'admin', 'CS532health');
mysql_select_db (Health_Care_Database);

$MainQuery = mysql_query ("INSERT INTO Electronic__Patient_Record
			(patient_id, patient_name, patient_phone, patient_address, patient_dob, patient_gender, physician_id) Values
			('$_POST[patientID]', '$_POST[name]', '$_POST[phone]', '$_POST[address]', '$_POST[dob]', '$_POST[gender]', '$_POST[physicianID]')");
?>