<?php
if (!empty($_POST['sub'])) {
    if (empty($_POST['order_id']) || empty($_POST['topic']) || empty($_POST['notes'])) {
        echo("Заполните все поля!");
    }
    else {
        $query = "SELECT order_id FROM orders WHERE order_id=:order_id";
        $msg = $connect->prepare($query);
        $msg->execute(['order_id' => $_POST['order_id']]);
        $array_order = $msg->fetchAll(PDO::FETCH_ASSOC);
        $query = "SELECT order_id FROM consultation WHERE order_id=:order_id";
        $msg = $connect->prepare($query);
        $msg->execute(['order_id' => $_POST['order_id']]);
        $array_consultation = $msg->fetchAll(PDO::FETCH_ASSOC);
        if(($_POST['order_id'] == $array_order[0]['order_id']) && ($_POST['order_id'] != $array_consultation[0]['order_id'])){
            try {
                $query = "INSERT INTO consultation VALUES (NULL, :order_id, :topic, :notes)";
                $msg = $connect->prepare($query);
                $msg->execute([
                    'order_id' => $_POST['order_id'],
                    'topic' => $_POST['topic'],
                    'notes' => $_POST['notes']]);
                $row = $msg->fetch();
            }
            catch (PDOException $e) {
                echo "error" . $e->getMessage();
            }
        }
        else {

            echo 'Заказа с таким ID не существует или консультация уже назначена!';
        }
    }
}
