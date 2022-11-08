<?php 
include("../../db.php");
if(isset($_POST['save_calificacion'])){
    echo 'guardando';
    $id = $_POST['id'];
    $id_alumno = $_POST['id_alumno'];
    $materia = $_POST['materia'];
    $cuatrimestre = $_POST['cuatrimestre'];
    $nota = $_POST['nota'];
    $fecha = $_POST['fecha'];
    $guardado = updateCalificacion($id,$id_alumno,$materia,$cuatrimestre,$nota,$fecha);
    if($guardado){
        echo "se guardo correctamente" ; 
        $_SESSION["message"] = 'Guardado Exitosamente'; //el mensaje
        $_SESSION["message_type"] = 'success'; //El color del mensaje verde
    }else{
        echo "Error al guardar los datos" ;
        $_SESSION["message"] = 'Error al guardar los datos'; //el mensaje
        $_SESSION["message_type"] = 'danger'; //El color del mensaje verde
    }
   
    header("Location:../tablaCalificaciones.php");
    
};
?>