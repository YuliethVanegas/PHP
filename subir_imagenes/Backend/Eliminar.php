<?php
      include 'conexion.php';

    $Id = $_REQUEST['Id'];
    $sql = "DELETE FROM imagenes WHERE cod_imagen ='$Id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header('location:../index.php');
    }

?>