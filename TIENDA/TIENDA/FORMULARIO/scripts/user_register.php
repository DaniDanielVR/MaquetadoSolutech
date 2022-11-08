<?php
	require('bd_st.php');
    
	if (isset($_POST['nombre_cliente'])) {    
		$nombre_cliente=$_POST['nombre_cliente'];
	   	$documento_cliente=$_POST['documento_cliente'];
		$telefono_cliente=$_POST['telefono_cliente'];
	    $email_cliente=$_POST['email_cliente'];  	    
              
    $insert = "INSERT INTO clientes_solutech (nombre_cliente, documento_cliente, telefono_cliente, email_cliente) 
    VALUES  ('$nombre_cliente', '$documento_cliente', '$telefono_cliente', '$email_cliente')"; 
        
    	if ($con->query($insert) === TRUE)
			{
			echo "<script type=text/javascript>";
			echo "alert('Compra realizada correctamente');";
			echo "window.location = 'http://localhost/MaquetadoSolutech/TIENDA/TiendaSolutech.php';"; 
			echo "</script>";
			}
	}
 else { echo "<script type=text/javascript>"; 
 			echo "alert('No se pudo realizar la compra');";
 			echo "window.location = 'http://localhost/MaquetadoSolutech/TIENDA/TiendaSolutech.php';"; 
			echo "</script>"; }
	mysqli_close($con); ?>