<?php 
include '../templates/header.php';
include '../model/Connect.php';
include '../controllers/Alumnos.php';
?>

<div class="container pt-5">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="table-warning">#</th>
                    <th scope="col" class="table-warning">Nombre</th>
                    <th scope="col" class="table-warning">Apellidos</th>
                    <th scope="col" class="table-warning">Edad</th>
                    <th scope="col" class="table-warning">Grado</th>
                    <th scope="col" class="table-warning">Seccion</th>
                    <th scope="col" class="table-warning">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php                 
                foreach($alumno as $dato){ 
                    //print_r($dato)              
                ?>
                <tr>
                    <th scope="row" class="table-warning"><?php echo $dato->n?></th>
                    <td class="table-secondary"><?php echo $dato->nombres?></td>
                    <td class="table-secondary"><?php echo $dato->apellidos?></td>
                    <td class="table-secondary"><?php echo $dato->edad?></td>
                    <td class="table-secondary"><?php echo $dato->grado?></td>
                    <td class="table-secondary"><?php echo $dato->seccion?></td>
                    <td class="table-secondary"><a href="./editar.php?id=<?php echo $dato->n ?>" class="btn btn-outline-success">Editar</a> <a href="../controllers/Eliminar.php" class="btn btn-outline-danger">Eliminar</a></td>
                </tr>  
                <?php 
                   } 
                ?>              
            </tbody>
        </table>
    </div>
    <a href="../index.php" class="btn btn-outline-danger">Volver</a>

<?php 
include '../templates/footer.php';
?>