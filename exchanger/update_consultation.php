<?php
require_once  'inc/session_st.php';
require_once 'inc/connect_db.php';
require_once 'inc/input_update_consultation.php';
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
        <h2>Изменить информацию о консультации</h2>
        <form action="" method="post" id="form">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Введите id заказа</label>
                    <input type="text" class="form-control" name="order_id" value="<?= $row['order_id']?>">
                    <span id="text_name"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label >Введите тему</label>
                    <input type="text" class="form-control" name="topic" value="<?= $row['topic']?>">
                    <span id="text_number"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label >Напишите замечаня</label>
                    <input type="text" class="form-control" name="notes" value="<?= $row['notes']?>">
                    <span id="text_email"></span>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="upd" value="Update">Update</button>
            <button class="btn btn-primary" type="submit" name="show" value="show_consultation">Show consultation</button>
            <a class="btn btn-primary" href="order.php" role="button">Make order</a>
            <a class="btn btn-primary" href="consultation.php" role="button">Request for consultation on the order</a>
        </form>
        <?php require_once 'inc/update_consultation_now.php' ?>
        <?php require_once 'inc/show_consultation.php'?>
    </div>
</main>
<?php require_once 'html/footer.html'; ?>
<script src="assets/js/validation.js" type="text/javascript"></script>

</body>
</html>