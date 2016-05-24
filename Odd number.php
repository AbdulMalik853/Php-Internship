<?php
$n = 16;
function chknum($n)
{
	return ($n%2) ? true:false;
}
if (chknum ($n)==true)
{
	echo $n . "is odd";
}
else
echo $n . "is even";
?>