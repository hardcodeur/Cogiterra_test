<?php 
    require './php/treatment/listing_treatment.php'
?>

<section>
    <div class="listing-box">
    <?php foreach ($listingData as $data){ ?>
        <div class="card-box">
            <div class="card-title">
                <h4><?= $data->nom ?></h4>
            </div>
            <div class="card-info">
                <div class="info-contact">
                    <h4>Contact</h4>
                    <p>Sexe: <?= $data->civilite?></p>
                    <p>Date de naissance : <?= $data->date_naissance?></p>
                    <p>Téléphone : <?= $data->tel?></p>
                    <p>FAX : <?= $data->fax?></p>
                    <p>Email: <?= $data->email?></p>
                    <p>URL : <?= $data->url?></p>
                </div>
                <div class="info-localisation ">
                    <h4>localisation</h4>
                    <p>Adresse: <?= $data->adresse ?></p>
                    <p>Ville: <?= $data->ville?></p>
                    <p>Code Postal: <?= $data->cp?></p>
                    <p>Pays: <?= $data->pays?></p>
                </div>
            </div>
            <div class="card-footer">
            <button>
                <a target="_blank"  href="<?= $_SERVER['PHP_SELF'].'?p=update&id='.$data->id ?>">
                    Modifier
                </a>
            </button>
            </div>
        </div>
    <?php } ?>
    </div>
</section>