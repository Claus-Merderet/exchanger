<?php
if (!empty($_POST['upd'])) {
    $query = "SELECT order_id FROM orders WHERE order_id=:order_id";
    $msg = $connect->prepare($query);
    $msg->execute(['order_id' => $_POST['order_id']]);
    $array_order = $msg->fetchAll(PDO::FETCH_ASSOC);
    $query = "SELECT order_id FROM consultation WHERE order_id=:order_id";
    $msg = $connect->prepare($query);
    $msg->execute(['order_id' => $_POST['order_id']]);
    $array_consultation = $msg->fetchAll(PDO::FETCH_ASSOC);
    if(($_POST['order_id'] == $array_order[0]['order_id'])) {
        try {
            $query = "UPDATE `consultation` SET `order_id` = :order_id, `topic` = :topic, `notes` = :notes WHERE `consultation`.`consultation_id` = :consultation_id";
            $msg = $connect->prepare($query);
            $msg->execute(
                ['order_id' => $_POST['order_id'],
                    'topic' => $_POST['topic'],
                    'notes' => $_POST['notes'],
                    'consultation_id' => $_GET['id']]);
            header('Location: consultation.php');
        }
        catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }
    else{
        echo 'Введен неверный ID заказа!';
    }
}