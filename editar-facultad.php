<h1>Editar Facultad</h1>
<hr>
<?php

require_once('conexion.php');

$udh = new Conexion();

$udh->abrir();

$id_facultad = $_GET['id'];
$sql = "SELECT * FROM facultad WHERE id=$id_facultad";

$result = $udh->query($sql);

foreach ($result as $facultad) {
  ?>
  <form method="POST">
    <label>Editar la Facultad: </label>
    <input type="text" name="nombre" value="<?php echo $facultad['nombre'] ?>">
    <input type="submit" name="submit" value="Editar">
  </form>
  <?php
}
?>


<?php 

if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  
  $sql = "UPDATE facultad SET nombre='$nombre' WHERE id=$id_facultad";
  $resultado = $udh->exec($sql);
  
  if ($resultado === 1) {
    echo "Registro editado";
  }  else {
    echo "Error";
  }
  
  $udh->cerrar();
  
}

?>
<a href="/lp2/facultades.php">Lista de Facultades</a>