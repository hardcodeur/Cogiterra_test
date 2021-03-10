<?php 
    require './php/treatment/save_treatment.php'
?>

<section>
    <div class="save-title-box">
        <h2>Ajouter une nouvelle entrée</h2>
    </div>
    <div class="tab-box">
        <form method="POST" id="saveForm">
            <fieldset class="">
                <legend>Contact</legend>

                <label for="civilite">Civilité</label>
                <select name="civilite" id="civilite">
                    <option>--Choisir une option--</option>
                    <option value="M">Monsieur</option>
                    <option value="F">Madame</option>
                    <option value="N">Neutre</option>
                </select>


                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom">

                <label for="date_naissance">Date de naissance</label>
                <input type="date" name="date_naissance" id="date_naissance">

                <label for="tel">Télephone</label>
                <input type="tel" name="tel" id="tel">

                <label for="fax">FAX</label>
                <input type="tel" name="fax" id="fax">

                <label for="email">Email</label>
                <input type="email" name="email" id="email">

                <label for="url">URL</label>
                <input type="url" name="url" id="url">

            </fieldset>

            <fieldset>
                <legend>Localisation</legend>

                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse">

                <label for="ville">Ville</label>
                <input type="text" name="ville" id="ville">

                <label for="cp">Code Postal</label>
                <input type="number" name="cp" id="cp"> 

                <label for="pays">Pays</label>
                <input type="text" name="pays" id="pays">

            </fieldset>
        </form>
        <div class="btn-box">
            <button form="saveForm" type="reset">Reset</button>
            <button form="saveForm" form type="submit">Enregistrer</button>
        </div>
    </div>
</section>