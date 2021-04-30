<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajout produit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" ,shrink-to-fit=no>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php
    require_once "connexion_bdd.php"; // Inclusion de notrebibliothèque de fonctions
    $db = connexionBase(); // Appel de la fonction deconnexion

    $requete = "SELECT * FROM categories";

    $result = $db->query($requete);

    // Renvoi de l'enregistrement sous forme d'un objet
    $categorie = $result->fetch(PDO::FETCH_OBJ);
    ?>
</head>

<body>
    <div class="container">
        <!--container global de la page-->

        <?php include "Header/header_detail.php"; ?>
        <!-- Lien vers le header de la page -->


        <h1>Ajout d'un produit</h1>
        <form name="ajoutProduit" id="ajout produit" method="post" action="produits_ajout_script.php" enctype="multipart/form-data">
            <label for="cat_id">Nom catégorie</label>
            <select class="form-control" name="cat_nom" id="cat_nom">
                <?php
                while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                    echo "<option value=" . $row->cat_id . ">" . $row->cat_nom . "</option>";
                }
                ?>
            </select>
            <div class="form-group">
                <label for="pro_ref">Réference produit</label><input type="text" class="form-control" name="pro_ref" id="pro_ref" >
                <label for="pro_libelle">Libéllé produit</label><input type="text" class="form-control" name="pro_libelle" id="pro_libelle" >
                <label for="pro_description">Description produit</label><input type="text" class="form-control" name="pro_description" id="pro_description" >
                <label for="pro_prix">Prix</label><input type="number" class="form-control" name="pro_prix" id="pro_prix" >
                <label for="pro_stock">Quantité en stock</label><input type="number" class="form-control" name="pro_stock" id="pro_stock" >
                <label for="pro_couleur">Couleur Produit</label><input type="text" class="form-control" name="pro_couleur" id="pro_couleur" >
                <label for="pro_photo">Extension de la photo :</label>
                <select class="form-control" name="pro_photo" id="pro_photo">
                    <option>jpg</option>
                    <option>png</option>
                    <option>gif</option>
                </select>
            </div>
            <b>Produit bloqué&nbsp&nbsp<b>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque1" value=1>bloque</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="pro_bloque"><input class="form-check-input" type="radio" name="pro_bloque" id="pro_bloque2" value=0>Non bloque</label>
                    </div>
                    <br>
                    <br>
                    <label for="pro_d_ajout">Date d'ajout :</label><input type="text" class="form-control" name="pro_d_ajout" id="pro_d_ajout" value='<?php echo date("yy-m-d"); ?>' Readonly>
                    <br>
                    <label for="fichier">Photo :&nbsp&nbsp</label>
                    <br>

                    <input type="file" name="fichier">
                    <br>
                    <br>
                    <div class="d-flex justify-content-center" name=actionProduit>
                        <button class="btn btn-primary" type="submit" name="submit" value="1">Ajouter</button>
                        <a href="tableau.php" class="btn btn-success ml-1" type="button" id="efface">Annuler</a>
                    </div>
        </form>

        <br>



        <br>
        <?php include 'Footer/footer.php'; ?>



    </div>


    <!--fichiers Javascript nécessaires à Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>