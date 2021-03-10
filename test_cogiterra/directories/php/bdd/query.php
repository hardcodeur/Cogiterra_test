<?php 

require './php/bdd/config.php';

try{
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB.';charset=utf8',USER, PASSWORD);
}
catch(Exception $e)
{
    die('Erreur : ' .$e->getMessage());
    
}

GLOBAL $pdo;

function SelectAllData(){
    $query=$GLOBALS['pdo']->query('SELECT * FROM directories_table');
    $res=$query->fetchAll(PDO::FETCH_CLASS);
    return $res;
}


function SelectDataById($id){
    $query=$GLOBALS['pdo']->prepare('SELECT `civilite`, `nom`, `adresse`, `cp`, `ville`, `pays`, `date_naissance`, `tel`, `fax`, `email`, `url` FROM `directories_table` WHERE `id`=:id');
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
    $res=$query->fetchObject();
    return $res;
}


function updateDataById($id,$data){
    $query=$GLOBALS['pdo']->prepare('UPDATE `directories_table` SET `civilite`=:civilite,`nom`=:nom,`adresse`=:adresse,`cp`=:cp,`ville`=:ville,`pays`=:pays,`date_naissance`=:date_naissance,`tel`=:tel,`fax`=:fax,`email`=:email,`url`=:url WHERE `id`=:id');
    $query->bindValue(':civilite',$data['civilite'],PDO::PARAM_STR);
    $query->bindValue(':nom',$data['nom'],PDO::PARAM_STR);
    $query->bindValue(':adresse',$data['adresse'],PDO::PARAM_STR);
    $query->bindValue(':cp',$data['cp'],PDO::PARAM_STR);
    $query->bindValue(':ville',$data['ville'],PDO::PARAM_STR);
    $query->bindValue(':pays',$data['pays'],PDO::PARAM_STR);
    $query->bindValue(':date_naissance',$data['date_naissance']);
    $query->bindValue(':tel',$data['tel'],PDO::PARAM_STR);
    $query->bindValue(':fax',$data['fax'],PDO::PARAM_STR);
    $query->bindValue(':email',$data['email'],PDO::PARAM_STR);
    $query->bindValue(':url',$data['url'],PDO::PARAM_STR);
    $query->bindValue(':id',$id,PDO::PARAM_INT);
    $query->execute();
}


function insertData($data){
    $query=$GLOBALS['pdo']->prepare('INSERT INTO `directories_table`(`civilite`, `nom`, `adresse`, `cp`, `ville`, `pays`, `date_naissance`, `tel`, `fax`, `email`, `url`) VALUES (:civilite,:nom,:adresse,:cp,:ville,:pays,:date_naissance,:tel,:fax,:email,:url)');
    $query->bindValue(':civilite',$data['civilite'],PDO::PARAM_STR);
    $query->bindValue(':nom',$data['nom'],PDO::PARAM_STR);
    $query->bindValue(':adresse',$data['adresse'],PDO::PARAM_STR);
    $query->bindValue(':cp',$data['cp'],PDO::PARAM_STR);
    $query->bindValue(':ville',$data['ville'],PDO::PARAM_STR);
    $query->bindValue(':pays',$data['pays'],PDO::PARAM_STR);
    $query->bindValue(':date_naissance',$data['date_naissance']);
    $query->bindValue(':tel',$data['tel'],PDO::PARAM_STR);
    $query->bindValue(':fax',$data['fax'],PDO::PARAM_STR);
    $query->bindValue(':email',$data['email'],PDO::PARAM_STR);
    $query->bindValue(':url',$data['url'],PDO::PARAM_STR);
    $query->execute();
}
