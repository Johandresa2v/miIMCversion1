<?php
include("conexion.php");
$con=conectar();


$Dni=$_POST['dni'];
$Nombres=$_POST['nombres'];
$Apellidos=$_POST['apellidos'];
$Altura=$_POST['altura'];
$Peso=$_POST['peso'];
$Sexo=$_POST['sexo'];
$Edad=$_POST['edad'];
$Grado=$_POST['grado'];
$Imc=$_POST['imc'];



$sql="INSERT INTO alumno VALUES('$Dni','$Nombres','$Apellidos','$Altura','$Peso','$Sexo','$Edad','$Grado','$Imc')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ADMIN.php");
    
}else {
}
?>