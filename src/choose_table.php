<?php
include('session.php');

$Operation = $_GET["op"];

echo "<br><h3 id=\"resultTxt\">Choose $Operation Table</h3>";

$table_names = array("Administrator", "Appointment", "Department", "Doctor", "Employee", "Medication", "Nurse", "Occupies", "Patient", "Pharmacist", "Receptionist", "Record", "Room", "User");

// 

$Redirect = "interface.php?op=$Operation";
// $Redirect = "Appointments.html";

echo "<form id=\"resultTxt\" action=\"$Redirect\" method=\"post\">";

foreach ($table_names as $value) {
    echo "<input id=\"resultTxt\" type=\"radio\" name=\"Table\" value=\"$value\">$value<br>";
}

echo "<br><input type=\"submit\" value=\"Submit\">";
echo "</form>";

?>