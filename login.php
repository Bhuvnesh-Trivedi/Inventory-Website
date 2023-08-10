<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet"  href="style.css">

</head>
<body>
    
    <div class="login_header">IMS</div>
    <div class="login_require">please fill you registered username and password</div>

<center>

    <p>Login</p>
<div  class="login_form">
<form action="login_process.php" method="POST">

    <input type="text" id="user" name="username" placeholder="username"/><br><br>
    <input type="text" id="pass" name="password" placeholder="password"/><br><br>
    <button type="submit" id="btn" name="login" default>login</button>
</div>

</form>

</center>

</body>
</html>