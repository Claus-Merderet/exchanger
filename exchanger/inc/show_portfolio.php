<?php
if (!empty($_POST['portfolio'])) {
    $query = "SELECT * FROM resume";
    $connect = mysqli_connect('localhost', 'root', 'root', 'goloshubov_lab2');
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    printf('  <div class="col-md-12 mb-3">
  <table style="margin: 10px 0;"  class="table table-bordered"> <tr>
    <th scope="col">ID резюме</th>
    <th scope="col">Имя </th>
    <th scope="col">Номер телефона</th>
    <th scope="col">Email</th>
    <th scope="col">Дата рождения</th>
    <th scope="col">Должность</th>
    <th scope="col">Фото паспорта</th>
    <th scope="col">Изменить/Удалить резюме</th>
   </tr>');
    do {
        printf('
   <tr>
    <td><a href="get_info_resume.php?id='.$row['resume_id'].'">'.$row['resume_id'].'</a></td>
    <td>' . $row['name'] . '</td>
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
  </tr> ');
    } while ($row = mysqli_fetch_array($result));
    printf('</table></div>');

}
