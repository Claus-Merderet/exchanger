<?php
$query = "SELECT * FROM `resume` WHERE `resume_id` = :resume_id";
$msg = $connect->prepare($query);
$msg->execute(['resume_id' => $_GET['id']]);
$row = $msg->fetch();