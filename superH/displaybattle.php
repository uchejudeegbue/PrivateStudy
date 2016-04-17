<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Superhero System</title>
</head>

<body>
<header>
    <h1> The Super-Superhero System</h1>
    <h2>Display all Battles</h2>
    <p><a href="index.php"> Return to home</a></p>
</header>

<main>
    <?php
    include("$db_connect.php");

    if (isset($_GET['id'])){
        $superhero = $_GET['id'];
        $sql_query = "SELECT * FROM superherobattles WHERE superhero = $superhero";
    }
    else{
    $sql_query = "SELECT * FROM superherobattles";
    }

    $result = $db->query ($sql_query);
    while ($row = $result-> fetch_array()){
        $firstname = $row ['firstname'];
        $lastname = $row ['lastname'];
        $mainsuperpower = $row ['mainsuperpower'];
        $villanfought = $row ['villanfought'];
        echo "<article> <p>The Superhero known as <strong>{$firstname}</strong> recently fought <strong>{$villanfought}</strong>
using <strong>{mainsuperpower}</strong></p>";
    }
    ?>
</main>
</body>
</html>