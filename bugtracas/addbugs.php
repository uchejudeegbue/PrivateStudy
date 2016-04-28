<?php
include('connect.php');
if(isset($_POST['bugname']) && isset($_POST['bugs']) && isset($_POST['summary'])){
    $bugname = $_POST['bugname'];
    $bugs = $_POST['bugs'];
    $summary = $_POST['summary'];

    $sql = "INSERT INTO bugtracas (bugName, bugSummary, bugCategory)
            VALUES ('$bugname', '$summary', '$bugs')";

    if($push = mysqli_query($db, $sql)){
        header("Location: showbugs.php");
    }else{
        header("Location: index.php");
    }


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bugtracas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--Start of header-->
<header>


    <img id="logo" src="logo.png"/>


    <div class="header">
        <h2>Bug Tracker</h2>

        <p>Keeping track of all pesky little bugs</p>
    </div>
</header>
<!--End of header-->

<!--Start of main-->
<main>

    <div class="nav">
        <nav>
            <ul>
                <li><a href="index.php">All Bug Items</a></li>
                <li><a href="showbugs.php">Android Bugs</a></li>
                <li><a href="showbugs.php">iOS Bugs</a></li>
                <li><a href="showbugs.php">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a></li>
            </ul>
        </nav>
    </div>

    <div class="article">

        <form action="<? $_SERVER["PHP_SELF"] ?>" method="post">
            <label>Bug Name</label>
            <label>
                <input type="text" name="bugname" required/>
            </label><br><br>
            <label>Bug Summary</label>
            <label>
                <textarea row="5px" col="50px" required name="summary"></textarea>
            </label><br><br>
            <label>Bug Category</label>
            <label>
                <select name="bugs" required>

                    <option value="Android">Android</option>
                    <option value="Windows">Windows</option>
                    <option value="iOS">iOS</option>
                </select>

            </label><br><br>

            <label>
                <input type="submit" value="submit" required/>
            </label>

        </form>
    </div>
</main>
<!--end of main-->

<!--Start of footer-->
<footer>
    Designed by [Uche Jude Egbue, 2016]
</footer>
<!--end of footer-->
</body>
</html>
