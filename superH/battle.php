<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Insert Superhero</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Record a Battle</h2>
    <p><a href="index.php">Return to home</a></p>
</header>

<main>
<form action="insertbattle.php" method="post">
    <p>Select the Superhero that fought in the battle</p>
    <select name="superhero">
        <?php
    include($db_connect.php);
        $sql_query = 'SELECT * FROM superheros';
        $result = $db->query ($sql_query);
        while ($rwo = $result->fetch_array()) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $mainSuperPower = $row ['mainSuperPower'];
            echo "<option value={$superHero}>{$firstname}{$lastname}</option>";
            }
?>
    </select><br>
    <input type="text" name="villan" placeholder="Villan Fought"><br>
    <input ype="submit" text="Record Battle">
</form>
</main>
</body>
</html>