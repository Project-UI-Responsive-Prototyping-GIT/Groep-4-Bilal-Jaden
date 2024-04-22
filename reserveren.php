<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Jaden van de Kant, B. Bazaine">
    <meta description="Golden Dragon">
    <meta keywords="Chinees restaurant, Golden Dragon, Aziatische keuken, Wokgerechten, Dim sum, Peking eend, Zoetzure kip, Chow mein, Cantonese gerechten, Chinese specialiteiten, Szechuan keuken, Oosterse smaken, Knapperige wontons, golden dragon menu, Kantonese keuken, Chinese culinaire ervaring, Fortune cookies, Chinese thee, Eetstokjes, Rijstgerechten">
    <link rel="stylesheet" href="css/style.css">
    <title>Golden Dragon</title>
    
</head>

<body>
    <?php require 'header.php'?>
    <main>
        <div class="reserveren">
            <form id="contact" action="mail.php" method="post">
                <h1>Reserveer hier</h1>
                <fieldset>
                    <input placeholder="Voornaam" name="first_name" type="text" tabindex="1" autofocus required>
                </fieldset>
                <fieldset>
                    <input placeholder="Tussenvoegsel" name="middle_name" type="text" tabindex="2">
                </fieldset>
                <fieldset>
                    <input placeholder="Achternaam" name="last_name" type="text" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Telefoonnummer" name="phone" type="tel" tabindex="4" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Emailadres" name="email" type="email" tabindex="5" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Aantal personen" name="number_of_people" type="number" min="1" tabindex="6" required>
                </fieldset>
                <fieldset>
                    <label for="reservation_datetime">Kies de datum:</label>
                    <input name="reservation_datetime" type="date" required>
                </fieldset>
                <fieldset>
                    <label for="tijd">Tijd:</label>
                    <select name="tijd" id="tijd">
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        <option value="20:00">20:00</option>
                        <option value="21:00">21:00</option>
                    </select>
                </fieldset>
                <fieldset>
                    <button type="submit" name="send" id="contact-submit">Reservering Bevestigen</button>
                </fieldset>
            </form>
        </div>
    </main>
    <?php require 'footer.php'?>

</body>

</html>