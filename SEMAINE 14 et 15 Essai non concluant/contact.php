<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Formulaire</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
    <div class="container">
        <!-- Début de page -->

        <?php include "Header/header_contact.php"; ?>

        <!-- Formulaire coordonnées-->

        <form action="http://bienvu.net/script.php" method="post" id="formulaire_contact">
            <div class="form-group">
                <p>*Ces zones sont obligatoires</p>
                <fieldset>
                    <legend>
                        <h2>Vos coordonnées</h2>
                    </legend>
                    <div class="form-group">
                        <label>Nom*</label>
                        <input type="text" name="nom" placeholder="Veuillez saisir votre nom" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Prénom*</label>
                        <input type="text" name="prénom" id="prénom" placeholder="Veuillez saisir votre nom" class="form-control" required>
                    </div>
                    <div class="form-group" required>
                        <label>Sexe*</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Féminin" value="option1" required>
                            <label class="form-check-label" for="Féminin">Féminin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Masculin" value="option2" required>
                            <label class="form-check-label" for="Masculin">Masculin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Neutre" value="option3" required>
                            <label class="form-check-label" for="Neutre">Neutre</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Date de naissance*</label>
                        <input type="date" name="ddn" placeholder="jj/mm/aaaa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Code postal*</label>
                        <input type="text" name="code postal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" name="Adresse" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ville</label>
                        <input type="text" name="ville" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email*</label>
                        <input type="email" placeholder="dave.loper@afpa.fr" class="form-control" required>
                    </div>
                </fieldset>
                <!-- Formulaire Demande -->
                <form action="http://bienvu.net/script.php" method="post" id="formulaire_contact" class="form-inline">
                    <fieldset>
                        <legend>
                            <h2>Votre demande</h2>
                        </legend>

                        <div class="">
                            <label class="my-1 mr-2">Sujet*</label>
                            <select id="Sujet" class="custom-select" required>
                                <option value="">Veuillez séléctionner un sujet</option>
                                <option value="Mescommandes">Mes commandes</option>
                                <option value="Questionsurunproduit">Question sur un produit</option>
                                <option value="Réclamation">Réclamation</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label>Votre question*:</label>
                            <textarea name="Votre réclamation" cols="20" rows="2" class="form-control" required></textarea>
                        </div>

                    </fieldset>
                </form>
                <div class="form-check">
                    <input type="checkbox" name="*validation formulaire" class=" form-check-input" value="" required>
                    <label for="" class=" form-check-label">*J'accepte le traitemant informatique de ce formulaire</label><br><br>
                </div>
                <button name="Envoyer" type="submit" value="submit" class="btn btn-dark btn-outline-primary">Envoyer</button>
                <button name="annuler" type="reset" value="" class="btn  btn-dark btn-outline-primary">Annuler</button>
            </div>
        </form>

        <!-- Bas de page -->

        <?php include "Footer/footer.php"; ?>

    </div>
    <!-- script boostrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>