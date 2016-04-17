<?php

include ("db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

<h1>The following names are registered on the site</h1>
<ul>
    <?php
    $sql_query = "SELECT * FROM names";
    $result = $db->query($sql_query);
    while ($row = $result ->fetch_array()){
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        echo "<li>My name is  {$firstname}" . " " . "{$lastname}</li>";

    }

   ?>
</ul>
</body>


</html>