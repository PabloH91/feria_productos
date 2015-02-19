<?php 
if ($_POST['submit']){
	$nombre = cleanData($_POST['nombre']);
	$tel = cleanData($_POST['tel']);
	$email = cleanData($_POST['email']);
	$www = cleanData($_POST['www']);
	$direccion = cleanData($_POST['direccion']);
	$mapa = cleanData($_POST['mapa']);
	$facebook = cleanData($_POST['facebook']);
	$twitter = cleanData($_POST['twitter']);
	$gplus = cleanData($_POST['gplus']);
	$fecha = date("Y/m/d");
	addData($nombre, $tel, $email, $www, $direccion, $mapa, $facebook, $twitter, $gplus, $fecha);
}

function cleanData($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	$data = strip_tags($data);
	return $data;	
}

function addData($nombre, $tel, $email, $www, $direccion, $mapa, $facebook, $twitter, $gplus, $fecha)
{
	try{
	  require_once'MiConeccion2.php';
	  error_reporting(0);
    }catch(Exception $e){
	  $error = $e->getMessage();	
    }
    if (isset($error)) {
		echo "<p>$error</p>";
	} else {
		echo  "El valor insertado es: </br> " . $nombre . ' </br>  ' . $tel . ' </br>  ' . $email . ' </br>  ' . $www . ' </br>  ' .  $direccion . ' </br>  ' .  $mapa . ' </br>  ' . $facebook . ' </br>  ' . $twitter . ' </br>  ' . $gplus . $fecha;
		//$sql = "INSERT INTO restaurante VALUES('', '$nombre', '$tel', '$email', '$www', '$direccion', '$mapa', '$facebook' , '$twitter' ,'$gplus' ,'$fecha')";
		mysqli_query($db,$sql);
		echo "Se inserto correctamente la informacion en la base de datos. </br>";
				
		$target_dir = "logo_images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Este archivo ya existe.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Lo sentimos pero la imagen es demaciado grande.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Unicamente archivos tipo JPG, JPEG, PNG & GIF son permitidos.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " se ha subido.";
			} else {
				echo "Hubo un error a la hora de subir el archivo.";
    }
}
		
		
		
	}
}
?>