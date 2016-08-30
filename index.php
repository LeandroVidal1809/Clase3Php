<html>
<head>
	<title></title>
</head>
<body>
	<form Method="POST" action="Destino.php";>
 			<input type="text" name="Mensaje" >
 			<input type="submit">
 			
 			


	</form>	
</body>
</html>
<?php
		echo "Hola Php";
			echo "<br/>". "Muestro Variable REQUEST"."<br/>";
				var_dump($_REQUEST);
			echo "<br/>"."Muestro Variable Get"."<br/>";
				var_dump($_GET);
			echo "<br/>"."Muestro Variable Post"."<br/>";
				var_dump($_POST);
			echo "<br/>";
			
			IF(isset($_POST['Mensaje']))
					{echo $_POST['Mensaje'];}
					else
					{echo "Primer Ingreso";}


		

  ?>