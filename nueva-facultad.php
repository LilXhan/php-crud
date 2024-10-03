<h1>Nueva Facultad </h1>
<hr>
<form method="POST">
  <label>Nombre de la nueva Facultad: </label>
  <input type="text" name="nombre">
  <input type="submit" name="submit" value="Guardar">
</form>

<a href="/lp2/facultades.php">Lista de Facultades</a>

<?php 

require_once('conexion.php');

$udh = new Conexion();

$udh->abrir();

if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];

  $sql = "INSERT INTO facultad(nombre) values ('$nombre')";
  $resultado = $udh->exec($sql);

  if ($resultado === 1) {
    echo "Registro insertado";
  }  else {
    echo "Error";
  }
  
  $udh->cerrar();

}

?>