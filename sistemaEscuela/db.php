<?php
 $hostnameDB = "localhost";
 $userDB = "root";
 $passDB = "";
 $nameDB = "sistemae";
 $conn = mysqli_connect($hostnameDB, $userDB, $passDB, $nameDB);
if(!$conn){
    echo "Error de coneccion con la base de datos";
}

function addAlumno($nombre,$apellido,$dni,$año){
    global $conn;
    $query = "insert into Alumno(nombre,apellido,dni,año) values('$nombre','$apellido',$dni,$año);";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}
function deleteAlumnoById($id){
    global $conn;
    $query = "DELETE FROM `alumno` WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    return $result;
}

function updateAlumno($id,$nombre,$apellido,$dni,$año){
    global $conn;
    $query = "UPDATE `alumno` SET`nombre`='$nombre',`apellido`='$apellido',`dni`=$dni,`año`=$año WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}

function getAlumnoByDni($dni){
    global $conn;
    $query = "select * from Alumno where dni = $dni";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}

?>