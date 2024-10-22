<?php

include ('config/config.php');

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query = "delete from user where id = $id";
    if($result = mysqli_query($conn,$query)){
        if(mysqli_affected_rows($conn)> 0){
            echo "Deleted";
            header('location: user.php');
        }
        else{
            echo "No Id Found";
        }
    }
    else{
        echo "Something Went Wrong";
    }
}
?>