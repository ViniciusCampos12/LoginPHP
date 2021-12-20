<html>
    <body>
        <head>
            <link href="style.css" rel="stylesheet" type="text/css">
            <meta charset="UTF_8">
            <title>Home</title>
        </head>
    </body>
</html>
<?php
require("checkLogin.php");
?>
<h2><?php echo "Hello, " . $_SESSION['user'];?></h2>
<h2><a href="logout.php">Logout</a></h2>