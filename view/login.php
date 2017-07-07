<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
    </head>
    <body>
        This is the login page<br>
        <?php
            if(isset($username)){
                echo $username;
            }
        ?>
        <form action="services/connexionForm.php" method="post">
                <input type="text" name="username">
                <input type="text" name="mdp">

                <input type="submit" value="send">
        </form>

        <form action="services/inscriptionForm.php" method="post">
                <input type="text" name="username">
                <input type="text" name="mdp">

                <input type="submit" value="send">
        </form>


        Go to the <a href="index.php?page=wall">Wall</a>
    </body>
</html>

