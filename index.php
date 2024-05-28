<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeProject</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
    #wrap {

        width: 100%;
        max-width: 400px;
        margin: 40px auto;

    }
    </style>
</head>

<body class="text-center">
    <div id="wrap">
        <h1 class="h3 mb-3">Log In</h1>
        <?php
        if(isset($_GET['incorrect'])): ?>
        <div class="alert alert-info alert-warning">Incorrect Your Email or Password!!</div>
        <?php endif ?>
        <?php
        if(isset($_GET['suspend'])): ?>
        <div class="alert alert-danger">Account Suspend</div>
        <?php endif ?>
        <?php
        if(isset($_GET['registered'])): ?>
        <div class="alert alert-info alert-success">Account Registered Successfully!Please Log In!</div>
        <?php endif ?>


        <form action="_actions/login.php" method="post">
            <input type="email" name="email" class="form-control mb-3" placeholder="Enter Your Email" required>
            <input type="password" name="password" class="form-control mb-3" placeholder="Enter Your Password" required>
            <button type="submit mb-3" class="btn btn-lg btn-primary w-100">Log In</button>

        </form>

        <a href="register.php">Register</a>
    </div>
</body>

</html>