<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8"/>
    <title>Skriva blogginlägg</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Registrera inlägg</h2>
    <form action="save_db.php" method="post">
        <label>Rubrik</label><input type="text" maxlength="100" Name="rubrik">
        <label>Text</label><textarea name="inlagg"></textarea><br>
        <input type="submit" value="Spara">
    </form>
</body>
</html>
