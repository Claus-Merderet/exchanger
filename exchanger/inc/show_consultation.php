<?php
if (!empty($_POST['show']))
{
    $query = "SELECT * FROM consultation";
    $connect = mysqli_connect('localhost', 'root', 'root', 'goloshubov_lab2');
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    printf(' <table style="margin: 10px 0;"  class="table table-bordered"> 
    <tr>
        <th scope="col">ID консультации</th>
        <th scope="col">ID заказа</th>
        <th scope="col">Тема</th>
        <th scope="col">Примечания</th>
        <th scope="col">Изменить/Удалить заказ</th>
    </tr>');
    do {
        printf('
    <tr>
        <td>'. $row['consultation_id'] .'</td>
        <td><a href="get_info.php?id='.$row['order_id'].'">'.$row['order_id'].'</a></td>
        <td>'.$row['topic'].'</td>
        <td>'.$row['notes'].'</td>
        <td>
        <a href="update_consultation.php?id='. $row['consultation_id'] .'">Update</a>
        <br>
        <a href="inc/delete_consultation.php?id='. $row['consultation_id'] .'">Delete</a>
        </td>
    </tr>');
    } while ($row = mysqli_fetch_array($result));
    printf('</table></div>');
}