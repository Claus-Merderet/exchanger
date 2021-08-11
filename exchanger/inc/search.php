<?php
if (isset($_POST['search'])){
	$search = $_POST['search'];
	$sort = $_POST['sort'];
	switch ($_POST['type']) {
		case "Order_name":
		if (!empty($search)) {
            if($sort=='Ascending') {
                $query = "SELECT * FROM orders WHERE name LIKE ? ORDER BY order_id ASC ";
                Search_order($query, $search, $connect);
            }
            else{
                $query = "SELECT * FROM orders WHERE name LIKE ? ORDER BY order_id DESC ";
                Search_order($query, $search, $connect);
            }
        }
        else {
            echo "Enter a query!";
        }
        break;
    case "Consultation":
        if (!empty($search)) {
            if($sort=='Ascending') {
                $query = "SELECT * FROM consultation WHERE order_id LIKE ? ORDER BY order_id ASC ";
                Search_consultation($query, $search, $connect);
            }
            else{
                $query = "SELECT * FROM consultation WHERE order_id LIKE ? ORDER BY order_id DESC";
                Search_consultation($query, $search, $connect);
            }
        }
        else {
            echo "Enter a query!";
        }
		break;
		}
	}
	
function  Search_order ($query, $search, $connect){
    $msg = $connect->prepare($query);
    $msg->execute(['%'.$search .'%']);
    $array_order = $msg->fetch(PDO::FETCH_ASSOC);
    if (!empty($array_order)) {
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
                 <td><a href="get_info.php?id=' . $array_order['order_id'] . '">' . $array_order['order_id'] . '</a></td>
                 <td>' . $array_order['name'] . '</td>
                 <td>' . $array_order['number'] . '</td>
                 <td>' . $array_order['email'] . '</td>
                 <td>' . $array_order['currency_name'] . '</td>
                 <td>' . $array_order['amount'] . '</td>
                 <td>' . $array_order['time'] . '</td>');
            if (!empty($array_order['photo'])) {
                printf('
                    <td><img src="uploads/' . $array_order['photo'] . '" width="100" height="100" alt="Удален"></td>');
            } else {
                printf('
                   <td>Отсутствует</td>');
            }
            printf('
                <td><a href="update_order.php?id=' . $array_order['order_id'] . '">Update</a>
                <br>
                <a href="inc/delete_order.php?id=' . $array_order['order_id'] . '">Delete</a>
                </td>
                </tr> ');
        } while ($array_order = $msg->fetch(PDO::FETCH_ASSOC));
        printf('</table></div>');
    }
    else {
        echo "Oops, nothing was found for your search!";
    }

}
function  Search_consultation ($query, $search, $connect){
    $msg = $connect->prepare($query);
    $msg->execute(['%'.$search .'%']);
    $array_order = $msg->fetch(PDO::FETCH_ASSOC);
    if (!empty($array_order)) {
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
        <td>'. $array_order['consultation_id'] .'</td>
        <td><a href="get_info.php?id='.$array_order['order_id'].'">'.$array_order['order_id'].'</a></td>
        <td>'.$array_order['topic'].'</td>
        <td>'.$array_order['notes'].'</td>
        <td>
        <a href="update_consultation.php?id='. $array_order['consultation_id'] .'">Update</a>
        <br>
        <a href="inc/delete_consultation.php?id='. $array_order['consultation_id'] .'">Delete</a>
        </td>
    </tr>');
        } while ($array_order = $msg->fetch(PDO::FETCH_ASSOC));
        printf('</table></div>');
    }
    else {
        echo "Oops, nothing was found for your search!";
    }

}

