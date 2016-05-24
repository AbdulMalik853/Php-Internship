<?php
echo "The time is " . date("h:i:sa");
echo "<br><br>";
//for the time zon we writ the following program in php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
echo"<br><br>";
//for date andtime
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>