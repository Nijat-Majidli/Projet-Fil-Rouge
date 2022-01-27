<!-- PAGE HEAD -->
<?php
    if (file_exists("header.php")){
        include("header.php");
    }
    else{
        echo "file 'header.php' n'existe pas";
    }
?>

<!-- PAGE CONTENT -->
<h4 class="text-center my-3"> Espace Client </h4>
<div class="text-center">     
    <form action="#" method="post">
        <p> <input type="email" name="email" placeholder="Adresse e-mail"> </p> 
        <p class="mb-0"> <input type="password" name="password" placeholder="Mot de passe"> </p> 
        <a href="#" style="font-size:80%;"> Mot de passe oublié ? </a> 
        <p> <input type="checkbox"> <span> Rester connecté </span>  </p>
        <input type="submit" value="Se connecter" class="submit"> 
    </form>
</div>

<div>
    <h6 class="my-2"> N'êtes-vous pas déjà client ? </h6>
    <span class="annonce"> 
        En tant que client Village Green vous pouvez suivre vos envoies, lire des 
        tests produits exclusifs, évaluer des produits, déposer des petites annonces, 
        gérer vos chèques-cadeaux, devenir partenaire et bien plus encore.
    </span>
    <a href="inscription.php"> <input type="submit" value="S'inscrire" class="submit"> </a> 
    <span> <a href="#"> Pour plus d'informations  </a> </span>
</div>

<!-- PAGE FOOT -->
<?php
    if (file_exists("footer.php")){
        include("footer.php");
    }
    else{
        echo "file 'footer.php' n'existe pas";
    }
?>