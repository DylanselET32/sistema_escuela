<?php 
include("../../db.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    $eliminado=  deleteAlumnoById($id );
    echo $eliminado;
    if($eliminado){
        echo "se Elimino correctamente" ; 
        $_SESSION["message"] = 'Eliminado Exitosamente'; //el mensaje
        $_SESSION["message_type"] = 'success'; //El color del mensaje verde
    }else{
        echo "Error al guardar los datos" ;
        $_SESSION["message"] = 'Error al guardar los datos'; //el mensaje
        $_SESSION["message_type"] = 'danger'; //El color del mensaje verde
    }
   
    header("Location: ../tablaALumnos.php");
};
?>