<?php 

include '../templates/header.php';
include '../model/Connect.php';

print($_GET['id']);
$nalumn = $_GET['id'];
$query = $bd->prepare("SELECT * from alumnos where n = ?");
$query->execute([$nalumn]);
$alumno = $query->fetch(PDO::FETCH_OBJ);

?>

<div class="container pt-3">
    <div class="card">
            <div class="card-header"> Ingrese los datos del alumno</div>
                <form action="../controllers/Actualizar.php" method="POST">
                 <div class="m-4">
                     <label>Nombre: </label>
                        <input class="form-control" type="text" placeholder="Ingresar nombre del alumno" value ="<?php echo $alumno->nombres ?>" name="nombre" required>
                    </div>
                    <div class="m-4">
                        <label>Apellido: </label>
                        <input class="form-control" type="text" placeholder="Ingresar apellido del alumno" value ="<?php echo $alumno->apellidos ?>" name="apellido" required>
                    </div><div class="m-4">
                        <label>Edad: </label>
                        <input class="form-control" type="text" placeholder="Ingresar edad del alumno" value ="<?php echo $alumno->edad ?>" name="edad" required>
                    </div><div class="m-4">
                        <label>Grado: </label>
                        <input class="form-control" type="text" placeholder="Ingresar grado del alumno" value ="<?php echo $alumno->grado ?>" name="grado" required>
                    </div>
                    <div class="m-4">
                        <label>Seccion: </label>
                        <input class="form-control" type="text" placeholder="Ingresar seccion del alumno" value ="<?php echo $alumno->seccion ?>" name="seccion" required>
                    </div>
                    <input type="hidden" name="n" value=<?php echo $alumno->n?>>
                    <input type="submit" class="btn btn-outline-primary m-2" value="Editar">
                    <a href="../index.php" class="btn btn-outline-danger">Cancelar</a>
                </form>
    
        </div>
</div>

<?php
include '../templates/footer.php';
?>