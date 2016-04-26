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

    <p id=p1>Keeping track of all the pesky little bugs</p>

</header>
<main>
    <div class="nav">
        <nav>
            <ul>
                <li><a href="addbugs.php">All Bug Items</a>
                    <ul>
                        <li><a href="addbugs.php">Add Bug</a></li>
                        <li><a href="showbugs.php">Show Bug</a></li>
                    </ul>
                </li>
                <li><a href="bugs.html">Andriod Bugs</a></li>
                <li><a href="bugs.html">iOS Bugs</a></li>
                <li><a href="bugs.html">Windows Bugs</a></li>
                <li><a href="bugs.html">Insert Bug</a></li>
            </ul>
        </nav>
    </div>

    <div class="para">
        <form action="<? {$_SERVER['PHP_SELF'];} ?>" method="post">
            <label>Bug Name</label>
            <label>
                <input type="text" name="bugname">
            </label><br><br>
            <label>Bug Summary</label>
            <label>
                <textarea name="summary" rows="3" cols="20"></textarea>
            </label><br><br>
            <label>Bug Category
                <select name="bug">
                    <option value="Android">Android</option>
                    <option value="iOS">iOS</option>
                    <option value="Windows">Windows</option>
                </select></label><br><br>
            <input type="submit" value="submit"><br>
            <br>

        </form>
    </div>


</main>
<footer>
    Designed by Uche Jude Egbue, 2016
</footer>
<? include('connect.php') ?>
<? if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header("location:addbugs.php");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bugname = $_POST['bugname'];
    $bugsummary = $_POST['summary'];
    $category = $_POST['bug'];

    $sql = "INSERT INTO bugtracker (bugName,bugSummary,bugCategory) VALUES ('$bugname','$bugsummary','$category')";
    if (mysqli_query($db, $sql)) {
        header("location:showbugs.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}
else{header("location:addbugs.php");}
?>
</body>
</html>