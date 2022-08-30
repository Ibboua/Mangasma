<!DOCTYPE html>

@extends('layout')

<html>

<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="produit.css" rel="stylesheet" type="text/css" />
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="logo.png" rel="icon" />
    <title>MangAsma</title>
</head>

<body>

    @section('content')

        <div class="block">
            <div class="block1">
                <img
                    src="https://ec56229aec51f1baff1d-185c3068e22352c56024573e929788ff.ssl.cf1.rackcdn.com/attachments/large/3/1/2/005300312.jpg">
            </div>
            <div class="block2">
                <p class="title">🏴‍☠️ ONE PIECE 🏴‍☠️</p>
                <input class="button" type="button" value="🛒 Add to Card">
                <p class="type">TYPE : Shōnen</p>
                <p class="prix">6,99€</p><br>
                <p class="paragraphe">༺♥༻❀༺♥༻<br>
                    Nous sommes à l'ère des pirates. Luffy, un garçon espiègle, rêve de devenir le roi des pirates en
                    trouvant le “One Piece”, un fabuleux trésor. Seulement, Luffy a avalé un fruit du démon qui l'a
                    transformé en homme élastique. Depuis, il est capable de contorsionner son corps dans tous les sens,
                    mais il a perdu la faculté de nager. Avec l'aide de ses précieux amis, il va devoir affronter de
                    redoutables pirates dans des aventures toujours plus rocambolesques.
                    Également adapté en dessin animé pour la télévision et le cinéma, One Piece remporte un formidable
                    succès à travers le monde. Les aventures de Luffy au chapeau de paille ont désormais gagné tous les
                    lecteurs, qui se passionnent chaque trimestre pour les aventures exceptionnelles de leurs
                    héros.<br>༺♥༻❀༺♥༻</p>
            </div>
        </div>

    @endsection

</body>

</html>
