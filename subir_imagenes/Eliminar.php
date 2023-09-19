<?php
    include 'Backend/conexion.php';

    // Obtén y sanitiza el valor de 'cod_imagen'
    $id = mysqli_real_escape_string($conn, $_REQUEST['cod_imagen']);

    // Construye la consulta SQL para eliminar la imagen
    $sql = "DELETE FROM imagenes WHERE cod_imagen ='$id'";

    // Ejecuta la consulta
    $resultado = mysqli_query($conn, $sql);

    // Verifica si la consulta fue exitosa y redirige a la página index.php
    if ($resultado === TRUE) {
        header('location: index.php');
    } else {
        echo "Error al eliminar la imagen: " . mysqli_error($conn);
    }
?>
