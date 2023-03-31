<?php 

include '../model/Connect.php';

$query = $bd->query("SELECT * from alumnos");
$alumno = $query->fetchAll(PDO::FETCH_OBJ);

?>