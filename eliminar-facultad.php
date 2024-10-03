<h1>Eliminar Facultad</h1>
<hr>

<?php

require_once('conexion.php');

$udh = new Conexion();

$udh->abrir();

$id_facultad = $_GET['id'];
$sql = "SELECT * FROM facultad WHERE id=$id_facultad";

$result = $udh->query($sql);

foreach ($result as $facultad) {
  echo "<table>";
  echo "<tr>";
    echo "<td>Nombre: </td>";
    echo "<td>".$facultad["nombre"]."</td>";
  echo "</tr>";
  echo "</table>";
}
?>
<br>
<form method="POST">
  <input type="submit" name="submit" value="Eliminar"> 
</form>

<a href="/lp2/facultades.php">Lista de Facultades</a>
<br>
<?php 

if (isset($_POST['submit'])) {
  $sql = "DELETE FROM facultad WHERE id=$id_facultad";
  $resultado = $udh->exec($sql);
  if ($resultado === 1) {
    echo "Registro Eliminado";
  }  else {
    echo "Error";
  }
  
  $udh->cerrar();

}

?>
