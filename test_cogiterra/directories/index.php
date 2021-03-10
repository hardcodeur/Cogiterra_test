<?php 
    require "./php/router.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Annuaire</title>
</head>
<body>
    <nav class="nav-box">
        <div class="nav-title">
            <h1>Annuaire</h1>
        </div>
        <div class="nav-action">
            <button>
                <a href="<?= $_SERVER['PHP_SELF'] ?>">Listing des entrées</a>
            </button>
            <button>
                <a href="<?= $_SERVER['PHP_SELF'].'?p=save' ?>">Ajouter une entrée</a>
            </button>
        </div>
    </nav>
    
<?php getPageView() ?>

<footer>
    <p>Bilal_Belmehdi</p>
</footer>
<script src="js/app.js"></script>
</body>
</html>