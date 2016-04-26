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
<main>
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
        <form action="<? {$_SERVER['PHP_SELF'];}?>" method="post">
            <label>Bug Name</label>
            <input type="text" name="bugname"><br><br>
            <label>Bug Summary</label>
            <textarea rows="3" cols="20"></textarea><br><br>
            <label>Bug Category
                <select name="Bug">
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


</body>
</html>