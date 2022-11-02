<?php
 $hostnameDB = "localhost";
 $userDB = "root";
 $passDB = "";
 $nameDB = "sistemae";
 $conn = mysqli_connect($hostnameDB, $userDB, $passDB, $nameDB);
if(!$conn){
    echo "Error de conexion con la base de datos";
}

function addAlumno($nombre,$apellido,$dni,$año){
    global $conn;
    $query = "INSERT INTO alumno(nombre, apellido, dni, año) VALUES ('bbbb','aaaa',1234,1);";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return ("Error SQL" + $result);   
    }
    
    return $result;
}

function prueba(){
    global $conn;
    $query = "INSERT INTO alumno(nombre, apellido, dni, año) VALUES ('bbbbaaaaa','aaaabbbbb',1234,1);";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return ("Error SQL" + $result);   
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

function getCalificacionByid($dni){
    global $conn;
    $query = "select * from Alumno where dni = $dni";
    $result = mysqli_query($conn,$query);
    if(!$result){
        return "Error SQL" ;   
    }
    
    return $result;
}


?>