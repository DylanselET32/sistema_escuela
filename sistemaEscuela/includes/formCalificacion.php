
<div class="card card-body">
    <form action="save_alumno.php" method="POST">
        <div class="form-group">
            <label>Alumno</label>
            <select name="id_alumno form-control">
                
            <?php
            $datos = getAllAlumno();
            while($row = mysqli_fetch_array($datos)){
                    //codigo HTML AHORA
                ?>
                      <option value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></option>
                <?php
            }
                
            ?>
            </select>
        </div>
        <div class="form-group">
            <label>Materia</label>
            <input type="text" name="materia" class="form-control"  placeholder="Matematica">
        </div>
        <div class="form-group">
            <label>N° Cuatrimestre</label>
            <input type="number" name="cuatrimestre"  min="1" max="2" class="form-control"  placeholder="2">
        </div>
        <div class="form-group">
            <label>Nota</label>
            <input type="number" name="nota" min="1" max="10"class="form-control"  placeholder="9">
        </div>
        <div class="form-group">
            <label>fecha</label>
            <input type="date" name="fecha" class="form-control"  >
        </div>
        <br>
        <input type="submit" name="save_calificacion" class="btn btn-success btn-block" value="GUARDAR">
    </form>
</div>