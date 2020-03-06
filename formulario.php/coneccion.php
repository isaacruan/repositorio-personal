<?php
  $usuario = "root";
  $contrasena = "" ; // en mi caso tengo contraseña pero en casa caso introducidla aquí.
  $servidor = "localhost";
  $basededatos = "aaaaaaa";
 
 $conexion = mysqli_connect( $servidor, $usuario, "" )
  mysqli_select_db($conexion,$basededatos)

 

 
  $Nombre=$_POST["nom"]
  $Apellidos=$_POST["Apellidos"]
  $Correo=$_POST["ema"]
  $Direccion=$_POST["direc"]
  $Fecha=$_POST["eda"]

  $ejecuta=mysqli_query($con,"insert into registros (Nombre,Apellidos,Correo,Direccion,Fecha) values ($Nombre,$Apellidos,$Direccion,$Correo,$Fecha)")
 ?>