<?php
require_once 'connect_db.php';
try {
    $query = "DELETE FROM `consultation` WHERE `consultation`.`consultation_id` =:consultation_id";
    $msg = $connect->prepare($query);
    $msg->execute(['consultation_id' => $_GET['id']]);
    header('Location: ../consultation.php');
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}