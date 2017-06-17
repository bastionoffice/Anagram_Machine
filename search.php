<?php

require 'Solver.php';

try{
    // You probably want to change this
    //$db = new PDO('mysql:host=localhost;dbname=anagram', 'root', 'root');
 $db = new PDO('mysql:host=anagram00.c17ziqujsqqm.ca-central-1.rds.amazonaws.com;dbname=anagram', 'Ceesawlstuff', 'K0rgl3s!');

    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // Throw exceptions
}catch(PDOException $e){
    die('Database on fire. ('. $e->getMessage() . ')');
}

$slvr = new Solver($db);
$slvr->solve($_GET['q'], $_GET['lang']);