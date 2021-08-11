<?php
$query = "SELECT * FROM orders WHERE orders.order_id = :order_id";
$msg = $connect->prepare($query);
$msg->execute(['order_id' => $_GET['id']]);
$row = $msg->fetch();
printf('<h3>Информацию по заказу</h3>
<div class="container"> 
 <table style="margin: 10px 0;"  class="table table-bordered"> 
    <tr>
        <th scope="col">ID заказа</th>
        <th scope="col">Имя заказчика</th>
        <th scope="col">Номер телефона</th>
        <th scope="col">Email</th>
        <th scope="col">Валюта</th>
        <th scope="col">Количество</th>
        <th scope="col">Время заказа</th>
        <th scope="col">Фото паспорта</th>
        <th scope="col">Изменить/Удалить заказ</th>
    </tr>
    <tr>
        <td>' . $row['order_id'] . '</td>
        <td>' . $row['name'] . '</a></td>
        <td>' . $row['number'] . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['currency_name'] . '</td>
        <td>' . $row['amount'] . '</td>
        <td>' . $row['time'] . '</td>');
       if(!empty($row['photo'])){
            printf('
        <td><img src="uploads/' . $row['photo'] . '" width="100" height="100" alt="Удален"></td>');
        }
        else{
            printf('
        <td>Отсутствует</td>');
        }
        printf('
        <td><a href="update_order.php?id='.$row['order_id'].'">Update</a>
        <br>
        <a href="inc/delete_order.php?id='. $row['order_id'] .'">Delete</a>
        </td>
    </tr> 
 </table>
</div>');
