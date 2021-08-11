<?php
session_start();
require_once 'inc/connect_db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign in</title>
    <?php include 'html/head.html';?>
</head>
<body>
<?php include 'html/header.html';?>
<main class="content">
    <div class="container" style="width:500px; margin-top:75px; text-align:center;">
        <h3>Sign in</h3>
        <form action="" method="post" id="form">
            <div class="form-row">
                    <label >Login</label>
                    <input type="text" class="form-control" name="login">
                    <span id="text_number"></span>
            </div>
            <div class="form-row">
                    <label >Password</label>
                    <input type="password" class="form-control" name="password">
            </div>
            <br>
            <button class="btn btn-primary" type="submit" name="sub" value="Submit" id="sub">Sign in</button>
            <a class="btn btn-primary" href="register.php" role="button">Register</a>
        </form>
        <?php require_once 'inc/sign_in.php'; ?>
    </div>
</main>
<?php require_once 'html/footer.html'; ?>
<script src="assets/js/validation.js" type="text/javascript"></script>
</body>
<?php require_once 'html/footer.html'; ?>
</html>