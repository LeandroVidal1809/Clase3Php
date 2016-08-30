<?php 

	if(strlen($_POST['Mensaje'])<5)
		include "MenorACinco.html";
	else
		include "MayorACinco.html";
		

 ?>