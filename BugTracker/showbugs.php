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
            <?php
            $sql = "SELECT bugName, bugSummary, bugCategory
            FROM bugtracker ";
            $result = mysqli_query($db,$sql);
            echo "
            <table>
                <tr>
                    <th>bugName </th>
                    <th>bugSummary</th>
                    <th>bugCategory</th>

                </tr> ";

                if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                    <td>".$row['bugName']."</td>
                    <td>".$row['bugSummary']."</td>
                    <td>".$row['bugCategory']."</td>

                </tr>";
                }
                }
                echo "</table>";
?>

        </div>


    <footer>
        Designed by Uche Jude Egbue, 2016
    </footer>
</div>
</body>
</html>


