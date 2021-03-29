<?php
require $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."connectToDB.php"; 

$query = 'SELECT * FROM `cars`';

$result = mysqli_query($connection, $query);

if($result){
    $num = mysqli_num_rows($result);
    if($num > 0){
        echo '<br>';
        echo '<div class="print-form">';
        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo '<div class="block">'.
            '<div class="left-block">'.
            '<h5 class="column-name">Car number:</h5>'.'<p class="column-value">'.
            $row['NumberCar'].'</p>'.
            '<hr>'.
            '<h5 class="column-name">Date:</h5>'.'<p class="column-value">'.
            $row['date'].'</p>'.
            '<hr>'.
            '<h5 class="column-name">Brand:</h5>'.'<p class="column-value">'.
            $row['brand'].'</p>'.
            '<hr>'.
            '<h5 class="column-name">Color:</h5>'.'<p class="column-value">'.
            $row['color'].'</p>'.
            '<hr>'.
            '<h5 class="column-name">State:</h5>'.'<p class="column-value">'.
            $row['state'].'</p>'.
            '<hr>'.
            '<h5 class="column-name">Owner:</h5>'.'<p class="column-value">'.
            $row['name'].'</p>'.
            '<hr>'.
            '<h5 class="column-name">Address:</h5>'.'<p class="column-value">'.
            $row['address'].'</p>'.
            '<hr>'.
            '<h5 class="column-name">Phone number:</h5>'.'<p class="column-value">'.
            $row['NumberPhone'].'</p>'.
            '</div>'.
            '<div class="right-block">'.
            '<img class="print-image" src="'.$row['image'].'">'.
            '</div>'.
            '</div>';
            if(isset($_SESSION['login'])){
                if($_SESSION['login']==$row['login']){
                    echo '<div class="user-links">'.
                    '<a href="/navigation/user/update_form.php?id='.$row['id'].'">Update</a>'.
                    '<a href="/navigation/user/delete.php?id='.$row['id'].'" '.
                    'onClick="return confirm('."'Are you sure about that?'".')">Delete</a>'.
                    '</div>';
                }
            }
        };
        echo '</div>';
    } else echo "<p>Number Rows <= 0</p>";
}

?>