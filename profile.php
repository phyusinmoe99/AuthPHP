<?php
// session_start();
// if(!isset($_SESSION['user'])){
//     header('location: index.php');
//     exit();
// }

include("vendor/autoload.php");
use Helpers\Auth;
$user = Auth::check();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <h1 class="h3 mb-3">Your Profile</h1>

        <?php if(isset($_GET['error'])) : ?>
        <div class="alert alert-warning">Cannot upload file</div>

        <?php endif ?>

        <?php if($user->photo) : ?>

        <img src="_actions/photos/<?= $user->photo ?>" class="img-thumbnail" width="200">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="input-group my-4">

            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>

        </form>
        <ul class="list-group">
            <li class="list-group-item">Name : <?= $user->name ?></li>
            <li class="list-group-item">Email : <?= $user->email ?></li>
            <li class="list-group-item">Phone : <?= $user->phone ?></li>
            <li class="list-group-item">Address : <?= $user->address ?></li>


        </ul>
        <a href="_actions/logout.php">Log Out</a> /
        <a href="admin.php">Admin</a>
    </div>



</body>

</html>