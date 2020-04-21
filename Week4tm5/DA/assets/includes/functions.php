<?php

function connect()
{
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dynamische_applicatie";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    return $conn;
}

catch(PDOException $e)
    {
    echo "connection failed: " . $e->getMessage();
    }
}


function getchar(){
    $conn = connect();
    $query = $conn->prepare("SELECT * FROM characters where id=:id");
    $query->execute(['id' => $_GET['id']]);
    $result = $query->fetch();
    return $result;
}

function getAll(){
    $conn = connect();
    $stmt = $conn->prepare('SELECT * FROM characters ORDER BY NAME');
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rows = '';
    $char = '';
    return $result;
}

function countall(){
    $conn=connect();
    $pdoQuery = "select id from characters";
    $pdoResult = $conn->query($pdoQuery);
    $rows = $pdoResult->rowCount();
    return $rows;
}
?>