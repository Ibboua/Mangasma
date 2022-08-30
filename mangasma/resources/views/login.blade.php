<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="login.css" rel="stylesheet" type="text/css" />
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="logo.png" rel="icon" />
    <title>MangAsma</title>
</head>

<body>

    <div class="body_center">
        <form action="" method="post" class="formulaire">

            {{ csrf_field() }}

            <h1>Login</h1>

            <label for="email">Email : </label><br />
            <i class="fas fa-user"></i>
            <input type="email" name="email" id="email" placeholder="Type your email..." size="25">

            <div class="separateur"></div><br />

            <label for="password">Password : </label><br />
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Type your password..." size="25">

            <div class="separateur"></div><br />

            <input type="submit" value="Login"><br />

            <div class="bloc">
                <a href="register.php">Register</a>
                <a href="reset.php">Reset</a>
            </div>

        </form>
    </div>
</body>

</html>
