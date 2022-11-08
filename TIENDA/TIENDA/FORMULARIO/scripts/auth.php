<?php
    session_start();
    if(!isset($_SESSION["owasp_user_documento"])){
    header("Location: index.php");
	exit(); }
    $owasp_user_documento=$_SESSION['owasp_user_documento'];
       
    require("scripts/bd.php");
    $consultaPrivileg = "SELECT owasp_user_documento, owasp_user_nombre, owasp_user_rol, owasp_user_estado FROM owasp_user WHERE owasp_user_documento='$owasp_user_documento'";
	   if ($result = mysqli_query($con, $consultaPrivileg)) {
	   while ($row = mysqli_fetch_assoc($result)) {
           $owasp_user_rol=$row['owasp_user_rol'];           
           $owasp_user_nombre=$row['owasp_user_nombre'];
           $owasp_user_estado=$row['owasp_user_estado'];
        }}
    
    //Tiempo de expiracion de sesion
    $tiempo = (isset($_SESSION['time'])) ? $_SESSION['time'] : strtotime(date("Y-m-d H:i:s")); 
    $actual =  strtotime(date("Y-m-d H:i:s")); 
    (($actual-$tiempo) >= 2400) ? header("Location: logout.php") : $_SESSION['time'] =$actual;

    
?>
