<?php
    //Importación de funciones externas
    include "config.php";
    include "utils.php";

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    //llamado a la función para crear la conexión a la base de datos
    $dbConn =  connect($db);

    //Esperando petición GET
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        //Si se encuentra el parametro categorias, se prepara la consulta y posteriormente, se ejecuta retornando una respuesta estado 200
        //y se retornan los resultados obtenidos.
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