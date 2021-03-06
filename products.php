<?php
    include "config.php";
    include "utils.php";

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    $dbConn =  connect($db);

  
    //Función que ejecuta la consulta y retorna un código de respuesta 200 
    //Dado que este código será ejecutado en cada case, se optó por crear una función para evitar repetirlo demasiadas veces.
    function execQuery($sql) {
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        echo json_encode( $sql->fetchAll() );
        exit();
        header("HTTP/ 1.1 200 OK");
    }

    //Esperando petición tipo GET
    //Según parametro recibido, la sentencia SQL variará y, por lo tanto, también el retorno. 
    switch ($_SERVER['REQUEST_METHOD'] == 'GET') {
        case isset($_GET['categoria']): 
            $categoria = htmlspecialchars($_GET['categoria']);
            $sql = $dbConn->prepare("SELECT * FROM product where category = $categoria");
            execQuery($sql);
            
            break;

        case isset($_GET['nombre']):
            $nombre = htmlspecialchars($_GET['nombre']);
            $sql = $dbConn->prepare("SELECT * FROM product where name LIKE '%$nombre%' ");
            execQuery($sql);
            break;     
            
        default:
            $sql = $dbConn->prepare("SELECT * FROM product"); 
            execQuery($sql);
            break;
    }

    header("HTTP/1.1 400 Bad Request");

?>
