<?php 

if(empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["edad"]) || empty($_POST["grado"])|| empty($_POST["seccion"])){
    echo "Error, complete el formulario";
    exit();
};


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$grado = $_POST["grado"];
$seccion = $_POST["seccion"];

require '../model/Connect.php';
$query = $bd->prepare("INSERT INTO alumnos(nombres,apellidos,edad,grado,seccion) VALUES(?,?,?,?,?);");
$result = $query->execute([$nombre,$apellido,$edad,$grado,$seccion]);

if($result){
    header("Location: ../index.php");
} else{
    echo "Fallo en el registro";
}

?>