<?php
	$con = mysqli_connect("localhost","owasp", "0w4sp2022", "bd_solutech");
	if (mysqli_connect_errno())
	{
  	echo "Error al conectar con la base de datos MySQL: " . mysqli_connect_error();
	}
?>