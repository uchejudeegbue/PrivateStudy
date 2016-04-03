
<!DOCTYPE html>
    <html>
<head>
    <meta charset="UTF-8"/>
    <title>PHP login Form without Session</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form action="login.php" method="post">
        <label for>Username</label><br>
        <input type="text" name="username" placeholder="username"/>
        <br><br>
        <label for>Password</label>
        <br>
        <input type="text" name="password" placeholder="password"/>
        <br><br>
        <input type="submit" name="submit" value="login"/>

    </form>
    <div class="error"><?php ?><?php ?></div>

</div>
</body>
</html>