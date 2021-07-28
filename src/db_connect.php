<?php

$conn = new mysqli("db", "root", "example", "grocery_list");
if(!$conn)
{
    echo 'Error'.mysqli_connect_error();
}

?>