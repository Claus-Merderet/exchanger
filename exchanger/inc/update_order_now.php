<?php
if (!empty($_POST['upd'])  && $_FILES['image']['error'] != 0) {
    try {
        $query = "UPDATE `orders` SET `name` = :name, `number` = :number, `email` = :email, `currency_name` = :currency_name, `amount` = :amount WHERE `orders`.`order_id` = :order_id";
        $msg = $connect->prepare($query);
        $msg->execute(['name' => $_POST['name'],
            'number' => $_POST['number'],
            'email' => $_POST['email'],
            'currency_name' => $_POST['currency_name'],
            'amount' => $_POST['amount'],
            'order_id' => $_GET['id']]);
        header('Location: order.php');
    }
        catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
}
elseif (!empty($_POST['upd'])  && !empty($_FILES['image'])){
    print_r($_FILES);
    $filepath='uploads/'.$row['photo'];
    if (file_exists($filepath)) {
        unlink($filepath);
    }
    define("UPLOAD_DIR","uploads/");
    $myFile = $_FILES['image'];
    print_r ($_FILES);
    $name = preg_replace("/[^A-Z0-9._-]/i","_", $myFile["name"]);
    echo $name;
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)){
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }
    $success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $name);

    $query = "UPDATE `orders` SET `name` = :name, `number` = :number, `email` = :email, `currency_name` = :currency_name, `amount` = :amount,
                `photo` = :photo WHERE `orders`.`order_id` = :order_id";
    $msg = $connect->prepare($query);
    $msg->execute(['name' => $_POST['name'],
        'number' => $_POST['number'],
        'email' => $_POST['email'],
        'currency_name' => $_POST['currency_name'],
        'amount' => $_POST['amount'],
        'photo' => $name,
        'order_id' => $_GET['id']]);

    if(!$success){
        echo"<p>Не удалось сохранить файл.</p>";
        exit;
    }
    chmod (UPLOAD_DIR . $name , 0644);
    header('Location: order.php');
}