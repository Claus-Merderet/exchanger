<?php
if (!empty($_POST['sub'])) {
    if (empty($_POST['login']) || empty($_POST['password'])) {
        echo("Заполните все поля!");
    } else {
        $query = "SELECT * FROM users WHERE login =:login AND password=:password";
        $msg = $connect->prepare($query);
        $msg->execute(['login' => $_POST['login'],
            'password' => md5($_POST['password'])]);
        $array_user = $msg->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($array_user)){
            $_SESSION['user']=[
                'id'=>$array_user['user_id'],
                'full_name'=>$array_user['full_name'],
                'email'=>$array_user['email']
            ];
            header('Location: profile.php');
        }
        else{
            echo 'Неверный логин или пароль!';
        }
    }
}

