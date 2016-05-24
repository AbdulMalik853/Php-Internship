<?php
$t = date("H");
if ($t > "10")
{
	echo "have agood day!";
}
	elseif ($t < "20")
	{ 
		echo "have a good morning!";
    }
    else
    {
echo "have a good night!";
    }
    ?>