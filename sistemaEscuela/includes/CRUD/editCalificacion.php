<?php include("../../db.php")?>
<?php include("../header.php")?>
<?php 
if(!isset($_GET["id"])){
    header("Location:../../index.php");
}

?>
<div class="container p-4 ">
    
    <div class="card card-body">
        <h5>Editar Calificacion</h5>
        <?php $calificacion = mysqli_fetch_array(getCalificacionWithAlumnoById($_GET["id"]))?>

        <form action="update_calificacion.php" method="POST">
             <input type="hidden" name="id" value="<?= $calificacion[0]?>">
             <input type="hidden" name="id_alumno" value="<?= $calificacion["id_alumno"]?>">
            <div class="form-group">
                <label>Alumno</label>
                <select name="id_alumno" disabled class="form-select">
                        <option value="<?= $calificacion['id'] ?>"><?=  "{$calificacion['nombre']} {$calificacion['apellido']}"?></option>
                </select>
            </div>
            <div class="form-group">
                <label>Materia</label>
                <input type="text" value="<?= $calificacion["materia"]?>" name="materia" class="form-control"  placeholder="Matematica">
            </div>
            <div class="form-group">
                <label>N° Cuatrimestre</label>
                <input type="number" value="<?= $calificacion["cuatrimestre"]?>" name="cuatrimestre"  min="1" max="2" class="form-control"  placeholder="2">
            </div>
            <div class="form-group">
                <label>Nota</label>
                <input type="number" value="<?= $calificacion["nota"]?>" name="nota" min="1" max="10"class="form-control"  placeholder="9">
            </div>
            <div class="form-group">
                <label>fecha</label>
                <input type="date" value="<?= $calificacion["fecha"]?>" name="fecha" class="form-control"  >
            </div>
            <br>

            <input type="submit" name="save_calificacion" class="btn btn-success btn-block" value="GUARDAR">
        </form>
    </div>
</div>
<?php include("../footer.php")?>