<?php

require "./php/treatment/form_treatment.php";

$dataById=SelectDataById($_GET['id']);


if(!empty($_POST)){

    $errors=formCheck($_POST);

    if(is_null($errors)){

        $dataClean=notXss($_POST);
        updateDataById($_GET['id'],$dataClean);
        header('Location:'.$_SERVER['PHP_SELF'].'?p=update&id='.$_GET['id']);

    }else {
        foreach($errors as $error){
            echo '<div class="error-box">
            <p>'.$error.'</p>
            </div>';
        }
    }


}