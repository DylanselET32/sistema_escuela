<?php 
include("db.php");
if(isset($_POST['save_alumno'])){
    echo 'guardando';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $año = $_POST['año'];
    $guardado = addAlumno($nombre, $apellido, $dni, $año);
    if($guardado){
        echo "se guardo correctamente" + $guardado;
    }else{
        echo "Error al guardar los datos" + $guardado;
    }

    
};
?>