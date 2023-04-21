<?php 
    include("conexion.php");
    $con=conectar();
    $sql="SELECT *  FROM alumno";    
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Mis estilos de CSS-->
        <link rel="stylesheet" href="miestilo.css">
        <!--Iconos footer-->
        <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
        <!--Iconos Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


        <link href="css/style.css" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css"/>

    </head>
    <body>

    <div class="video">
        <video onloadedmetadata="this.muted=true" autoplay loop>
            <source src="../APPPRUEBAS/videos/WHITE.mp4">
        </video>
    </div>


    <header>
    <div class="containernav">
        <div class="navbar">
            <img src="../img/logo.gif" class="logo"><h2>MI IMC</h2> 
            <nav>
                <ul id="menuList">
                    <li><a href="../APPPRUEBAS/PRINCIPAL.html">Inicio</a></li>
                    <li><a href="">¿Soporte Técnico?</a></li>
                    <li><a href="">¿Como se usa?</a></li>
                    <li><a href="">Contáctenos</a></li>
                    <li><a href="../registro.html">Crear administrador</a></li>
                </ul>
            </nav>
            <img src="../imgapp/menu.png" class="menu-icon"  onclick="togglemenu()">
        </div>
    </div>   
    </header>

    







    <!--MODAL Una Ventana modal es una ventana Popup emergente que nos permite introducir datos de una manera mas interactiva-->
    <!-- Modal de REGISTRAR ALUMNO -->
    <div class="modal fade" id="ModalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Crear usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" class="mb-8" action="insertar.php" id="formulario" enctype="multipart/form-data">
                            <div class="modal-content">
                                
                                
                                    <input type="text" class="form-control mb-7" name="dni" placeholder="Dni" autocomplete="off">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres"autocomplete="off">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos"autocomplete="off">
                                    <input type="text" class="form-control mb-3" name="altura" placeholder="Altura"autocomplete="off">
                                    <input type="text" class="form-control mb-3" name="peso" placeholder="Peso"autocomplete="off">
                                    
                                    <select class="form-control mb-3" name="sexo">
                                    
                                        <option>Ninguno</option>
                                        <option>Femenino</option>
                                        <option>Masculino</option>
                                    </select>

                                    <input type="text" class="form-control mb-3" name="edad" placeholder="Edad"autocomplete="off">
                                    <input type="text" class="form-control mb-3" name="grado" placeholder="Grado"autocomplete="off">
                                    <input type="text" class="form-control mb-3" name="imc" placeholder="IMC"autocomplete="off">
                                    
                                    
                                
                            </div>
                            <div class="modal-footer">
                            <input type="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                    
            </div>
        </div>
    </div>



            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-2">
                    
                            <!--Botón modal -->

                            <div class="col-md-3">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#ModalUsuario" id="botonCrear">
                                        <h4>Ingresar alumno</h4> <img src="../imgapp/arrow.png">&nbsp;<i class="bi bi-plus-circle-fill"></i>
                                    </button>
                                </div>
                            </div>

                                
                        </div>

                        <div class="col-md-10" style="overflow-x: auto">
                            <table class="table table-striped mt-3" id="mitabla" style="width:auto">
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <!--<th>id_alumno</th>-->
                                        <th>DNI</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Altura</th>
                                        <th>Peso</th>
                                        <th>Sexo</th>
                                        <th>Edad</th>
                                        <th>IMC</th>
                                        <th>Grado</th>
                                        <th>1</th>
                                        <th>2</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                
                                                <th><?php  echo $row['dni']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['altura']?></th>
                                                <th><?php  echo $row['peso']?></th>
                                                <th><?php  echo $row['sexo']?></th>
                                                <th><?php  echo $row['edad']?></th>
                                                <th><?php  echo $row['grado']?></th>
                                                <th><?php  echo $row['imc']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['dni'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['dni'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>


    <!--TODOS LOS SCRIPT NECESARIOS PARA EL FUNCIONAMIENTO DE LA PAGINA-->
            <!--Bootstrap JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            <!--Jquery-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <!--DataTable-->
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
            
            <script>
                $(document).ready(function() {
                    $('#mitabla').DataTable( {
                        language: {
                            url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
                        }
                    } );
                } );
            </script>

            
    <!-- con este script hago una condicional que indica que 
    que si la altura es igual a 0px tomara una altura de 130 px  -->
    <script>

        var menuList = document.getElementById("menuList");

        menuList.style.maxHeight = "0px";

        function togglemenu(){

            if(menuList.style.maxHeight == "0px")
            {
                menuList.style.maxHeight = "130px";
            }
            else
            {
                menuList.style.maxHeight = "0px";
            }
        }

    </script>

    
    </body>
</html>