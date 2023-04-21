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

$sql="UPDATE alumno SET dni='$Dni',nombres='$Nombres',apellidos='$Apellidos',altura='$Altura',peso='$Peso',sexo='$Sexo',edad='$Edad',grado='$Grado',imc='$Imc' WHERE dni='$Dni'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ADMIN.php");
    }
?>