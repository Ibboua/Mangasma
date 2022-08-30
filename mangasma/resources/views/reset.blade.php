<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="reset.css" rel="stylesheet" type="text/css" />
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="logo.png" rel="icon" />
    <title>MangAsma</title>
</head>

<body>
    <div class="body_center">
        <form action="" method="post" class="formulaire">

            {{ csrf_field() }}

            <h1>Reset</h1>

            <label for="email">Email : </label><br />
            <i class="fas fa-user"></i>
            <input type="email" name="email" id="email" placeholder="Type your email..." size="25">

            <div class="separateur"></div><br />

            <input type="submit" value="Confirm">

            <div class="bloc">
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
            </div>

        </form>
    </div>
</body>

</html>
