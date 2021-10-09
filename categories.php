<?php
    include "config.php";
    include "utils.php";

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    $dbConn =  connect($db);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        if (isset($_GET['categorias'])){
            $sql = $dbConn->prepare("SELECT * FROM category"); 
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            header("HTTP/ 1.1 200 OK");
            echo json_encode( $sql->fetchAll() );
            exit();
        }
    }

?>