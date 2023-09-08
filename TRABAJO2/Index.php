<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<script>
    function confirmacion(){
        var respuesta = confirm("¿confirma que desea borrar el registro?");
    if(respuesta == true){
        return true;
    }else {
    return false;
    }
    }
</script>
<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">LISTADO DE ESTUDIANTES</h1>
    </div>
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    
                    <th scope="col">Nombre y Apellido</th>
                    <th scope="col">Edad </th>
                    <th scope="col">Email E</th>
                 

                    <th scope="col">Nombre D</th>
                    <th scope="col">Email D</th>
                    <th scope="col">Profesion</th>
                    
                    <th scope="col">Id Programa</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                include 'conexion.php';

                $sql = $conn->query("SELECT * FROM estudiantes
                INNER JOIN programa ON estudiantes.`programaId` = programa.Idprograma
                INNER JOIN docente ON estudiantes.`docenteId` = docente.Iddocente");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr>
                        <th scope="row"><?php echo $resultado['nombreapellido']?></th>
                        <th scope="row"><?php echo $resultado['edad']?></th>
                        <th scope="row"><?php echo $resultado['emailE']?></th>

                        <th scope="row"><?php echo $resultado['nombre']?></th>
                        <th scope="row"><?php echo $resultado['email']?></th>
                        <th scope="row"><?php echo $resultado['profesion']?></th>

                        <th scope="row"><?php echo $resultado['Idprograma']?></th>
                       
                        <th scope="row"><?php echo $resultado['duracion']?></th>

                       
                        <th>
                            <a href="EditarForm.php?Id=<?php echo $resultado['Idestudiante']?>" class="btn btn-warning">Editar</a>
                            <a href="EliminarDatos.php?Id=<?php echo $resultado['Idestudiante']?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
        <div class="container">
            <a href="AgregarForm.php" class="btn btn-success">Agregar Producto</a>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>