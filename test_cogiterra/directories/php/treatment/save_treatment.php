<?php

require "./php/treatment/form_treatment.php";


if(!empty($_POST)){

    $errors=formCheck($_POST);

    if(is_null($errors)){

        $dataClean=notXss($_POST);
        insertData($dataClean);
        header('Location:'.$_SERVER['PHP_SELF']);

    }else {
        foreach($errors as $error){
            echo '<div class="error-box">
            <p>'.$error.'</p>
            </div>';
        }
    }


}