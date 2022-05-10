<?php
$user = 'u47496';
$pass = '3730253';
$db = new PDO('mysql:host=localhost;dbname=u47496', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

if(!isset($_SESSION)){
    session_start();
}
?>
