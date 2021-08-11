<?php
$query = "SELECT * FROM `consultation` WHERE `consultation_id` = :consultation_id";
$msg = $connect->prepare($query);
$msg->execute(['consultation_id' => $_GET['id']]);
$row = $msg->fetch();