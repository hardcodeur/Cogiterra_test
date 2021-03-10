<?php

require "./php/bdd/query.php";

function getPageView()
{   
    $dataQuery=getDataQuery($_SERVER['QUERY_STRING']);
    if(is_null($dataQuery)){
       return require './php/views/listing_directories.php';
    }elseif($dataQuery['p'] === 'update' AND isset($dataQuery['id']) AND !empty($dataQuery['id'])){
        if(intval($dataQuery['id']) !== 0){
            return require './php/views/update_directories.php';
        }else {
            redirect404Error();
        }
    }elseif ($dataQuery['p'] === 'save') {
        return require './php/views/save_directories.php';
    }else {
        redirect404Error();
    }
}


function getDataQuery($query){
    if(!empty($query))
    {
        $dataQuery=[];
        $t=explode('&',$query);
        foreach ($t as $key => $value) {
            $data=explode('=',$value);
            $dataQuery[$data[0]]=$data[1];
        }
        return $dataQuery;
    }
    else
    {
        return NULL;
    }

    
}


function redirect404Error(){
    header('HTTP/1.0 404 Not Found');
    exit;
}



