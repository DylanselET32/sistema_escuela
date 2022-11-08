<?php
 $hostnameDB = "localhost";
 $userDB = "root";
 $passDB = "";
 $nameDB = "sistemae";
 $conn = mysqli_connect($hostnameDB, $userDB, $passDB, $nameDB);
if(!$conn){
    echo "Error de conexion con la base de datos";
}

//inciamos una sesion 

session_start();



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
function getAlumnoById($id){
    global $conn;
    $query = "select * from Alumno where id = $id";
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

function getAllAlumno(){
    global $conn;
    $query = "select * from Alumno";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}

function addCalificacion($id_alumno,$materia,$cuatrimestre,$nota,$fecha){
    global $conn;
    $query = "insert into Calificacion(id_alumno,materia,cuatrimestre,nota,fecha) values($id_alumno,'$materia',$cuatrimestre,$nota,'$fecha');";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}
function deleteCalificacionById($id){
    global $conn;
    $query = "DELETE FROM `alumno` WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    return $result;
}

function updateCalificacion($id,$nombre,$apellido,$dni,$año){
    global $conn;
    $query = "UPDATE `alumno` SET`nombre`='$nombre',`apellido`='$apellido',`dni`=$dni,`año`=$año WHERE id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}
function getAllCalificaciones(){
    global $conn;
    $query = "select * from calificacion;";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}
function getCalificacionByid($id){
    global $conn;
    $query = "select * from calificacion where id = $id";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}

function getAllCalificacionesWithAlumnos(){
    global $conn;
    $query = "SELECT * FROM alumno as a INNER JOIN calificacion as c ON a.id = c.id_alumno;";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}
?>