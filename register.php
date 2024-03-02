<?php include("server.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register.php" method="post">

        <?php include("error.php"); ?>

        <div class="input-group">
            <label for="name">Enter Usename</label>
            <input type="text" name="username" value=<?php echo $username; ?>>
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" value=<?php echo $email; ?>>
        </div>
        <div class="input-group">
            <label for="password">Enter Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="name">Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register</button>
        </div>

        <p>
            Already Have an Accoount?
            <a href="login.php">
                Login Here!
            </a>
        </p>

    </form>
</body>
</html>