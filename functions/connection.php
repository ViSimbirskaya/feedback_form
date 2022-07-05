<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=simtech', 'root', '353985');
} catch (PDOException $e) {
    print "Error bad!: " . $e->getMessage();
    die();
}
