<?php 
    require './php/treatment/update_treatment.php'
?>




<section>
    <?php if($dataById){ ?>
    <div class="save-title-box">
        <h2>Modifier <?= $dataById->nom ?></h2>
    </div>
    <div class="tab-box">
        <form method="POST" id="updateForm">
            <fieldset>
                <legend>Contact</legend>

                <label for="civilite">Civilité</label>
                <select name="civilite" id="civilite">
                <option>--Choisir une option--</option>
                    <option <?php if($dataById->civilite == "M"){echo 'selected';} ?> value="M">Monsieur</option>
                    <option <?php if($dataById->civilite == "F"){echo 'selected';} ?> value="F">Madame</option>
                    <option <?php if($dataById->civilite == "N"){echo 'selected';} ?> value="N">Neutre</option>
                </select>


                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" value="<?= $dataById->nom ?>">

                <label for="date_naissance">Date de naissance</label>
                <input type="date" name="date_naissance" value="<?= $dataById->date_naissance ?>" id="date_naissance">

                <label for="tel">Télephone</label>
                <input type="tel" value="<?= $dataById->tel ?>" name="tel" id="tel">

                <label for="fax">FAX</label>
                <input type="tel" name="fax" id="fax" value="<?= $dataById->fax ?>">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $dataById->email ?>">

                <label for="url">URL</label>
                <input type="url" name="url" id="url" value="<?= $dataById->url ?>">

            </fieldset>

            <fieldset>
                <legend>Localisation</legend>
                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" value="<?= $dataById->adresse ?>">

                <label for="ville">Ville</label>
                <input type="text" name="ville" id="ville" value="<?= $dataById->ville ?>">

                <label for="cp">Code Postal</label>
                <input type="number" name="cp" id="cp" value="<?= $dataById->cp ?>"> 

                <label for="pays">Pays</label>
                <input type="text" name="pays" id="pays" value="<?= $dataById->pays ?>">

            </fieldset>
        </form>
        <div class="btn-box">
            <button form="updateForm" type="reset">Reset</button>
            <button form="updateForm" form type="submit">Modifier</button>
        </div>
    </div>
    <?php }
          else
          {
    ?>
            <div>
                <h6>L'utilisateur n'existe pas</h6>
                <a href="<?= $_SERVER['PHP_SELF'] ?>">Retour au listing</a>
            </div>

    <?php } ?>
</section>