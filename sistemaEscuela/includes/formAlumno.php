<?php include("header.php")?>
<div class="container p-4 ">
    <div class="card card-body">

        <?php
        $mensaje = isset($_SESSION['message']);
        if($mensaje){
            ?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']?>
            
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php 
        
        }
        ?>
        <h5>Agregar Alumno</h5>

        <form action="CRUD/save_alumno.php" method="POST">
            <div class="form-group">
                <label>Nombre </label>
                <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Martina" required>
            </div>
            <div class="form-group">
                <label>Apellido </label>
                <input type="text" name="apellido" class="form-control" id="exampleInputPassword1" placeholder="Feldman" required>
            </div>
            <div class="form-group">
                <label>DNI </label>
                <input type="number" name="dni"  min="0" class="form-control" id="exampleInputPassword1" placeholder="45266891" required>
            </div>
            <div class="form-group">
                <label>Año de cursada</label>
                <input type="number" name="año" min="1" max="7"class="form-control" id="exampleInputPassword1" placeholder="5" required>
            </div>
            <br>
            <input type="submit" name="save_alumno" class="btn btn-success btn-block" value="GUARDAR">
        </form>
    </div>
</div>