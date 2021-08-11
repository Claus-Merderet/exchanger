<?php require_once 'inc/connect_db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration personal account</title>
    <?php include 'html/head.html';?>
</head>
<body>
<?php include 'html/header.html';?>
<main class="content">
    <div class="container">
        <h3>Register</h3>
        <form action="" method="post" id="form">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Введите ФИО</label>
                    <input type="text" class="form-control" name="full_name" id="name" onkeyup="validation_name()">
                    <span id="text_name"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label >Введите login</label>
                    <input type="text" class="form-control" name="login" id="login" onkeyup="validation_login()">
                    <span id="text_login"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Введите email</label>
                    <input type="text" class="form-control" name="email"  id="email" onkeyup="validation_email()">
                    <span id="text_email"></span>
                </div>
                <div class="col-md-3 mb-3">
                    <label >Введите пароль</label>
                    <input type="password" class="form-control" name="password" id="password" onkeyup="validation_password()">
                    <span id="text_password"></span>
                </div>
                <div class="col-md-3 mb-3">
                    <label >Повторите пароль</label>
                    <input type="password" class="form-control" name="password_confirm" id="password_confirm" onkeyup="validation_password_confirm()">
                    <span id="text_password_confirm"></span>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="sub" value="Submit" id="sub">Registration now!</button>
            <a class="btn btn-primary" href="vhod.php" role="button">Already have an account</a>
        </form>
        <?php require_once 'inc/register_now.php'; ?>
    </div>
</main>
<?php require_once 'html/footer.html'; ?>
<script src="assets/js/validation.js" type="text/javascript"></script>
</body>
<?php require_once 'html/footer.html'; ?>
</html>