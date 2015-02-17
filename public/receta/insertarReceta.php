<?php 
if ($_POST['submit']){
	$nombreReceta = cleanData($_POST['nombreReceta']);
	$descripcion = cleanData($_POST['descripcion']);
	$tipo = cleanData($_POST['tipo']);
	$tiempoPreparacion = cleanData($_POST['tiempoPreparacion']);
	$comensales = cleanData($_POST['comensales']);
	$dif = cleanData($_POST['dif']);
	$ingredientes = cleanData($_POST['ingredientes']);
	$preparacion = cleanData($_POST['preparacion']);
	$observaciones = cleanData($_POST['observaciones']);
	$fecha = date("Y/m/d");
	addData($nombreReceta, $descripcion, $tipo, $tiempoPreparacion, $comensales, $dif, $ingredientes, $preparacion, $observaciones, $fecha);
	
}

function cleanData($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	$data = strip_tags($data);
	return $data;	
}

function addData($nombreReceta, $descripcion, $tipo, $tiempoPreparacion, $comensales, $dif, $ingredientes, $preparacion, $observaciones, $fecha)
{
	try{
	  require_once'MiConeccion.php';
    }catch(Exception $e){
	  $error = $e->getMessage();	
    }
    if (isset($error)) {
		echo "<p>$error</p>";
	} else {
		/*echo  "El valor insertado es: </br> " . $nombreReceta . ' </br>  ' . $descripcion . ' </br>  ' . $tipo . ' </br>  ' . $tiempoPreparacion . ' </br>  ' .  $comensales . ' </br>  ' .  $dif . ' </br>  ' . $ingredientes . ' </br>  ' . $preparacion . ' </br>  ' . $observaciones;*/
		$sql = "INSERT INTO recetas VALUES('', '$nombreReceta', '$descripcion', '$tipo', '$tiempoPreparacion', '$comensales', '$dif', '$ingredientes' , '$preparacion' ,'$observaciones' ,'$fecha' ,'1')";
		mysqli_query($db,$sql);
		echo "Se inserto correctamente la informacion en la base de datos. </br>";
		echo "El valor insertado es: " . $nombreReceta;
	}
}
?>