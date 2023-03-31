<?php 

include '../model/Connect.php';

$n = $_GET['id'];
$query = $bd->prepare("DELETE FROM alumnos WHERE n =?");
$result = $query->execute([$n]);

if($result){
    header("Location: ../index.php");
} else{
    echo "Fallo en actualizacion de datos";
}
?>