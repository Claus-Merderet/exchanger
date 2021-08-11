<?php
require_once 'connect_db.php';
$query = "SELECT * FROM `orders` WHERE `order_id` = :order_id";
$msg = $connect->prepare($query);
$msg->execute(['order_id' => $_GET['id']]);
$row = $msg->fetch();
$filepath='../uploads/'.$row['photo'];
if (file_exists($filepath)){
    unlink($filepath);
}
$query = "UPDATE `orders` SET `photo` = '' WHERE `orders`.`order_id` = :order_id;";
$msg = $connect->prepare($query);
$msg->execute(['order_id' => $_GET['id']]);
$row = $msg->fetch();
header('Location: ../order.php');
