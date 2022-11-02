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
                <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
          <?php
          
      }
          
      ?>
    
    
  </tbody>
</table>
