<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!--container global de la page-->
        <?php include "Header/header_detail.php"; ?>



        <!-- Formulaire d'inscription-->

        <form action="" method="post" id="formulaire_inscription">
            <div class="form-group">
                <p>*Tous les champs sont obligatoires</p>
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
                    <div class="form-group">
                        <label>Email*</label>
                        <input type="email" placeholder="dave.loper@afpa.fr" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Login*</label>
                        <input type="text" name="Login" placeholder="Veuillez saisir un login" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Mot de passe*</label>
                        <input type="text" name="password" placeholder="Veuillez saisir un mot de passe" class="form-control" required>
                    </div>
                </fieldset>

                
                <button name="Envoyer" type="submit" name="submit" value="submit" id="submit" class="btn btn-dark btn-outline-primary">Inscription</button>
                <button name="annuler" type="button" name="" id="efface" value="" class="btn  btn-dark btn-outline-primary">Annuler</button>
            </div>
        </form>










        <?php include "Footer/footer.php"; ?>
    </div>
    <!--fichiers Javascript nécessaires à Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>