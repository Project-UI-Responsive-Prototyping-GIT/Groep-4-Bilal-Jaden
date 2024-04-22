<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Golden Dragon">
    <meta name="author" content="B.bazaine & Jaden van de kant">
    <meta name="keywords"
        content="Golden Dragon, Restaurant, Chinese Cuisine, Authentic Chinese Food, Fine Dining, Chinese Restaurant, Menu Selection">
    <title>Golden Dragon</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php include 'header.php' ?>
<body>
    <main class="reservering">
        <h1>Bedankt voor uw reservering!</h1>
        <p>Details van uw reservering:</p>
        <ul>
            <li><b>Naam:</b> <?php echo htmlspecialchars($_GET["name"]); ?></li>
            <li><b>Telefoonnummer:</b> <?php echo htmlspecialchars($_GET["phone"]); ?></li>
            <li><b>Emailadres:</b> <?php echo htmlspecialchars($_GET["email"]); ?></li>
            <li><b>Aantal personen:</b> <?php echo htmlspecialchars($_GET["num_people"]); ?></li>
            <li><b>Datum:</b> <?php echo htmlspecialchars($_GET["date"]); ?></li>
            <li><b>Tijd:</b> <?php echo htmlspecialchars($_GET["time"]); ?></li>
        </ul>
        <p>U ontvangt ook nog een mailtje met deze info</p>
    </main>
    <?php include 'footer.php' ?>
</body>
</html>
