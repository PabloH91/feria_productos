<!DOCTYPE HTML>
<html>
<head>
<title>Form Input Data</title>
<script type="text/javascript" src="includes/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
</head>

<body>

<?php 
try{
	  require_once'MiConeccion.php';
	  error_reporting(0);
}catch(Exception $e){
	  $error = $e->getMessage();	
}
	if (isset($error)) {
		echo "<p>$error</p>";
	} else {
		$sql = "SELECT * FROM recetas";
		$result = mysqli_query($db,$sql);	
		echo '<table width="54%" border="1" cellpadding="5">
		<th colspan="5">Editar Receta</th><tr>';
		//echo '<table width="100%" border="1" cellspacing="0" cellpadding="6">';
		$i = 0;
		while($mostrar = mysqli_fetch_assoc($result)){
			
			if ($i % 5 == 0) { 
            	echo '<tr><td><a href="?id=' . $mostrar['recetaID'] . '">' . $mostrar['nombreReceta'] . '</a>  [ <a href="?id=' . $mostrar['recetaID'] . '&accion=eliminar"> x </a> ]</td>';			
            } else {
            	echo '<td><a href="?id=' . $mostrar['recetaID'] . '">' . $mostrar['nombreReceta'] . '</a>  [ <a href="?id=' . $mostrar['recetaID'] . '&accion=eliminar"> x </a> ]</td>';
    		}
			$i++;
		}	echo '</tr></table>';
		  
	}

	if($_POST['submit']){
		$sql = "UPDATE recetas SET nombreReceta = '$_POST[nombreReceta]', descripcion = '$_POST[descripcion]', tipo = '$_POST[tipo]', tiempoPreparacion = '$_POST[tiempoPreparacion]', comensales = '$_POST[comensales]', dificultadID = '$_POST[dificultadID]', ingredientes = '$_POST[ingredientes]', preparacion = '$_POST[preparacion]', observaciones = '$_POST[observaciones]' WHERE recetaID = $_POST[recetaID]";
		$result = mysqli_query($db,$sql);
		
		if($result){
			echo 'Se actualizo la informacion correctamente';
		}else{
			echo mysqli_error($db);
		}
	}else{
		echo "<p>$error</p>";
	}
	
	if($_GET['id'] && $_GET['accion'] == 'eliminar'){
		$sql = "DELETE FROM recetas WHERE recetaID = $_GET[id] LIMIT 1";
		$result = mysqli_query($db,$sql);
		
		if($result){
			echo 'Se elimino la receta';
		}else{
			echo mysqli_error($db);
		}
	}
?>	

<?php	if($_GET['id'] && $_GET['accion'] != 'eliminar'){ 

	$sql = "SELECT * FROM recetas WHERE recetaID = $_GET[id] LIMIT 1";
	$result = mysqli_query($db,$sql);
	
	$info = mysqli_fetch_assoc($result);

?>
  <table border="1">
    <tr>
      <td align="center"><?php echo $info['nombreReceta']; ?></td>
    </tr>
    <tr>
      <td>
        <table>
          <form method="post" action="editarReceta.php?id=<?php echo $info['recetaID']; ?>">
          
          <tr>
            <td><label for="nombreReceta">Título:</label></td>
            <td><input type="text" class="form-control" id="nombreReceta" name="nombreReceta" size="40" value="<?php echo $info['nombreReceta'] ?>">
            </td>
          </tr>
          <tr>
            <td><label for="descripcion">Descripción:</label></td>
            <td><textarea name="descripcion" id="descripcion" class="form-control" ><?php echo $info['descripcion'] ?></textarea>
            </td>
          </tr>
          <tr>
            <td><label for="tipo">Tipo de Receta:</label></td>
            <td><select class="form-control" name="tipo" id="tipo">
            	<option><?php echo $info['tipo']; ?></option>
                <option>Panes, Muffins o Panqueques</option>
                <option>Dips, Salsas o Aderezos</option>
                <option>Plato Fuerte</option>
                <option>Acompañamiento</option>
                <option>Sopas, Consomés o Chilli</option>
                <option>Postres</option>
                <option>Bebidas</option>
                <option>Ensaladas</option>
                <option>Snacks</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="tiempoPreparacion">Tiempo de Preparacion:</label></td>
            <td><input type="text" class="form-control" id="tiempoPreparacion" name="tiempoPreparacion" value="<?php echo $info['tiempoPreparacion'] ?>">
            </td>
          </tr>
          <tr>
            <td><label for="comensales">comensales:</label></td>
            <td><input type="text" class="form-control" id="comensales" name="comensales" value="<?php echo $info['comensales'] ?>" >
            </td>
          </tr>
          <tr>
            <td><label for="dificultadID">Dificultad: </label></td>
            <td>
            	<label class="radio-inline">
                    <input type="radio" name="dificultadID" id="inlineRadio1" value="1" <?php if($info['dificultadID'] == 1){echo 'checked';} ?> > Fácil
                </label>
                <label class="radio-inline">
                    <input type="radio" name="dificultadID" id="inlineRadio2" value="2" <?php if($info['dificultadID'] == 2){echo 'checked';} ?> > Intermedio
                </label>
                <label class="radio-inline">
                    <input type="radio" name="dificultadID" id="inlineRadio3" value="3" <?php if($info['dificultadID'] == 3){echo 'checked';} ?> > Difícil
                </label>
            </td>
          </tr>
          <tr>
            <td><label for="ingredientes">Ingredientes:</label></td>
            <td><textarea name="ingredientes" id="ingredientes" class="form-control" ><?php echo $info['ingredientes'] ?></textarea>
            </td>
          </tr>
          <tr>
            <td><label for="preparacion">Preparación:</label></td>
            <td><textarea name="preparacion" id="preparacion" class="form-control" ><?php echo $info['preparacion'] ?></textarea>
            </td>
          </tr>
          <tr>
            <td><label for="descripcion">Observaciones:</label></td>
            <td><textarea name="observaciones" id="observaciones" class="form-control" ><?php echo $info['observaciones'] ?></textarea>
            </td>
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
<?php	} ?>
</body>

</html>