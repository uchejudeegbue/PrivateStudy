<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row">
        <ul class="nav nav-pills nav-justify">
            <li><a href="insertsuper.php">Insert Super Hero</a></li>
            <li><a href="displaysuper.php">Display Super Hero</a></li>
            <li><a href="insertbattle.php">Insert Battle</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Display Battle</a>

                <ul class="dropdown-menu">
                    <li><a href="allbattle.php">All Battle</a></li>
                    <li><a href="supermanbattle.php">Superman Battle</a></li>
                    <li><a href="spidermanbattle.php">Spiderman Battle</a></li>
                    <li><a href="antmanbattle">Antman Battle</a></li>

                </ul>
            </li>
        </ul>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
            <form action="process.php" method="post">
                <div class="form-group">
                    <label for="personalname">Personal Name</label>
                    <input type="text" class="form-control" name="personalname" placeholder="Enter Personal Name"/>
                </div>

                <div class="form-group">
                    <label for="gender">Male</label>
                    <input type="radio" class="form-control" name="gender" value="male"/>

                    <Label for="gender">Female</Label>
                    <input class="form-control" type="radio" name="gender" value="Female">
                </div>

                <div class="form-group">
                    <label for="power">Main Super Hero Power</label>
                    <input type="text" class="form-control" name="power" placeholder="Enter main super hero power">
                </div>


                <div class="form-group">
                    <input class="btn btn-primary form-control" type="submit" value="submit">
                </div>

            </form>

        </div>

    </div>

</div>

<script src="https://code.jquery.com/jquery-2.2.3.min.js"
        integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>