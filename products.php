<?php
include "config.php";
include "utils.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$dbConn =  connect($db);

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['id'])) {
      $sql = $dbConn->prepare("SELECT * FROM product where category = :id");
      $sql->bindValue(':id', $_GET['id']);
      $sql->execute();
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll() );
      exit();

	  } else {

      $sql = $dbConn->prepare("SELECT * FROM product");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll() );
      exit();
	}
}
