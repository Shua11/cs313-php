<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <div class="form">
        <h2>Sign up for new account</h2>

        <form id="mainForm" action="createAccount.php" method="POST">
            <div class="input">
                <div class="inputBox">
                    <label>Username</label>
                    <input type="text" id="txtUser" name="txtUser" placeholder="johndoe@qwe.com">
                </div>
                <div class="inputBox">
                    <label>Password</label>
                    <input type="password" id="txtPassword" name="txtPassword" name="" placeholder="********"></input>
                </div>
                <div class="inputBox">
                    <input type="submit" name="" value="Create Account">
                </div>
            </div>
        </form>
        <p class="forgot"> Write Down Your Forgot Your Password.</p>
        <a class="forgot" href="index.php">Cancel</a>
    </div>
</body>
</html>