<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Superhero System</title>
</head>
<body>
<header>
    <h1> The Super-Superhero System</h1>
</header>
<p>What would you like to do?</p>
<ul>
    <li><a href="insertSuperhero.php">Insert a Superhero</a></li>
    <li><a href="displaySuperheros.php"> Display all Superheros</a></li>
    <li><a href="battle.php">Insert a Battle</a></li>
    <li><a href="displayBattles.php">Display all Battles</a></li>
</ul>
<?php
include("db_connect.php");
$sql_query = "SELECT * FROM superheros";
$result = $db->query($sql_query);
while ($row = $result->fetch_array()) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $id = $row ['superHero'];
    echo "<li><a href='displayBattles.php?id={$id}'>Battles for {$firstname} {$lastname}</a>";
}
?>

</body>


</html>
