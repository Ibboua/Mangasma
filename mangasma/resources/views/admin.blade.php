<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="admin.css" rel="stylesheet" type="text/css" />
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="logo.png" rel="icon" />
    <title>MangAsma</title>
</head>

<body>
    <form action="" method="post" class="formulaire">

        {{ csrf_field() }}

        <h1>Admin</h1>

        <label for="name">Product Name :</label><br />
        <input type="text" name="name" id="name" placeholder="Type the product name...">

        <div class="separateur"></div><br />

        <label for="tome">Tome n° :</label><br />
        <input type=number name="tome" id="tome" placeholder="Type the tome number...">

        <div class="separateur"></div><br />

        <label for="type">Type :</label><br />
        <input type="text" name="type" id="type" placeholder="Type the type...">

        <div class="separateur"></div><br />

        <label for="price">Price :</label><br />
        <input type="number" name="price" id="price" placeholder="Type the price...">

        <div class="separateur"></div><br />

        <label for="picture">Picture :</label><br />
        <input type="file" name="picture" id="picture" accept="image/png, image/jpeg">

        <div class="separateur"></div><br />

        <input type="submit" value="Add Product">

    </form>
</body>

</html>
