<nav>
    <div class="row">
        <ul>
            <div class="col-1 menu"></div>
            <div class="col-2 menu">
                <li class="menu"><a href="index.php">Startseite</a></li>
            </div>
            <div class="col-1 menu"></div>
            <div class="col-2 menu">
                <li class="menu">
                    <div class="center">
                        
                        <label for="click" class="click-me">Anmelden</label>
                        <input type="checkbox" id="click">
                        
                        <div class="content">
                            <div class="text">
                                ANMELDEN
                            </div>
                            <label for="click" class="loginPopup" id="temp">x</label>
                            <form method="POST">
                                <label for="username" class="loginPopup">E-Mail-Adresse</label>
                                <input class="loginPopupInput" type="text" placeholder="Deine E-Mail-Adresse" id="username" name="email">

                                <label for="password" class="loginPopup">Password</label>
                                <input class="loginPopupInput" type="password" placeholder="Dein Password" id="password">
                                
                                <label for="stayLogged">Angemeldet bleiben</label>
                                <input type="checkbox">

                                <button>Anmelden</button>
                                    <p><a id="loginPopup-reg" href="pwForgot.php">Du hast dein Passwort vergessen?</a></p>
                                <div class="row">
                                    <div class="col">
                                        <p id="loginPopup-reg">Hier gehts zur <a id="loginPopup-reg" href="signup.php">Registrierung</a>!</p>
                                    </div>
                                </div>                                
                            </form>
                        </div>
                    </div>
                </li>
            </div>

            <div class="col-1 menu"></div>
            <div class="col-2 menu">
                <li><a href="about.php">Wissensdatenbank</a></li>
            </div>

            <div class="col-1 menu"></div>
            <div class="col-2 menu">
                <li><a href="about.php">Warenkorb</a></li>
            </div>

            <div class="col-1 menu"></div>
            <div class="col-2 menu">
                <li><a href="about.php">Shop</a></li>
            </div>
        </ul>    
    </div>
</nav>