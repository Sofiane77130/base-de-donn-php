<?php
require_once("inc_files.php");
// chemin pour le fichier database
$pdo = new PDO ('mysql:host=' .DB_SERVER . ';dbname=' .DB_NAME . ';charset=utf8', DB_USER, DB_PASS, array (PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8 COLLATE utf8_general_ci',PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION) );
// pour appeler les donnés de la table de programme
$query = $pdo -> query ('SELECT * FROM liguefoot');
$data = $query->fetchALL(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($data);
    echo'</pre>';


?>