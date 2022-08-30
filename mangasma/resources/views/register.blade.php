<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="register.css" rel="stylesheet" type="text/css" />
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="logo.png" rel="icon" />
    <title>MangAsma</title>
</head>

<body>
    <div class="body_center">
        <form method="post" class="formulaire">

            {{ csrf_field() }}

            <h1>Register</h1>

            <label for="name">Name : </label><br />
            <i class="fas fa-user"></i>
            <input type="text" name="name" id="name" placeholder="Type your name..." size="25">

            <div class="separateur"></div><br />

            <label for="email">Email : </label><br />
            <i class="fas fa-at"></i>
            <input type="email" name="email" id="email" placeholder="Type your email..." size="25">

            <div class="separateur"></div><br />

            <label for="password">Password : </label><br />
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Type your password..." size="25">

            <div class="separateur"></div><br />

            <label for="password_check">Confirmation Password : </label><br />
            <i class="fas fa-lock"></i>
            <input type="password" name="password_check" id="password_check" placeholder="Confirm your password..."
                size="25">

            <div class="separateur"></div><br />

            <input type="submit" value="Register"><br />

            <div class="bloc">
                <nav>
                    <a href="login.php">Login</a>
                </nav>
            </div>

        </form>
    </div>
</body>

</html>
