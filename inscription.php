<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- Responsive design Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS file -->
        <link rel="stylesheet" href="Fil_Rouge.css">

        <!-- Bootstrap CSS 4.5.3 import from CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title> Inscription </title>
    </head>

    <body>
        <main>
            <!-- PAGE HEAD -->
            <?php
                if (file_exists("header.php"))
                {
                    include("header.php");
                }
                else
                {
                    echo "file 'header.php' n'existe pas";
                }
            ?>


            <!-- PAGE CONTENT -->
            <form>
            
                <section class="inscription">
                    <h1> Créez vos identifiants </h1>
                    
                    <label for="mail"> E-mail </label>
                    <input id="mail" type="email" name="email" placeholder="Saissiez votre adresse mail" required> 
                    <br>

                    <label for="mdp"> Créez votre mot de passe </label>
                    <input id="mdp" type="password" name="password" placeholder="Saissiez votre mot de passe" required>

                    <label for="confirm"> Confirmation mot de passe </label>
                    <input id="confirm" type="password" name="confirmPassword" placeholder="Confirmer votre mot de passe" required>
                    <br><br><br><br>
                    
                    <div class="identifiant">
                        <label for="name"> Prénom </label>
                        <input id="name" type="text" name="firstName"> 
                        <br>

                        <label for="surname"> Nom </label>
                        <input id="surname" type="text" name="lastName"> 
                        <br>
                    
                        <label for="adr"> Adresse </label>
                        <input id="adr" type="text" name="adresse"> 
                        <br>

                        <label for="adr2"> Complément d’adresse </label>
                        <input id="adr2" type="text" name="comp_adresse"> 
                        <br>

                        <label for="cp"> Code Postal </label>
                        <input id="cp" type="text" name="codePostal"> 
                        <br>

                        <label for="city"> Ville </label>
                        <input id="city" type="text" name="ville"> 
                        <br>

                        <label for="country"> Pays </label>
                        <input id="country" type="text" name="pays"> 
                    </div>

                    <div>
                        <img src="INSCRIPTION/CADRE numero.png" alt="cadre"  id="imageCadre">
                    </div>

                    <div id="boutonValider">
                        <a href="#"> <img src="INSCRIPTION/bouton valider.png" alt="valider"> </a>
                    </div>

                    <div>
                        <img src="INSCRIPTION/bas de page pictos.png" alt="picto" id="pictos">
                    </div>  
                </section>
            </form>
        </main>

        
        <!-- PAGE FOOT -->
        <?php
            if (file_exists("footer.php"))
            {
                include("footer.php");
            }
            else
            {
                echo "file 'footer.php' n'existe pas";
            }
        ?>



        <!-- Fichier JavaScript -->
        <script src="Fil_Rouge_navbar.js"></script>
    </body>
</html>