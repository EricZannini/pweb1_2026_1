<?php
include '../header.php';
include_once "../database/db.class.php";
?>

$db = new db('usuario');

if(!empty($_POST)){
    $db->store($_POST);
}