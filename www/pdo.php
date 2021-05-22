<?php
try {
    $conn = new PDO('mysql:host=db;dbname=petperfeito', "petperfeito", "petperfeito");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $conn->query('SELECT * FROM petperfeito');

    foreach($data as $row) {
        print_r($row);
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>