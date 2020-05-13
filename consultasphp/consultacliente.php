<?php
$host ="localhost";
$user ="root";
$pass ="";
$db='consultaprueba';
$con=mysqli_connect($host,$user,$pass,$db)or die("Error al Conectar");
mysqli_select_db($con,$db)or die("No de pudo conectar con la base de datos ERROR 404 NOT FOUND");

$cons=$_POST["consulta"];
$r=$_POST["nrandom2"];
if ($cons == "cliente"){
	$sql = "select * from cliente where nombre = '$r'";
    $consresult = mysqli_query($con, $sql);
    
    if(!$con->consresult){
			printf("errormessage: %s\n" , $con->error);
	}else{$h = mysqli_num_rows($consresult);
	if ($h==0){
		
		}else{
			while ( $row = mysqli_fetch_assoc($consresult)) {
                echo "<strong>nombre:</strong> ";
                echo $row["nombre"]."<br><br>";
                echo "<strong>Primer Apellido:</strong> ";
				echo $row["primerapellido"]."<br><br>";
				echo "<strong>Segundo Apellido:</strong> ";
				echo $row["segundoapellido"]."<br><br>";
				echo "<strong>Edad:</strong> ";
				echo $row["edad"]."<br><br>";
				echo "<strong>Telefono:</strong> ";
				echo $row["celular"]."<br><br>";
				echo "<strong>Sucursal a la que asiste:</strong> ";
				echo $row["sucursalcliente"]."<br>";
		}
	}
}
}
//Cierra la conexion a la base de datos
mysqli_close($con);
?>