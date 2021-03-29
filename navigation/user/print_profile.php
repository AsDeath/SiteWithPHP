<?php
require $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."connectToDB.php";
$login = $_SESSION['login'];
$query = "SELECT * FROM `users` WHERE `login`='$login'";

$result = mysqli_query($connection, $query);

if($result){
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo '<div class="both">
    <aside class="aside">
		<h1>About You</h1>
		<dl>
            <dt><image class="user-image" src="https://thumbs.dreamstime.com/b/default-avatar-profile-image-vector-social-media-user-icon-potrait-182347582.jpg"></image</dt>
			<dt><p>Login: '.$row['login'].'</p></dt>
			<dt><p>Email: '.$row['email'].'</p></dt>
			<dt><a href="add_form.php" alt = "контакты" >Add Post</a></dt>
		</dl>
    </aside>';
}

$query = "SELECT * FROM `cars` WHERE `login`='$login'";
$result = mysqli_query($connection, $query);
if($result){
    $num = mysqli_num_rows($result);
    if($num>0){
        echo '<main class="main">
        <h1>Your cars</h1>';
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
            '<image class="print-image" src="'.$row['image'].'"></image>'.
            '</div>'.
            '</div>';
            echo '<div class="user-links">'.
                '<a href="/navigation/user/update_form.php?id='.$row['id'].'">Update</a>'.
                '<a href="/navigation/user/delete.php?id='.$row['id'].'" '.
                'onClick="return confirm('."'Are you sure about that?'".')">Delete</a>'.
                '</div>';
        }
        echo '</main>'.
        '</div>'.
        '</div>';
    }
}