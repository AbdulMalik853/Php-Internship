<?php
$To = $sub = $sms= "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$To = test_input($_POST["To"]);
	$sub = test_input($_POST["sub"]);
	$sms = test_input($_POST["sms"]);
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
echo $To;

 "<br>";

echo $sub;

 "<br>";

 echo$sms;

echo "<br>";
/*mail($To,$sub,$sms, 'from:abdulmalikroghani@gmail.com');
echo "<script> alert ('Email sent'think you!')</script>";*/
?>