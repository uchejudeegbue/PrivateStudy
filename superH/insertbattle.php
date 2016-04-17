<?php
include($db_connect.php);
$superhero = $_POST ["superhero"];
$villan = $_POST ["villan"];

$sql = "INSERT INTO battle (superhero, villanfought) VALUES {'superhero', 'villan'}";

if (mysqli_query($db, $sql)){

}else {
    echo "Error " . $sql . "<br>" .mysqli_error($db);
}
header ["location: index.php"];