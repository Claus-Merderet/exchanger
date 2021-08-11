<?php
$query = "SELECT * FROM `orders` WHERE `order_id` = :order_id";
$msg = $connect->prepare($query);
$msg->execute(['order_id' => $_GET['id']]);
$row = $msg->fetch();

