<!DOCTYPE html>

<html>

<head>
    <link href="layout.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <div class="menu_header">
            <div class="body_center">

                <div class="logo">
                    <img src="logo.png" width="50" />
                    <p>MangAsma</p>
                </div>

                <div class="search_bloc">
                    <span class="separateur"></span>
                    <label for="search"><i class="fas fa-search"></i></label>
                    <input type="text" class="search" id="search" name="search"
                        placeholder="Rechercher un manga..." size="30">
                    <span class="separateur"></span>
                </div>

                <div class="bloc_menu">
                    <nav>
                        <a href="catalogue.php">Catalogue</a>
                    </nav>
                </div>

                <div class="bloc_menu">
                    <nav>
                        <a href="panier.php">Panier</a>
                    </nav>
                </div>

                <div class="username">
                    @auth
                        <h2> {{ Auth::user()->name }} </h2>
                    </div>
                    <div>
                        <nav>
                            <a target="_blank" class="power" href="logout"><i class="fas fa-power-off"></i></a>
                        </nav>
                    </div>
                @endauth
                @guest
                    <div>
                        <a href="login.php" class="login">Login</a>
                    </div>
                </div>
            @endguest
        </div>
        </div>
    </header>

    @yield('content')

    <div class="footer_parent">
        <footer>
            <div class="social">
                <a target="_blank" class="facebook" href="https://fr-fr.facebook.com/mangasma/"><i
                        class="fab fa-facebook"></i></a>
                <a target="_blank" class="twitter" href="https://twitter.com/mangasma"><i
                        class="fab fa-twitter"></i></a>
            </div>
            <p class="copy">©️ Copyright - All Right Reserved</p>
        </footer>
    </div>

</body>

</html>
