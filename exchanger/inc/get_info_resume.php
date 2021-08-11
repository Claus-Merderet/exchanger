<?php
$query = "SELECT * FROM resume WHERE resume.resume_id = :resume_id";
$msg = $connect->prepare($query);
$msg->execute(['resume_id' => $_GET['id']]);
$row = $msg->fetch();
printf('<h3>Информацию по заказу</h3>
<div class="container"> 
 <table style="margin: 10px 0;"  class="table table-bordered"> 
    <tr>
        <th scope="col">ID резюме</th>
        <th scope="col">Имя</th>
        <th scope="col">Номер телефона</th>
        <th scope="col">Email</th>
        <th scope="col">Дата рождения</th>
        <th scope="col">Должность</th>
        <th scope="col">Фото паспорта</th>
        <th scope="col">Изменить/Удалить резюме</th>
    </tr>
    <tr>
        <td>' . $row['resume_id'] . '</td>
        <td>' . $row['name'] . '</a></td>
        <td>' . $row['number'] . '</td>
        <td>' . $row['email'] . '</td>
        <td>' . $row['dob'] . '</td>
        <td>' . $row['position'] . '</td>');
if(!empty($row['photo'])){
    printf('
        <td><img src="uploads/' . $row['photo'] . '" width="100" height="100" alt="Удален"></td>');
}
else{
    printf('
        <td>Отсутствует</td>');
}
printf('
        <td><a href="update_resume.php?id='.$row['resume_id'].'">Update</a>
        <br>
        <a href="inc/delete_resume.php?id='. $row['resume_id'] .'">Delete</a>
        </td>
    </tr> 
 </table>
</div>');
