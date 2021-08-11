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
        <h2>Заполните портфолио</h2>
        <form action="" method="post" id="form" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label>Введите ФИО</label>
                    <input type="text" class="form-control" name="name" id="name" onkeyup="validation_name()">
                    <span id="text_name"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label >Введите номер телефона</label>
                    <input type="text" class="form-control" name="number" id="number" onkeyup="validation_number()">
                    <span id="text_number"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label >Введите email</label>
                    <input type="text" class="form-control" name="email"  id="email" onkeyup="validation_email()">
                    <span id="text_email"></span>
                </div>
                <div class="col-md-3 mb-3">
                    <label >Введите дату рождения</label>
                    <input type="date" class="form-control" name="dob"  value="2000-01-01" min="1970-01-01" max="2003-01-01">
                </div>
				<div class="col-md-3 mb-3">
                    <label>Выберите желаемую должность</label>
                    <select class="custom-select" name="position">
                        <option>Консультант</option>
                        <option>Охранник</option>
                        <option>Маркетолог</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label >Загрузите паспорт</label>
                    <input type="file" name="image">
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="sub" value="Submit" id="sub">Send form</button>
            <button class="btn btn-primary" type="submit" name="portfolio" value="Submit_portfolio">Show portfolio</button>
        </form>
		<?php require_once 'inc/add_portfolio.php' ?>
        <?php require_once 'inc/show_portfolio.php' ?>
    </div>
</main>
<?php require_once 'html/footer.html'; ?>
<script src="assets/js/validation.js" type="text/javascript"></script>
</body>
</html>