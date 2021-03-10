<?php

function notXss($data){
    $cleanData=[];
    foreach ($data as $key => $value) {
        $cleanData[$key]=strip_tags($value);
    }

    return $cleanData;

}


function formCheck($data){
    $errors = [];

    if(!isset($data['civilite']) OR ($data['civilite'] !== 'M' AND $data['civilite'] !== 'F' AND $data['civilite'] !== 'N' )  ){
        $errors[] = 'Champ civilite invalide';
    }

    if(!isset($data['nom']) OR empty($data['nom']) OR strlen($data['nom']) > 20){
        $errors[] = 'Champ nom invalide';
    }

    if(!isset($data['date_naissance']) OR empty($data['date_naissance'])){
        $errors[] = 'Champ date de naissance invalide';
    }

    if(!isset($data['tel']) OR !is_numeric($data['tel']) OR strlen($data['tel']) != 10 ){
        $errors[] = 'Champ téléphone invalide';
    }

    if(!isset($data['fax']) OR !is_numeric($data['fax']) OR strlen($data['fax']) != 10 ){
        $errors[] = 'Champ fax invalide';
    }

    if(!isset($data['email']) OR !filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = 'Champ email invalide';
    }

    if(!isset($data['url']) OR !filter_var($data['url'], FILTER_VALIDATE_URL)){
        $errors[] = 'Champ url invalide';
    }

    if(!isset($data['adresse']) OR empty($data['adresse'])){
        $errors[] = 'Champ adresse invalide';
    }

    if(!isset($data['ville']) OR empty($data['ville'])){
        $errors[] = 'Champ ville invalide';
    }

    if(!isset($data['cp']) OR empty($data['cp']) OR strlen($data['cp']) != 5){
        $errors[] = 'Champ code postal invalide';
    }

    if(!isset($data['pays']) OR empty($data['pays'])){
        $errors[] = 'Champ pays invalide';
    }

    if(empty($errors)){
        return null;
    }else {
        return $errors;
    }

}