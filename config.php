<?php
$conn = new mysqli('localhost','root','','test');

if(!$conn){
    die(mysqli_error($conn));
}

?>