<?php include("../db.php")?>
<?php include("header.php")?>

<div class="container p-4 ">
    <div class="container-sm d-flex justify-content-between">
        <h3>Calificaciones</h3>
        <a href="formAlumno.php" type="button" id="masAlumnos" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Calificacion</a>
    </div>


    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Materia</th>
            <th scope="col">Cuatrimestre</th>
            <th scope="col">Nota</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $datos = getAllCalificacionesWithAlumnos();
            $cont = 0;
            while($row = mysqli_fetch_array($datos)){
                    //codigo HTML AHORA
                ?>
                    <tr>
                        <th scope="row"><?php echo ++$cont?></th>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['apellido']?></td>
                        <td><?php echo $row['materia']?></td>
                        <td><?php echo $row['cuatrimestre']?></td>
                        <td><?php echo $row['nota']?></td>
                        <td><?php echo $row['fecha']?></td>

                        <td>
                        <a type="button" href="CRUD/editAlumno.php?id=<?php echo $row['id']?>" class="btn btn-warning" name="edit" ><i class="fa-solid fa-pen-to-square"></i></a>
                        <a type="button" href="CRUD/deleteAlumno.php?id=<?php echo $row['id']?>" class="btn btn-danger" name="delete"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php
                
            }
                
            ?>
            
            
        </tbody>
    </table>



</div>




