
<?php include("../db.php")?>
<?php include("header.php")?>

<div class="container p-4 ">
    <div class="container-sm d-flex justify-content-between">
        <h3>Alumnos</h3>
        <a href="formAlumno.php" type="button" id="masAlumnos" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Alumnos</a>
    </div>


    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">DNI</th>
      <th scope="col">AÑO</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $datos = getAllAlumno();
      $cont = 0;
      while($row = mysqli_fetch_array($datos)){
              //codigo HTML AHORA
          ?>
            <tr>
                <th scope="row"><?php echo ++$cont?></th>
                <td><?php echo $row['nombre']?></td>
                <td><?php echo $row['apellido']?></td>
                <td><?php echo $row['dni']?></td>
                <td><?php echo $row[4]?></td>

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



