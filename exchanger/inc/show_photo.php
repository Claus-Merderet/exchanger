<?php
if(!empty($row['photo'])) {
    printf('  <div class="col-md-6 mb-3">
                        <h5>Фото паспорта</h5>
                        <img src="uploads/' . $row['photo'] . '" width="200" height="150" class="border border-white rounded"></td>
                        <a href="inc/delete_photo.php?id='.$row['order_id'].'">

                  
                            Delete

                        </a>
                    </div>');
}
