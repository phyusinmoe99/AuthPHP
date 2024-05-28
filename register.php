<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <h1 class="h3 mb-3">Register</h1>


        <form action="_actions/create.php" method="post">
            <input type="text" name="name" class="form-control mb-3" placeholder="Enter Your Name" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Enter Your Email" required>
            <input type="text" name="phone" class="form-control mb-3" placeholder="Enter Your Phone Number" required>
            <textarea name="address" class="form-control mb-3" placeholder="Enter Your Address" required></textarea>
            <input type="password" name="password" class="form-control mb-3" placeholder="Enter Your Password" required>
            <button type="submit mb-3" class="btn btn-lg btn-primary w-100">Register</button>

        </form>

        <a href="index.php">Log In</a>
    </div>
</body>

</html>