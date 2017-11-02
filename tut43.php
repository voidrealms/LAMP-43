<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

//clones

class person
{
	public $Name;
}

function DoSomething($Var)
{
	$b = clone $Var;
	
	$b->Name = "Heather";
	
	echo $b->Name . " is the clones name<br>";
}

$a = new person();
$a->Name = "Bryan";

echo $a->Name . "<br>";

DoSomething($a);

echo $a->Name . "<br>";



?>

</body>
</html>
