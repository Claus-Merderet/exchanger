<?php
if (!empty($_POST['sub'])  && $_FILES['image']['error'] == 0) {
    if (empty($_POST['name']) || empty($_POST['number']) || empty($_POST['email'])) {
        echo("Заполните все поля и загрузите фото!");
    } else {
        try {
            define("UPLOAD_DIR","uploads/");
            $myFile = $_FILES['image'];
            $name = preg_replace("/[^A-Z0-9._-]/i","_", $myFile["name"]);
            $i = 0;
            $parts = pathinfo($name);
            while (file_exists(UPLOAD_DIR . $name)){
                $i++;
                $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
            }
            $success = move_uploaded_file($myFile["tmp_name"],UPLOAD_DIR . $name);
            if(!$success){
                echo"<p>Не удалось сохранить файл.</p>";
                exit;
            }
            chmod (UPLOAD_DIR . $name , 0644);
            $query = "INSERT INTO resume (resume_id, name, number, email , dob, position,  photo) VALUES  
                                                (NULL, :name, :number, :email, :dob, :position, :photo)";
            $msg = $connect->prepare($query);
            $msg->execute(['name' => $_POST['name'],
                'number' => $_POST['number'],
                'email' => $_POST['email'],
                'dob' => $_POST['dob'],
                'position' => $_POST['position'],
                'photo' => $name]);
            $row = $msg->fetch();
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }
}
elseif (!empty($_POST['sub'])  && !empty($_FILES['image']) == 1) {
    echo("Загрузите файл!");
}
