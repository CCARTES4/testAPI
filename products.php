<?php
include "config.php";
include "utils.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$dbConn =  connect($db);

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
  if (isset($_GET['categoria'])) {
    $sql = $dbConn->prepare("SELECT * FROM product where category = :categoria");
    $sql->bindValue(':categoria', $_GET['categoria']);
    $sql->execute();
    header("HTTP/1.1 200 OK");
    echo json_encode( $sql->fetchAll() );
    exit();

  } elseif (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    $sql = $dbConn->prepare("SELECT * FROM product where name LIKE '%$nombre%' ");

  } else {
    $sql = $dbConn->prepare("SELECT * FROM product");
    
  }

  $sql->execute();
  $sql->setFetchMode(PDO::FETCH_ASSOC);
  header("HTTP/1.1 200 OK");
  echo json_encode( $sql->fetchAll() );
  exit();
}
