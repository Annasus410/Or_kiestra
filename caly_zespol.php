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
                <div id="logo">
                    <img src=pictures/OR_kiestra.png height="100%">
                </div>
                <div id="menu">
                    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&display=swap" rel="stylesheet">

                    <a href="index.html">
                        <h2 id="home">Home</h2>
                    </a>



                    <a href="onas.html">
                        <h2 id="onas">O nas</h2>
                    </a>



                    <a href="koncerty.html">
                        <h2 id="koncerty">Koncerty</h2>
                    </a>
                    <a href="kontakt.html">
                        <h2 id="kontakt">Kontakt</h2>
                    </a>


                </div>
                <div id="social_media">
                    <a href="https://www.instagram.com/or_kiestra_official/"> <img src="pictures/instagram.png" alt="instargram"></a>
                    <a href="https://www.facebook.com/mlodziezowa.niezalezna.orkiestra.i.chor/"> <img src="pictures/fb.png" alt="facebook"></a>
                    <a href="https://www.youtube.com/channel/UCK9oxUbBHnkmQ_Vjsg2MONg"><img src="pictures/yt.png" alt="youtube"></a>
                </div>
            </div>


        </header>
        <div id="calosc_zespol">

            <div class="tekst">
                <div class="srodek">

                    <?php
                    $conn = new mysqli("localhost", "17_sus", "L4r6r1c2g4", "17_sus") or die("Błąd");

                    $wynik = $conn->query("SELECT * FROM sklad_zespolu");

                    if ($wynik->num_rows > 0) {
                        while ($wiersz = $wynik->fetch_assoc()) {
                            echo $wiersz["imie"] . "; ";
                            echo $wiersz["nazwisko"] . ";<br>";
                        }
                    } else {
                        echo "Pusta baza";
                    }


                    $conn->close();

                    ?>

                </div>
            </div>

        </div>
        <footer>


            <div class="rectangle2">2020 &copy; Anna Sus</div>

        </footer>

</body>

</html>