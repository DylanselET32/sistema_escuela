
<?php include("db.php")?>
<?php include("includes/header.php")?>
<?php echo addAlumno('jorge','montero',12345678,3);?>

<?php prueba()?>

<h1>EMPIEZA</h1>
<div class="container p-4 ">
    
    <div class="row">
        <div class="col-md-6">
        <?php include("includes/formAlumno.php")?>
        </div>
        <div class="col-md-6">
        <?php include("includes/formCalificacion.php")?>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>


