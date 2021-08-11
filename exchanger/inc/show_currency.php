<?php
if (!empty($_POST['currency_name']) )
{
    $query = "SELECT * FROM currency WHERE 	currency_name =:currency_name";
    $msg = $connect->prepare($query);
    $msg->execute(['currency_name' => $_POST['currency_name']]);
    $row = $msg->fetch();
    printf(' <table style="margin: 10px 0;"  class="table table-bordered"> <tr>
    <th scope="col">Currency</th>
    <th scope="col">Резервный остаток</th>
    <th scope="col">Курс к RUB</th>
   </tr>
   <tr>
    <td>'.$row['currency_name'].'</td>
    <td>'.$row['amount'].'</td>
    <td>'.$row['rate'].'</td>
  </tr> </table>');
}

