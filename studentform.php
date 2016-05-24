<?php
$name = $fname = $DOB = $Gender = $Department = $Eamil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = test_input($_POST["name"]);

$fname = test_input($_POST["fname"]);

$DOB = test_input($_POST["bday"]);

$Gender = test_input($_POST["gender"]);

$Department = test_input($_POST["department"]);

$Eamil = test_input($_POST["email"]);

}

function test_input($data) {

$data = trim($data);

$data = stripslashes($data);

$data = htmlspecialchars($data);

return $data;

}

?>

<?php

echo "<h2>Your Input:</h2>";

echo $name;

echo "<br>";

echo $fname;

echo "<br>";

echo $DOB;

echo "<br>";

echo $Gender;

echo "<br>";

echo $Department;

echo "<br>";

echo $Eamil;

?>