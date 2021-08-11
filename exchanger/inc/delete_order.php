<?php
require_once 'connect_db.php';
try {
    $query = "SELECT * FROM `orders` WHERE `order_id` = :order_id";
    $msg = $connect->prepare($query);
    $msg->execute(['order_id' => $_GET['id']]);
    $row = $msg->fetch();
    $filepath='../uploads/'.$row['photo'];
    if (file_exists($filepath)){
        unlink($filepath);
    }
    $query = "DELETE FROM `orders` WHERE `orders`.`order_id` = :order_id";
    $msg = $connect->prepare($query);
    $msg->execute(['order_id' => $_GET['id']]);
    $query = "DELETE FROM `consultation` WHERE `consultation`.`order_id` = :order_id";
    $msg = $connect->prepare($query);
    $msg->execute(['order_id' => $_GET['id']]);
    header('Location: ../order.php');
}
catch (PDOException $e) {
    echo "error" . $e->getMessage();
}