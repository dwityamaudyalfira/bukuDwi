<?php

include '../koneksi.php';
/**
 * @var $connection PDO
 */
//Prepare query
$isbn = $_POST['isbn'];
$jumlah = $_POST['jumlah'];


$query = "UPDATE buku SET jumlah = 50 WHERE isbn = '787843219e'";
$statement = $connection->query($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
//jalankan query
$results = $statement->fetchAll();
//output JSON
header('Content-Type: application/json');
echo json_encode($results);