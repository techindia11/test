<?php
include ('config/config.php');

if(isset($_GET['id'])){
    
    $id = $_GET['id'];
    $query = "select * from user where id = $id";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    var_dump($row);

}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="POST" class="my-5" >

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" autocomplete="off" value="<?= $row['name'] ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" autocomplete="off" value="<?= $row['email'] ?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile" autocomplete="off" value="<?= $row['mobile'] ?>">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" autocomplete="off" value="<?= $row['password'] ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="update">Submit</button>
        </form>
        <a href="home.php" class="btn btn-success">View User</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $insert = "update user set name = '$name', email = '$email', mobile = '$mobile', password = '$password' where id = $id";
        if(mysqli_query($conn,$insert)){
            echo "<script>window.location.href='home.php';</script>";
        }
    }
?>