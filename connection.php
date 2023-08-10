
<?php
$conn=mysqli_connect('localhost','samman','password123','company');

if(!$conn)
{
    echo 'connection error' . mysqli_connect_error();
}


?>