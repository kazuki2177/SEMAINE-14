<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail arcticle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php
    require "connexion_bdd.php"; // Inclusion de notre bibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction de connexion

    $pro_id = $_GET["pro_id"];

    $requete = "SELECT * FROM produits join categories on cat_id = pro_cat_id where pro_id=" . $pro_id;
    $result = $db->query($requete);

    // Renvoi de l'enregistrement sous forme d'un objet
    $produit = $result->fetch(PDO::FETCH_OBJ);
    ?>

</head>

<body>
    <div class="container">
        <!--container global de la page-->

        <?php include "Header/header_detail.php"; ?>

        <div class="col-12 d-flex justify-content-center">
            <img src="Src/Img/img_outil/<?= $pro_id ?>" class="w-50" alt="Image produit" title="<?= $pro_id . "." . $produit->pro_photo; ?>">
        </div>



        <form name="Détail produit" id="Détail produit">
            <div class="form-group">
                <label for="pro_id">ID :</label><input type="text" class="form-control" name="pro_id" id="pro_id" value="<?php echo $produit->pro_id ?>" Readonly>
                <label for="pro_ref">Référence :</label><input type="text" class="form-control" name="pro_ref" id="pro_ref" value="<?php echo $produit->pro_ref ?>"Readonly>
                <label for="nomProduit">Catégorie :</label><input type="text" class="form-control" name="nomProduit" id="nomProduit" value="<?php echo $produit->cat_nom ?>"Readonly>
                <label for="pro_libelle">Libéllé produit :</label><input type="text" class="form-control" name="pro_libelle" id="pro_libelle" value="<?php echo $produit->pro_libelle ?>"Readonly>
                <label for="pro_description">Description produit :</label><input type="text" class="form-control" name="pro_description" id="pro_description" value="<?php echo $produit->pro_description ?>"Readonly>
                <label for="pro_prix">Prix :</label><input type="text" class="form-control" name="pro_prix" id="pro_prix" value="<?php echo $produit->pro_prix ?>"Readonly>
                <label for="pro_stock">Stock :</label><input type="text" class="form-control" name="pro_stock" id="pro_stock" value="<?php echo $produit->pro_stock ?>"Readonly>
                <label for="pro_couleur">Couleur Produit :</label><input type="text" class="form-control" name="pro_couleur" id="pro_couleur" value="<?php echo $produit->pro_couleur ?>"Readonly>

            </div>

        </form>
        Produit bloqué&nbsp :
            <div class="form-check form-check-inline">
                 <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque1" value=1>Oui</label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque2" value=0>Non</label>
            </div> 
            <br>
      
            <div>
            Date d'ajout :
                <?php echo $produit->pro_d_ajout ?>
            </div>
            <div>
            Date de modification :
                <?php echo $produit->pro_d_modif ?>
            </div>


        <div class="d-flex justify-content-center" name=actionProduit>
            <a class="btn" href="tableau.php"><button class="btn btn-success">Retour</button></a>
            <a class="btn" href="produits_modif.php?pro_id=<?= $pro_id; ?>"><button class="btn btn-primary">Modifier</button></a>
            <a class="btn" href="produits_suppression.php?pro_id=<?= $pro_id; ?>"><button class="btn btn-primary">Supprimer</button></a>
        </div>

       
            <br>

        <?php include "Footer/footer.php"; ?>


    </div>



    
    <!--fichiers Javascript nécessaires à Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
