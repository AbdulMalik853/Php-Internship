<?php
for ($x = 1; $x <= 6; $x++)
{
	echo "<br/>";
for ($y =1; $y <=($x > 3 ? 6-$x : $x); $y++ )
{
Echo $y;
}
}
?>