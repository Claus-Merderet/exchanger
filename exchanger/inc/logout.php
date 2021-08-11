<?php
if (!empty($_POST['log'])) {
    unset($_SESSION['user']);
    session_destroy();
    header('Location: index.php');
}