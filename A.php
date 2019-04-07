<?php 

class A
{
	var $b=5;//instance variable
	
	function __construct($name)
	{
		echo $name;
	}

}

$harpreet=new A("Harpreet");
$gaurav=new A("Gaurav");
echo $gaurav->b;

?>



