<?php 

include '../model/Connect.php';

$n = $_POST['n'];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$grado = $_POST["grado"];
$seccion = $_POST["seccion"];

$query = $bd->prepare("UPDATE alumnos SET nombres = ?, apellidos =?, edad = ?, grado = ?, seccion =? WHERE n = ?");
$result = $query->execute([$nombre,$apellido,$edad,$grado,$seccion,$n]);

if($result){
    header("Location: ../index.php");
} else{
    echo "Fallo en la actualizacion de datos";
}

?>