<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8"/>
    <title>Spara inlägg</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    // Ta emot data från formuläret
    $rubrik = $_POST['rubrik'];
    $inlagg = $_POST['inlagg'];

    $inlagg = nl2br($_POST['inlagg'],false);

    //databas uppgfiter
    $host = 'localhost';
    $user = 'ramlinger_user';
    $pass = 'ramlinger_pass';
    $database = 'alex_db';

    $conn = new mysqli($host, $user, $pass, $database);

    if ($conn->connect_error)
        die("Något gick fel" . $conn->connect_error);

    $sql = "INSERT INTO bloggen (rubrik, inlagg) VALUES ('$rubrik', '$inlagg') ";

    $result = $conn->query($sql);

    if (!$result)
        die("Kunde inte spara inlägg: " . $conn->Error);
    else
        echo "<h3>Ditt inlägg är registrerat</h3>";

    $conn->close();
?>
</body>
</html>
