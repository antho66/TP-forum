<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="view/page_entre.css">
        <title>inscription-connection</title>
    </head>
    <body>
      
      <div class="center">

<div class="inscription">

<h1>Inscription</h1>

<form action="formvalid.php" metho="post" >

     <label>Prénom</label>
        <input type="text" name="prenon">
         <br />

        <label>Nom</label>
        <input type="text" name="nom">
        <br />

        <label>Username</label>
        <input type="text" name="username">
           <br />

        <label>password</label>
         <input type="text" name="mdp">
          <br />

         <label>Password Confirmation</label>
         <input type="text" name="confirmemdp">
          <br />

         <label>E-mail</label>
         <input type="text" name="mail">
           <br />

         <input type="submit" value="envoyer">
         <input type="reset" value="effacer">
         
</form>
<?php if(!empty($error)) {echo '<span style="color:red>"'.$error.'<span>';} else {echo "<br />";} ?>
       </div>

       <div class="connexion">

<form action="connection.php" metho="post" >
        <h1>Connection</h1>

          <label>username</label>
        <input type="text" name="username">
         <br />

        <label>password</label>
         <input type="text" name="mdp">
         <br />
         
         <input type="submit" value="connection">
         <input type="reset" value="effacer">
</form>
       </div>
       
       </div>
    </body>
</html>

