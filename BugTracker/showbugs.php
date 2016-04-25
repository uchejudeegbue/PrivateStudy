<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header>
        <img id="logo" src="logo.png" alt="logo"/>


        <h1>Bug Tracker</h1>

        <p id = p1>Keeping track of all the pesky little bugs</p>

    </header>
    <contect>
        <div class="nav">
            <nav>
                <li><a href="bugs.html">All Bug Items</a>
                    <ul>
                        <li><a href="addbugs.html">Add Bug</a></li>
                        <li><a href="showbugs.html">Show Bug</a></li>
                    </ul>
                </li>
                <li><a href="androidbugs.html">Andriod Bugs</a></li>
                <li><a href="iosbugs.html">iOS Bugs</a></li>
                <li><a href="windowsbugs.html">Windows Bugs</a></li>
                <li><a href="insertbug.html">Insert Bug</a></li>
            </nav>
        </div>


        <div class="para">
            <form>
                <Label for>Bug Name</Label><br>
                <input type="text" name="Bug Name" required><br>
                <label for>Bug Category</label><br>
                <input type="text" name="Bug Category" required><br>
                <label for>Bug Summary</label><br>
                <input type="text" name="Bug Summary" required>
                <br>
                <hr>
                <Label for>Bug Name</Label><br>
                <input type="text" name="Bug Name"><br>
                <label for>Bug Category</label><br>
                <input type="text" name="Bug Category"><br>
                <label for>Bug Summary</label><br>
                <input type="text" name="Bug Summary">
            </form>
        </div>

    </contect>
    <footer>
        Designed by Uche Jude Egbue, 2016
    </footer>
</div>
</body>
</html>

<?php

include ("connect.php");

$sql_query = "SELECT * FROM bugtracker";

$result = $db->query ($sql_query);

while ($row = $result->fetch_array()){
    $bugName = $row['bugName'];
    $bugSummary = $row['bugSummary'];
    $bugCategory = $row['bugCategory'];

}
echo "My name is " . "{$bugName}" . " " . "{$bugSummary}" . " " . "{$bugCategory}" . "<br>";


?>