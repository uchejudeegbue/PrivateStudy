<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <img id="logo" src="logo.png" alt="logo"/>


    <h1>Bug Tracker</h1>

    <p id = p1>Keeping track of all the pesky little bugs</p>

</header>
<content>
    <div class="nav">
        <nav>
            <ul>
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
            </ul>
        </nav>
    </div>

    <div class="para">
       <p>Please go to the index page and add a bug</p>
    </div>

</content>
<footer>
    Designed by Uche Jude Egbue, 2016.
</footer>
</div>
</body>
</html>

<?php

include ('connect.php');

if (empty ($_POST['bugName'])||(empty ($_POST['bugSummary']))||(empty($_POST['bugCategory']))){
    echo "All fields are required";
}
else {
    $bugName = $_POST['bugName'];
    $bugSummary = $_POST ['budSummary'];
    $bugCategory = $_POST ['bugCategory'];

    $sql = "INSERT INTO bugtracker (bugName, bugSummary, bugCategory) VALUES ('$bugName', '$bugSummary', '$bugCategory')";
    mysqli_query ($db, $sql);
}



if (mysqli_query($db,$sql)){
    header ("location:showbugs.php");
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error ($db);
}
?>