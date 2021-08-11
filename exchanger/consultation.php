<?php
require_once  'inc/session_st.php';
require_once 'inc/connect_db.php';
?>

<!DOCTYPE html>
<head>
    <title>Personal account</title>
    <?php require_once 'html/head.html';?>
</head>
<body>
<?php require_once 'html/header.html'; ?>
<main class="content">
    <div class="container">
        <h2>Заявка на консультацию по заказу</h2>
        <form action="" method="post" id="form">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Введите id заказа</label>
                    <input type="text" class="form-control" name="order_id" id="order_id" onkeyup="validation_id()">
                    <span id="text_id"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label >Введите тему</label>
                    <input type="text" class="form-control" name="topic">
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <label for="text">Напишите замечания</label>
                <textarea class="form-control" name="notes"  rows="3" ></textarea>
            </div>
            <button class="btn btn-primary" type="submit" name="sub" value="Submit" id="sub">Send form</button>
            <button class="btn btn-primary" type="submit" name="show" value="show_consultation">Show consultation</button>
            <a class="btn btn-primary" href="order.php" role="button">Make order</a>
        </form>
        <?php require_once 'inc/show_consultation.php'?>
        <?php require_once 'inc/add_consultation.php' ?>
        <?php require_once 'inc/show_order.php' ?>
    </div>
</main>
<?php require_once 'html/footer.html'; ?>
<script src="assets/js/validation.js" type="text/javascript"></script>
</body>
</html>