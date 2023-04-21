<?php

include("conexion.php");
$con=conectar();

$Dni=$_GET['id'];

$sql="DELETE FROM alumno  WHERE dni='$Dni'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ADMIN.php");
    }
?>
