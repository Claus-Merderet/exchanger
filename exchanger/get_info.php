<?php
require_once  'inc/session_st.php';
require_once 'inc/connect_db.php';
?>

<!DOCTYPE html>
<head>
    <title>Information order</title>
    <?php require_once 'html/head.html';?>
</head>
<body>
<?php require_once 'html/header.html'; ?>
<main class="content">
    <?php require_once 'inc/get_info_order.php'; ?>
    <?php require_once 'inc/get_info_consultation.php'; ?>
    <div class="container">
        <a class="btn btn-primary" href="order.php" role="button">Make order</a>
        <a class="btn btn-primary" href="consultation.php" role="button">Request for consultation on the order</a>
    </div>
</main>
<?php require_once 'html/footer.html'; ?>
</body>
</html>