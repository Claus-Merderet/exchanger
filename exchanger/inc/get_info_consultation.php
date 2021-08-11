<?php
$query = "SELECT * FROM consultation WHERE consultation.order_id = :order_id";
$msg = $connect->prepare($query);
$msg->execute(['order_id' => $_GET['id']]);
$row = $msg->fetch();
if(!empty($row)) {
    printf('<h3>Информацию по консультации</h3> 
<div class="container">
 <table style="margin: 10px 0;"  class="table table-bordered"> 
    <tr>
        <th scope="col">ID консультации</th>
        <th scope="col">ID заказа</th>
        <th scope="col">Тема</th>
        <th scope="col">Примечания</th>
        <th scope="col">Изменить/Удалить заказ</th>
    </tr>
    <tr>
        <td>' . $row['consultation_id'] . '</td>
        <td>' . $row['order_id'] . '</a></td>
        <td>' . $row['topic'] . '</td>
        <td>' . $row['notes'] . '</td>
        <td>
        <a href="update_consultation.php?id=' . $row['consultation_id'] . '">Update</a>
        <br>
        <a href="inc/delete_consultation.php?id=' . $row['consultation_id'] . '">Delete</a>
        </td>
    </tr></table></div>');
}

