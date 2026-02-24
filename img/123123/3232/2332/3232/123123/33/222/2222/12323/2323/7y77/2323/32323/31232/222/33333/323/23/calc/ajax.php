<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

$token = 'MGW4CTD8BB0Y23MRVH6BAY20EVBD4DCBSINZTLGYAO6SMWKI8Y2I6VCCCJKE4GF3';
$action = htmlspecialchars($_POST['action'], ENT_HTML5 | ENT_QUOTES);

if($action == 'getCityShipment'){
    $q = htmlspecialchars($_POST['q'], ENT_HTML5 | ENT_QUOTES);
    $json = file_get_contents('http://62.109.31.113/api/v1/get/city_list/?q='.$q.'&key='.$token);
    
}elseif($action == 'getCityReceived'){
    $shipment_city_id = htmlspecialchars($_POST['shipment_city_id'], ENT_HTML5 | ENT_QUOTES);
    $q = htmlspecialchars($_POST['q'], ENT_HTML5 | ENT_QUOTES);
    //echo 'http://62.109.31.113/api/v1/get/received_city_list_by_city_id/?shipment_city_id='.$shipment_city_id.'&q='.$q.'&key='.$token;
    $json = file_get_contents('http://62.109.31.113/api/v1/get/received_city_list_by_city_id/?shipment_city_id='.$shipment_city_id.'&q='.$q.'&key='.$token);
    
}elseif($action == 'getTerminals'){
    $city_id = htmlspecialchars($_POST['city_id'], ENT_HTML5 | ENT_QUOTES);
    $json = file_get_contents('http://62.109.31.113/api/v1/get/terminals_list_by_city_id/?city_id='.$city_id.'&key='.$token);
    
}elseif($action == 'calc'){
    $shipment_city_id = htmlspecialchars($_POST['shipment_city_id'], ENT_HTML5 | ENT_QUOTES);
    $received_city_id = htmlspecialchars($_POST['received_city_id'], ENT_HTML5 | ENT_QUOTES);
    $weight = htmlspecialchars($_POST['weight'], ENT_HTML5 | ENT_QUOTES);
    $volume = htmlspecialchars($_POST['volume'], ENT_HTML5 | ENT_QUOTES);
    $lathing = (htmlspecialchars($_POST['lathing'], ENT_HTML5 | ENT_QUOTES) == 'Y') ? 1 : 0;
    $warm = (htmlspecialchars($_POST['extra_warm'], ENT_HTML5 | ENT_QUOTES) == 'Y') ? 1 : 0;
    $shipment_intake = (htmlspecialchars($_POST['shipment_intake'], ENT_HTML5 | ENT_QUOTES) == 'Y') ? 1 : 0;
    $received_intake = (htmlspecialchars($_POST['received_intake'], ENT_HTML5 | ENT_QUOTES) == 'Y') ? 1 : 0;
    
    //echo 'http://62.109.31.113/api/v1/calc/terminal_terminal/?shipment_city_id='.$shipment_city_id.'&received_city_id='.$received_city_id.'&weight='.$weight.'&volume='.$volume.'&lathing='.$lathing.'&warm='.$warm.'&key='.$token;
    if($shipment_intake == 0 && $received_intake == 0){
        $json = file_get_contents('http://62.109.31.113/api/v1/calc/terminal_terminal/?shipment_city_id='.$shipment_city_id.'&received_city_id='.$received_city_id.'&weight='.$weight.'&volume='.$volume.'&lathing='.$lathing.'&warm='.$warm.'&key='.$token);
    }elseif($shipment_intake == 1 && $received_intake == 0){
        $json = file_get_contents('http://62.109.31.113/api/v1/calc/door_terminal/?shipment_city_id='.$shipment_city_id.'&received_city_id='.$received_city_id.'&weight='.$weight.'&volume='.$volume.'&lathing='.$lathing.'&warm='.$warm.'&key='.$token);
    }elseif($shipment_intake == 0 && $received_intake == 1){
        $json = file_get_contents('http://62.109.31.113/api/v1/calc/terminal_door/?shipment_city_id='.$shipment_city_id.'&received_city_id='.$received_city_id.'&weight='.$weight.'&volume='.$volume.'&lathing='.$lathing.'&warm='.$warm.'&key='.$token);
    }elseif($shipment_intake == 1 && $received_intake == 1){
        $json = file_get_contents('http://62.109.31.113/api/v1/calc/door_door/?shipment_city_id='.$shipment_city_id.'&received_city_id='.$received_city_id.'&weight='.$weight.'&volume='.$volume.'&lathing='.$lathing.'&warm='.$warm.'&key='.$token);
    }
    
}

echo $json;