<?php 
include './templates/header.php';
include './model/Connect.php';

?>

<div class="container pt-3">
    <div class="card">
        <div class="card-header" id="input1"> Ingrese los datos del alumno</div>
            <form action="./controllers/Registrar.php" method="POST">
                <div class="m-4">
                    <label>Nombre: </label>
                    <input class="form-control" type="text" placeholder="Ingresar nombre del alumno" name="nombre" required>
                </div>
                <div class="m-4">
                    <label>Apellido: </label>
                    <input class="form-control" type="text" placeholder="Ingresar apellido del alumno" name="apellido" required>
                </div>
                <div class="m-4">
                    <label>Edad: </label>
                    <input class="form-control" type="text" placeholder="Ingresar edad del alumno" name="edad" required>
                </div>
                <div class="m-4">
                    <label>Grado: </label>
                    <input class="form-control" type="text" placeholder="Ingresar grado del alumno" name="grado" required>
                </div>
                <div class="m-4">
                    <label>Seccion: </label>
                    <input class="form-control" type="text" placeholder="Ingresar seccion del alumno" name="seccion" required>
                </div>
                <input type="submit" class="btn btn-outline-primary m-2" value="Registrar"><a href="./templates/table.php" class="btn btn-outline-secondary">Listado alumnos</a>
            </form>
    
    </div>
</div>
</div>

<?php 
include './templates/footer.php';
?>