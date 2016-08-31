
<html>
<head>
	 <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/styleButton.css">
	 <link rel="stylesheet" href="css/Estilo.css">
	<title>SUPERICIE</title>
</head>
<body>
	<div class="login-page">


<?php 
$Superficie=0;
$Superficie= $_POST['Alto'] * $_POST['Ancho'];
 echo"LA SUPERFICIE ES: " .  $Superficie;
 ?>
 <br>
 <a  href="index.html">  <button>Regresar</button></a>
</div>
</body>
</html>
