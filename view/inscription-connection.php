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



            <form action="services/inscriptionService.php" method="post" >
            <h1>Inscription</h1>
                <label>Prénom</label>
                    <input type="text" name="prenom">
                    <br />
                    <br />
                    <label>Nom</label>
                    <input type="text" name="nom">
                    <br />
                    <br />
                    <label>Username</label>
                    <input type="text" name="username">
                    <br />
                    <br />

                    <label>password</label>
                    <input type="password" name="mdp">
                    <br />
                    <br />

                    <label>Password Confirmation</label>
                    <input type="password" name="confirmemdp">
                    <br />
                    <br />

                    <label>E-mail</label>
                    <input type="text" name="mail">
                    <br />
                    <br />

                    <input type="submit" value="envoyer">
                    <input type="reset" value="effacer">
                    <br>
                    <br />
                    <?php
                        
                    if(empty($_SESSION["erreur"]) == false) {
                        $er = $_SESSION["erreur"];
                        foreach($er as $key => $typerreur){
                            // echo "$key => $typerreur <br />";

                            if($typerreur == 'mdp8caractere'){
                            echo "mot de passe a  8 caractere <br /> ";
                            }
                            if($typerreur == 'mdpnonsimilaire'){
                            echo "ce mot de passe ne similaire au precedent <br /> ";
                            }

                            if($typerreur == 'username4caractere'){
                            echo "username doit avoir au moin  4 caractére <br /> ";
                            }

                            if($typerreur == 'emailincorrect'){
                            echo "email imcomplet <br /> ";
                            }

                            if($typerreur == 'champvide'){
                            echo "tout les champ ne sont pas remplie <br /> ";
                            }


                        }
                        //  var_dump($_SESSION["erreur"]);
                        //  die();
                    }
                    ?>
            </form>
            </div>
    <h1> Deviens un vrait mineur en elaborant des strategie ou en te developent dans le minage </h1>
            <div class="connexion">

                    <form action="services/connexionservice.php" method="post" >
                            <h1>Connexion</h1>

                            <label>username</label>
                            <input type="text" name="username">
                            <br />
                             <br />
                            <label>password</label>
                            <input type="password" name="mdp">
                            <br />
                            <br />
                            <input type="submit" value="connection">
                            <input type="reset" value="effacer">
                    </form>
            </div>
       
       </div>
    </body>
</html>

