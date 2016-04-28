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
                <li><a href="index.html">All Bug Items</a></li>
                <li><a href="showbugs.html">Android Bugs</a></li>
                <li><a href="showbugs.html">iOS Bugs</a></li>
                <li><a href="showbugs.html">Windows Bugs</a></li>
                <li><a href="addbugs.html">Insert Bug</a></li>
            </ul>
        </nav>
    </div>

    <div class="article">

        <?php

        include('connect.php');

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
</main>
<!--end of main-->

<!--Start of footer-->
<footer>
    Designed by [Uche Jude Egbue, 2016]
</footer>
<!--end of footer-->
</body>
</html>