<?php

    function connect($db)
    {
        try {
            $conn = new PDO("mysql:host={$db['host']};charset=utf8;dbname={$db['db']}", $db['username'], $db['password']);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $exception) {
            exit($exception->getMessage());
        }
  }

  
	function bindAllValues($statement, $params)
    {
	    foreach($params as $param => $value) {
		    $statement->bindValue(':'.$param, $value);
		}
		return $statement;
    }
?>