<?php
require_once  'inc/session_st.php';
require_once 'inc/connect_db.php';
require_once 'inc/input_update_order.php';
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
        <h2>Изменить заказ</h2>
        <form action="" method="post" id="form" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Введите ФИО</label>
                    <input type="text" class="form-control" name="name" id="name" onkeyup="validation_name()" value="<?= $row['name']?>">
                    <span id="text_name"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label >Введите номер телефона</label>
                    <input type="text" class="form-control" name="number" id="number" onkeyup="validation_number()" value="<?= $row['number']?>">
                    <span id="text_number"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Введите email</label>
                    <input type="text" class="form-control" name="email"  id="email" onkeyup="validation_email()" value="<?= $row['email']?>">
                    <span id="text_email"></span>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Выберите валюту</label>
                    <select class="custom-select" name="currency_name">
                        <option>Euro €</option>
                        <option>Dollar $</option>
                        <option>Pound £</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label >Сколько хотите купить?</label>
                    <input type="number" class="form-control" name="amount" min="100" value="<?= $row['amount']?>">
                </div>
            </div>
            <div class="form-row">
                <?php require_once 'inc/show_photo.php' ?>
                <div class="col-md-6 mb-3">
                    <label >Загрузите паспорт</label>
                    <input type="file" name="image">
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="upd" value="Update" id="sub">Update</button>
            <button class="btn btn-primary" type="submit" name="order" value="Submit_order">Show orders</button>
            <a class="btn btn-primary" href="order.php" role="button">Make order</a>
            <a class="btn btn-primary" href="consultation.php" role="button">Request for consultation on the order</a>
        </form>
        <?php require_once 'inc/update_order_now.php' ?>
        <?php require_once 'inc/show_order.php'?>
        <?php require_once 'inc/show_consultation.php'?>
    </div>
</main>
<?php require_once 'html/footer.html'; ?>
<script src="assets/js/validation.js" type="text/javascript"></script>
</body>
</html>
