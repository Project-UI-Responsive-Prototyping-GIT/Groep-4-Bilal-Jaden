<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Jaden van de Kant">
    <meta description="Golden Dragon">
    <meta keywords="Chinees restaurant, Golden Dragon, Aziatische keuken, Wokgerechten, Dim sum, Peking eend, Zoetzure kip, Chow mein, Cantonese gerechten, Chinese specialiteiten, Szechuan keuken, Oosterse smaken, Knapperige wontons, golden dragon menu, Kantonese keuken, Chinese culinaire ervaring, Fortune cookies, Chinese thee, Eetstokjes, Rijstgerechten">
    <link rel="stylesheet" href="css/style.css">
    <script src="herkansing.js" defer></script>
    <title>Golden Dragon</title>
</head>

<body>
    <?php require 'header.php'?>
    <main>
        <section class="eten">
            <?php
            $gerechten = array(
                "voorgerecht" => array(
                    array("naam" => "Dim Sum", "prijs" => 6.99, "vega" => "Nee", "afbeelding" => "dimsum.jpeg"),
                    array("naam" => "Loempia's", "prijs" => 5.99, "vega" => "Ja", "afbeelding" => "loempia.jpg"),
                ),
                "hoofdgerecht" => array(
                    array("naam" => "Peking Eend", "prijs" => 15.05, "vega" => "Nee", "afbeelding" => "peking.jpg"),
                    array("naam" => "Vegetarische Chow Mein", "prijs" => 12.95, "vega" => "Ja", "afbeelding" => "chowmein.jpg"),
                    array("naam" => "Gerookte garnalen", "prijs" => 16.95, "vega" => "nee", "afbeelding" => "eten3.jpg"),
                    array("naam" => "Kip met rijst", "prijs" => 11.95, "vega" => "nee", "afbeelding" => "eten1.jpg"),
                    array("naam" => "Bami", "prijs" => 7.95, "vega" => "mogelijk", "afbeelding" => "eten7.jpg"),
                ),
                "nagerecht" => array(
                    array("naam" => "Lychee Sorbet", "prijs" => 3.99, "vega" => "Ja", "afbeelding" => "lychee.jpg"),
                    array("naam" => "Gebakken Banaan", "prijs" => 4.99, "vega" => "Ja", "afbeelding" => "gebakkenbanaan.jpg"),
                )
            );

            $alleGerechten = true;

            foreach ($gerechten as $soort => $gerecht) {
                echo "<section class='gang'>";
                foreach ($gerecht as $item) {
                    if ($alleGerechten || ($soort == "voorgerecht" || $soort == "nagerecht")) {
                        $class = ($soort == "hoofdgerecht") ? "hoofdgerecht" : "";
                        echo "<article class='$class'>";
                        echo "<img src='images/" . $item["afbeelding"] . "' alt='" . $item["naam"] . "'>";
                        echo "<p>Naam: " . $item["naam"] . "</p>";
                        echo "<p>Prijs: €" . number_format($item["prijs"], 2) . "</p>";
                        echo "<p>Vega: " . $item["vega"] . "</p>";
                        echo "</article>";
                    }
                }
                echo "</section>";
            }
            ?>
        </section>
    </main>
    <?php require 'footer.php'?>
<!-- 
    deze moest ik maken voor bijles -->
</body>
</html>
