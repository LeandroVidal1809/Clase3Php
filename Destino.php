<?php 

	if(strlen($_POST['Mensaje'])<5)
		include "MenorACinco.php";
	else
		include "MayorACinco.php";
		

 ?>