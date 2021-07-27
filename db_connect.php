<?php
$conn=mysqli_connect('localhost','swaz','tiger','grocery_list');
if(!$conn)
{
    echo 'Error'.mysqli_connect_error();
}

?>