<!DOCTYPE html>

@extends('layout')

<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="panier.css" rel="stylesheet" type="text/css" />
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="logo.png" rel="icon" />
    <title>MangAsma</title>
</head>

<body>

    @section('content')

        <h1>🛒 Panier 🛒</h1>

        <table class="panier">
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
            <tr>
                <td>Naruto Shippuden ↬ Tome 41</td>
                <td>6.99€</td>
                <td><input type="number" name="quantity" id="quantity" placeholder="Quantité"></td>
            </tr>
            <tr>
                <td>Boku no Pico ↬ Tome Spéciale</td>
                <td>13.99€</td>
                <td><input type="number" name="quantity" id="quantity" placeholder="Quantité"></td>
            </tr>
            <tr>
                <th>Total</th>
                <td>...€</td>
                <td>...</td>
            </tr>
        </table>

        <div class="button">
            <button class="clear">Vider mon panier</button>
            <button class="confirm">Valider mon panier</button>
        </div>

    @endsection

</body>

</html>
