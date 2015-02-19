<!DOCTYPE HTML>
<html>
<head>
<title>Form Input Data</title>
</head>

<body>
<table border="1">
  <tr>
    <td align="center">Agregar una Receta</td>
  </tr>
  <tr>
    <td>
      <table>
        <form action="insertarRestaurante.php" method="post" enctype="multipart/form-data">
        
        <tr>
          <td><label>Seleccionar LOGO:</label></td>
          <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
        </tr>
        <tr>
          <td><label for="nombre">Nombre:</label></td>
          <td><input type="text" class="form-control" id="nombre" name="nombre" ></td>
        </tr>
        <tr>
          <td><label for="tel">Teléfono:</label></td>
          <td><input type="text" class="form-control" id="tel" name="tel" ></td>
        </tr>
        <tr>
          <td><label for="email">Correo Electrónico:</label></td>
          <td><input type="text" class="form-control" id="email" name="email" ></td>
        </tr>
        <tr>
          <td><label for="www">Página Web:</label></td>
          <td><input type="text" class="form-control" id="www" name="www" ></td>
        </tr>
        <tr>
          <td><label for="direccion">Dirección:</label></td>
          <td><textarea name="direccion" id="direccion"></textarea></td>
        </tr>
        <tr>
          <td><label for="mapa">Google Maps:</label></td>
          <td><input type="text" class="form-control" id="mapa" name="mapa" >
	      </td>
        </tr>
        <tr>
          <td><label for="facebook">Facebook: </label></td>
          <td><input type="text" class="form-control" id="facebook" name="facebook" ></td>
        </tr>
        <tr>
          <td><label for="twitter">Twitter:</label></td>
          <td><input type="text" class="form-control" id="twitter" name="twitter" ></td>
        </tr>
        <tr>
          <td><label for="gplus">Google Plus</label></td>
          <td><input type="text" class="form-control" id="gplus" name="gplus" ></td>
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