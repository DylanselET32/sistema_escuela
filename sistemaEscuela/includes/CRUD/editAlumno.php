<?php include("../../db.php")?>
<?php include("../header.php")?>
<?php 
if(!isset($_GET["id"])){
    header("Location:../../index.php");
}

?>
<div class="container p-4 ">
    
    <div class="card card-body">
        <h5>Editar Alumno</h5>
        <?php $alumno = mysqli_fetch_array(getAlumnoById($_GET["id"]))?>

        <form action="update_alumno.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $alumno["id"]?>">
            <div class="form-group">
                <label>Nombre </label>
                <input value="<?php echo $alumno["nombre"]?>" type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Martina"  required>
            </div>
            <div class="form-group">
                <label>Apellido </label>
                <input value="<?php echo $alumno["apellido"]?>" type="text" name="apellido" class="form-control" id="exampleInputPassword1" placeholder="Feldman" required>
            </div>
            <div class="form-group">
                <label>DNI </label>
                <input value="<?php echo $alumno["dni"]?>" type="number" name="dni"  min="0" class="form-control" id="exampleInputPassword1" placeholder="45266891" required>
            </div>
            <div class="form-group">
                <label>Año de cursada</label>
                <input value="<?php echo $alumno["año"]?>" type="number" name="año" min="1" max="7"class="form-control" id="exampleInputPassword1" placeholder="5" required>
            </div>
            <br>
            <input type="submit" name="save_alumno" class="btn btn-success btn-block" value="GUARDAR">
        </form>
    </div>
</div>
<?php include("../footer.php")?>