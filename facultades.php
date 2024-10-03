<h1>Facultades</h1>
<hr>
<?php 

require_once('conexion.php');

$udh = new Conexion();

$udh->abrir();

$sql = 'SELECT * FROM facultad';
$resultados = $udh->query($sql);
?>
<table border="1">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach ($resultados as $facultad) {
        echo "<tr>";
          echo "<td>".$facultad["id"]."</td>";
          echo "<td>".$facultad["nombre"]."</td>";
          echo "<td>";
          echo "<a href="."/lp2/eliminar-facultad.php?id=".$facultad["id"].">Eliminar</a>";
          echo "|";
          echo "<a href="."/lp2/editar-facultad.php?id=".$facultad["id"].">Editar</a>";
          echo "</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
<br>
<a href="/lp2/nueva-facultad.php">Crear nueva Facultad</a>