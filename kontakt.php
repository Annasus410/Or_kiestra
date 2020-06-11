<html>


<head>
    <meta charset="utf-8">
    <title>Or_kiestra</title>
    <meta name="description" content="Strona o zespole muzycznym Or_kiestra">
    <meta name="author" content="Anna Sus">
    <link rel="shortcut icon" href="pictures/ikona.png">
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
    <div id="calosc">
        <header>
            <div id="top">
                <div id="logo"><a href="index.html">
                        <img src=pictures/OR_kiestra.png height="100%"></a>
                </div>
                <div id="menu">
                    <a href="index.html">
                        <h2 id="home">Home</h2>
                    </a>


                    <a href="onas.html">
                        <h2 id="onas">O&nbspnas</h2>
                    </a>

                    <a href="koncerty.html">
                        <h2 id="koncerty">Koncerty</h2>
                    </a>

                    <a href="kontakt.php">
                        <h2 id="kontakt">Kontakt</h2>
                    </a>

                    <a href="o_serwisie.html">
                        <h2 id="oserwisie">O&nbspserwisie</h2>
                    </a>
                </div>
                <div id="social_media">
                    <a href="https://www.instagram.com/or_kiestra_official/"> <img src="pictures/instagram.png" alt="instargram"></a>
                    <a href="https://www.facebook.com/mlodziezowa.niezalezna.orkiestra.i.chor/"> <img src="pictures/fb.png" alt="facebook"></a>
                    <a href="https://www.youtube.com/channel/UCK9oxUbBHnkmQ_Vjsg2MONg"><img src="pictures/yt.png" alt="youtube"></a>
                </div>
            </div>


        </header>
        <div id="caloskontakt">

            <div class="tekst">
                <div class="srodek" id="naglowek_kontakt">

                    <h1>Chcesz się z nami skontaktować?</h1>
                    <br>
                    <h1>Wyślij do nas wiadomość poprzez poniższy formularz!</h1>

                    <?php
                    if (isset($_POST["imie"])) {
                        $imie = $_POST["imie"];
                        $nazwisko = $_POST["nazwisko"];
                        $email = $_POST["tekst"];
                        $tekst = $_POST["email"];


                        if (empty($imie) || empty($nazwisko) || empty($tekst) || empty($email)) {
                            echo "<span id='wypelnij'>" . "Wypełnij wszystkie pola!" . "</span>";
                        } else {

                            $conn = new mysqli("localhost", "17_sus", "L4r6r1c2g4", "17_sus");

                            $odp = $conn->query("INSERT INTO wiadomosci(imie, nazwisko, tekst, email) VALUES ('$imie', '$nazwisko', '$tekst','$email')");

                            if ($odp) {
                                echo "<span id='wyslane'>" . "Wysłano!" . "</span>";
                            } else {
                                echo "<span id='blad'>" . "Nie udało się wysłać wiadomości!" . "</span>";
                            }
                            $conn->close();
                        }
                    }

                    ?>
                    <div class="formularz">
                        <form method="POST" action="kontakt.php">

                            <input name="imie" placeholder="Wpisz swoje imię" type="text" id="imie">
                            <br>

                            <input name="nazwisko" placeholder="Wpisz swoje nazwisko" type="text" id="nazwisko">
                            <br>

                            <textarea name="tekst" placeholder="Napisz wiadomość"></textarea><br>


                            <input name="email" placeholder="Wpisz swój e-mail" type="email" id="email">
                            <input type="submit" name="wyslij" id="submit" value="Wyślij">
                        </form>
                    </div>

                </div>

                </p>
            </div>
        </div>


        <footer>
            <div id="mail">
                <h3>or_kiestra@gmail.com</h2>

                    <img src="pictures/email2.jpg" alt="ikona_maila">

            </div>
            <div id="telefon">
                <h3>543-132-928</h2>
                    <img src="pictures/telefon2.png" alt="ikona">

            </div>




        </footer>
    </div>
</body>

</html>