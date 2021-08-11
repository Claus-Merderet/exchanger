<?php
require_once 'connect_db.php';
try {
    $query = "SELECT * FROM `resume` WHERE `resume_id` = :resume_id";
    $msg = $connect->prepare($query);
    $msg->execute(['resume_id' => $_GET['id']]);
    $row = $msg->fetch();
    $filepath='../uploads/'.$row['photo'];
    if (file_exists($filepath)){
        unlink($filepath);
    }
    $query = "DELETE FROM `resume` WHERE `resume`.`resume_id` = :resume_id";
    $msg = $connect->prepare($query);
    $msg->execute(['resume_id' => $_GET['id']]);
    header('Location: ../employes.php');
}
catch (PDOException $e) {
    echo "error" . $e->getMessage();
}