<?php
if (!empty($_POST['order'])) {
    $query = "SELECT * FROM orders";
    $connect = mysqli_connect('localhost', 'root', 'root', 'goloshubov_lab2');
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    printf('  <div class="col-md-12 mb-3">
  <table style="margin: 10px 0;"  class="table table-bordered"> <tr>
    <th scope="col">ID заказа</th>
    <th scope="col">Имя заказчика</th>
    <th scope="col">Номер телефона</th>
    <th scope="col">Email</th>
    <th scope="col">Валюта</th>
    <th scope="col">Количество</th>
    <th scope="col">Время заказа</th>
    <th scope="col">Фото паспорта</th>
    <th scope="col">Изменить/Удалить заказ</th>
   </tr>');
    do {
        printf('
   <tr>
    <td><a href="get_info.php?id='.$row['order_id'].'">'.$row['order_id'].'</a></td>
    <td>' . $row['name'] . '</td>
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
  </tr> ');
    } while ($row = mysqli_fetch_array($result));
    printf('</table></div>');

}

