<?php
session_start();
?>
<html>
    <body>
        <head>
            <link href="style.css" rel="stylesheet" type="text/css">
            <meta charset="UTF_8">
            <title>Login Screen</title>
        </head>
            <div class="TelaLogin">
                <form action="login.php" method="post">
                <h1>Login</h1>
                <?php
                if(isset($_SESSION['nao_autenticado'])){
                ?>
                 <div id="erro"> <center>Error</center><br>
                      Invalid username or password </div>
                <?php
                unset($_SESSION['nao_autenticado']); 
                };
                ?>
                <p>User</p> <input type="text" name="user" placeholder="Enter your username">
                <p>Password</p><input type="password" name="password" >
                <br><br>
                <input type="submit" name="logar" value="Login" id="botao">
            </div>
            </form>
    </body>
</html>