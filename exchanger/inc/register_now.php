 <?php
 if (!empty($_POST['sub'])) {
     if (empty($_POST['full_name']) || empty($_POST['login']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password_confirm'])) {
         echo("Заполните все поля!");
     }
     else {
         if ($_POST['password'] == $_POST['password_confirm']) {
             $query = "SELECT login FROM users WHERE login = :login ";
             $msg = $connect->prepare($query);
             $msg->execute(['login' => $_POST['login']]);
             $array_login = $msg->fetchAll(PDO::FETCH_ASSOC);
             if (empty($array_login)) {
                 try {
                     $query = "INSERT INTO users (user_id, full_name, login, email , password) VALUES  
                                (NULL, :full_name, :login, :email, :password)";
                     $msg = $connect->prepare($query);
                     $msg->execute(['full_name' => $_POST['full_name'],
                         'login' => $_POST['login'],
                         'email' => $_POST['email'],
                         'password' => md5($_POST['password'])]);
                     header('Location: vhod.php');
                 }
                 catch (PDOException $e) {
                     echo "error" . $e->getMessage();
                 }
             }
             else{
                 echo 'Логин уже занят!';
             }
         }
         else {
             echo 'Пароли не совпадают!';
         }
     }
 }
