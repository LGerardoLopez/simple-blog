<?php defined('BASEPATH') OR exit('No direct script access allowed');

// ejemplo url
/*
curl http://newsapi.org/v2/top-headlines -G \
    -d country=us \
    -d apiKey=8ff28e37c6ac4578ac5d4a2f96915466
*/

function get_news($url,$parameters){
    $ci = & get_instance();
    $ci->load->library("Curl"); // se carga library para realizar peticiones 
    if(empty($parameters))return array();

    // se realiza la configuración para obtener noticas con 
    // los parametros            
    $ci->load->library('curl');    
    // Creamos url
    $strparametros = [];    
    foreach ($parameters as $key => $value) {
        $strparametros[] = "$key=$value";
    }        
    $newurl = "$url?" . implode("&", $strparametros);
    // Asignamos URL
    $ci->curl->create($newurl);
    // print_r($parameters["url"]);
    // Tamaño de lo que guardara en memoria
    $ci->curl->option('buffersize', 100);
    // Configuración para soportar diferentes navegadores
    $ci->curl->option('useragent', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.8) Gecko/20100722 Firefox/3.6.8 (.NET CLR 3.5.30729)');    
    $ci->curl->option('returntransfer', 1);    
    $ci->curl->option('followlocation', 1);    
    $ci->curl->option('HEADER', false);    
    $ci->curl->option('connecttimeout', 600); // por default se queda en 600
    // obtenemos la respuesta
    
    $data = $ci->curl->execute();
    // print_r($data);
    // devolvemos respuesta
    return json_decode($data, true);

}

