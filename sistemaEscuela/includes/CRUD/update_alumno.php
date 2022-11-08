<?php 
include("../../db.php");
if(isset($_POST['save_alumno'])){
    echo 'guardando';
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $año = $_POST['año'];
    $guardado = updateAlumno($id,$nombre, $apellido, $dni, $año);
    if($guardado){
        echo "se guardo correctamente" ; 
        $_SESSION["message"] = 'Guardado Exitosamente'; //el mensaje
        $_SESSION["message_type"] = 'success'; //El color del mensaje verde
    }else{
        echo "Error al guardar los datos" ;
        $_SESSION["message"] = 'Error al guardar los datos'; //el mensaje
        $_SESSION["message_type"] = 'danger'; //El color del mensaje verde
    }
   
    header("Location:../tablaAlumnos.php");
    
};
?>