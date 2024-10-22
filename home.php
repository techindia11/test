<?php
include ('config/config.php');

$sql = "select * from user";
$result=mysqli_query($conn,$sql);
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
      <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
                    <th scope="row">' . $row["id"] .'</th>
                    <td>'. $row["name"] . '</td>
                    <td>'. $row["email"] . '</td>
                    <td>'. $row["mobile"].'</td>
                    <td>' . $row["password"] .'</td>
                    <td>
                        <a href="delete.php?id='.$row["id"].'" class="btn btn-danger">Delete</a>
                        <a href="update.php?id='.$row["id"].'" class="btn btn-info">Update</a>
                    </td>
              </tr> 
        ';
    }
    ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

