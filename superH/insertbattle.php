<?php
include($db_connect.php);
$superHero = $_POST ["superhero"];
$villan = $_POST ["villan"];

$sql = "INSERT INTO battle (superHero, villanFought) VALUES {'superHero', 'villan'}";

if (mysqli_query($db, $sql)){

}else {
    echo "Error " . $sql . "<br>" .mysqli_error($db);
}
header ["location: index.php"];