<?php

    include("db.php");

    if(isset($_GET["id"])){
        $id = $_GET['id'];
        $query = "DELETE FROM producto WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['message'] = 'Producto removido con éxito';
        $_SESSION['message_type'] = 'danger';
        header("Location: producto.php");
    }

?>