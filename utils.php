<?php
    //Función que permitirá conectarnos a la base de datos. Retorna el ob
    function connect($db)
    {
        try {
            //creamos una instancia de la clase PDO
            $conn = new PDO("mysql:host={$db['host']};charset=utf8;dbname={$db['db']}", $db['username'], $db['password']);

            //Le signamos el reporte de errores en conjunto con las excepciones
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $exception) {
            exit($exception->getMessage());
        }
    }
?>