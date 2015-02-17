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
<table border="1">
  <tr>
    <td align="center">Agregar una Receta</td>
  </tr>
  <tr>
    <td>
      <table>
        <form action="insertarReceta.php" method="post" enctype="multipart/form-data">
        
        <tr>
          <td><label for="nombreReceta">Título:</label></td>
          <td><input type="text" class="form-control" id="nombreReceta" name="nombreReceta" size="40" >
          </td>
        </tr>
        <tr>
          <td><label for="descripcion">Descripción:</label></td>
          <td><textarea name="descripcion" id="descripcion" class="form-control"></textarea>
          </td>
        </tr>
        <tr>
          <td><label for="tipo">Tipo de Receta:</label></td>
          <td><select class="form-control" name="tipo" id="tipo">
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
          <td><input type="text" class="form-control" id="tiempoPreparacion" name="tiempoPreparacion" >
          </td>
        </tr>
        <tr>
          <td><label for="comensales">comensales:</label></td>
          <td><input type="text" class="form-control" id="comensales" name="comensales" >
	      </td>
        </tr>
        <tr>
          <td><label for="dif">Dificultad: </label></td>
          <td><label class="radio-inline">
                  <input type="radio" name="dif" id="inlineRadio1" value="1"> Fácil
              </label>
              <label class="radio-inline">
                  <input type="radio" name="dif" id="inlineRadio2" value="2"> Intermedio
              </label>
              <label class="radio-inline">
                  <input type="radio" name="dif" id="inlineRadio3" value="3"> Difícil
              </label>
	      </td>
        </tr>
        <tr>
          <td><label for="ingredientes">Ingredientes:</label></td>
          <td><textarea name="ingredientes" id="ingredientes" class="form-control"></textarea>
          </td>
        </tr>
        <tr>
          <td><label for="preparacion">Preparación:</label></td>
          <td><textarea name="preparacion" id="preparacion" class="form-control"></textarea>
          </td>
        </tr>
        <tr>
          <td><label for="descripcion">Observaciones:</label></td>
          <td><textarea name="observaciones" id="observaciones" class="form-control"></textarea>
          </td>
        </tr>
        <tr>
          <td><label>Seleccionar Imagen:</label></td>
          <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit"
          name="submit" value="Agregar"></td>
        </tr>
        </form>
      </table>
    </td>
    </tr>
</table>

</body>

</html>