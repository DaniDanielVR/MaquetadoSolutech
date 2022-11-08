<html>

<?php require("scripts/bd_st.php"); ?>

<head><div style="height: 5%; width: 1024px">
    <title>Compras SoluTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8"/>   
    <link rel="icon" type="image/png" href="img/LogoSolutech.png">
    <link rel="stylesheet" type="text/css" href="estilo_formulario.css">
    </div> 
</head>

<!--- Header --->
<body style="background-color: lightgray ; font-family: trebuchet MS; color: white;">
    <div style="background: #277487; height: 150px; opacity: 0.8;">
            <a href="InicioSolutech.html"><img src="img/LogoSolutech.png" title="SoluTech" style="height: 90px; position: relative; text-align: center; float: left; margin: 30px;"></a>
            </div>

    <div style="background: #3AACC8; height: 50px">
        <div style="width: 1500px; vertical-align: middle; display: inline-block">
            <p style="position: relative; text-align: center;"><b>SITIO DE COMPRAS SOLUTECH</b></p>
        </div>          
    </div>  

<!--- Contenido --->
<div align="center">
    <div style="height: 80%; width: 1024px; position: relative;  ">


<!--- Registro Usuario--->

    <br>
    <div style="border: 1px solid black; border-radius: 10px; font-size: 17px; color: black; background-color:lightgray;">

        <p><b>Formulario de compra</b></p>

        <form action="scripts/user_register.php" method="post" >

            <br>
            <label style="width: 130px; display: inline-block; text-align: right;">Nombre</label>
            <input name="nombre_cliente" type="text" required placeholder="60 caracteres máximo">

            <br>
            <label style="width: 130px; display: inline-block; text-align: right;">Documento:</label>
            <input name="documento_cliente" type="number" required placeholder="20 caracteres máximo">

            <br>
            <label style="width: 130px; display: inline-block; text-align: right;">Telefono:</label>
            <input name="telefono_cliente" type="number" required placeholder="20 caracteres máximo">

            <br>
            <label style="width: 130px; display: inline-block; text-align: right;">Email:</label>
            <input name="email_cliente" type="email" required placeholder="30 caracteres máximo">

            <br><br>
            <input name="submit" type="submit" value="Comprar" style="background-color: #277487; width: 150px; border-radius: 8px; color: white;">
        </form>

    </div>

    <br>


    <!--- Footer--->
 <br>
<div style="border-top bottom: 0px; width: 100%;" align="center">
        <div style="width: 1024px; ">
            <p style="font-size: 16px; color: white;"><a style="font-size: 16px; color: #FFC100" href="https://goo.gl/maps/Q3zCNL1ygNn5eBxn9" target="_blank">Pereira - Risaralda</a>
                <br>Telefono: 3103328236<br>WhatsApp: 3103328236<br><br>Email: <a style="font-size: 16px; color: #FFC100" href="https://www.gmail.com" target="_blank">solutech.per@gmail.com</a></p>
        </div>          
    </div>  

    </div>
</div>


</body>

</html>