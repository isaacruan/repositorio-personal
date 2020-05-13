<?php
$host ="localhost";
$user ="root";
$pass ="";
$db='consultaprueba';
$con= mysqli_connect($host,$user,$pass,$db)or die("Error al Conectar");
mysqli_select_db($con,$db)or die("No de pudo conectar con la base de datos ERROR 404 NOT FOUND");

$cons=$_POST["consulta"];
$r=$_POST["nrandom1"];
if ($cons == "sucursal"){
	$sql = "select nombre,primerapellido from cliente where sucursalcliente = '$r'";
    $consresult = mysqli_query($con, $sql);
    $h = mysqli_num_rows($consresult);
	if ($h==0){	
			if ($con->connect_errno) {
             // El commit falló!
            printf("Falló la conexión: %s\n", $con->connect_error);
                exit();
            }
            if (!$con->query("SET a=1")) {
                 printf("Código de error: %d\n", $con->errno);
            }
		}else{
		echo "<strong>Clientes de la sucursal:</strong> ", $r."<br><br>";
		while ( $row = mysqli_fetch_assoc($consresult)) {
            echo $row["nombre"]."<br>";
			echo $row["primerapellido"]."<br><br>";

		}
	}
    }else{
    echo "Error 404 NOT FOUND xd";
	}
//Cierra la conexion a la base de datos
mysqli_close($con);
?>