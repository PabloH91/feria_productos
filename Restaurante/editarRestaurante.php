<!DOCTYPE HTML>
<html>
<head>
<title>Form Input Data</title>
</head>

<body>

<?php 
try{
	  require_once'MiConeccion2.php';
	  error_reporting(0);
}catch(Exception $e){
	  $error = $e->getMessage();	
}
	if (isset($error)) {
		echo "<p>$error</p>";
	} else {
		if($_POST['submit']){
		$sql = "UPDATE restaurante SET nombre = '$_POST[nombre]', tel = '$_POST[tel]', email = '$_POST[email]', www = '$_POST[www]', direccion = '$_POST[direccion]', mapa = '$_POST[mapa]', facebook = '$_POST[facebook]', twitter = '$_POST[twitter]', gplus = '$_POST[gplus]' WHERE restauranteID = 1";
		$result = mysqli_query($db,$sql);
		
		if($result){
			echo 'Se actualizo la informacion correctamente';
		}else{
			echo mysqli_error($db);
		}
	}else{
		echo "<p>$error</p>";
	}	
				  
} 
/* 
	EL ID DEBE DE VENIR DE LA SESION
*/


	$sql = "SELECT * FROM restaurante WHERE restauranteID = 1";
	$result = mysqli_query($db,$sql);
	
	$info = mysqli_fetch_assoc($result);

?>
  <table border="1">
    <tr>
      <td align="center"><?php echo $info['nombre']; ?></td>
    </tr>
    <tr>
      <td>
        <table>
          <form method="post" action="editarRestaurante.php">
          
  		<tr>
          <td><label>Seleccionar LOGO:</label></td>
          <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
        </tr>
        <tr>
          <td><label for="nombre">Nombre:</label></td>
          <td><input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $info['nombre'] ?>" ></td>
        </tr>
        <tr>
          <td><label for="tel">Teléfono:</label></td>
          <td><input type="text" class="form-control" id="tel" name="tel" value="<?php echo $info['tel'] ?>" ></td>
        </tr>
        <tr>
          <td><label for="email">Correo Electrónico:</label></td>
          <td><input type="text" class="form-control" id="email" name="email" value="<?php echo $info['email'] ?>" ></td>
        </tr>
        <tr>
          <td><label for="www">Página Web:</label></td>
          <td><input type="text" class="form-control" id="www" name="www" value="<?php echo $info['www'] ?>" ></td>
        </tr>
        <tr>
          <td><label for="direccion">Dirección:</label></td>
          <td><textarea name="direccion" id="direccion"> <?php echo $info['direccion'] ?></textarea></td>
        </tr>
        <tr>
          <td><label for="mapa">Google Maps:</label></td>
          <td><input type="text" class="form-control" id="mapa" name="mapa"  value="<?php echo $info['mapa'] ?>">
	      </td>
        </tr>
        <tr>
          <td><label for="facebook">Facebook: </label></td>
          <td><input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $info['facebook'] ?>" ></td>
        </tr>
        <tr>
          <td><label for="twitter">Twitter:</label></td>
          <td><input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $info['twitter'] ?>" ></td>
        </tr>
        <tr>
          <td><label for="gplus">Google Plus</label></td>
          <td><input type="text" class="form-control" id="gplus" name="gplus" value="<?php echo $info['gplus'] ?>" ></td>
        </tr>
        <tr>
          <td></td>
            <td align="right"><input type="submit" name="submit" value="Actualizar">
            <input type="hidden" name="recetaID" value="<?php echo $info['recetaID'] ?>"></td>
          </tr>
          </table>
        </td>
      </tr>
  </table>

</body>

</html>