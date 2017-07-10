<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profil</title>
</head>
<body>
    bieenvenut sur votre profil<br>

     <a href="index.php?page=login">se deconnecter</a>
    <h2><?php echo $user[0]?></h2>
    <div><?php  echo $description ?></div>
</body>
</html>