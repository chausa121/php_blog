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

    //databas uppgfiter
    $host = 'localhost';
    $user = 'ramlinger_user';
    $pass = 'ramlinger_pass';
    $database = 'alex_db';

    $conn = new mysqli($host, $user, $pass, $database);

    if ($conn->connect_error)
        die("Något gick fel" . $conn->connect_error);

    $sql = "SELECT * FROM bloggen (rubrik, inlagg) VALUES ('$rubrik', '$inlagg') ";

    $result = $conn->query($sql);

    if (!$result)
        die("Kunde inte hämta inlägg: " . $conn->Error);
    else
        echo "<h2>Alla inlägg i bloggen</h2>";

        echo "<p>Hittat" .  $result->num_rows . "inlägg</p>";

        while ($row = $result->fetch_assoc()) {
            echo "<article>";
            echo "<h3> . $row['rubrik'] .</h3>";
            echo "<h4> . $row['tidstampel'] .</h4>";
            echo "<p> . $row['inlagg'] .</p>";
            echo "<article>";
        }
    $result->free();
    $conn->close();
?>
</body>
</html>
