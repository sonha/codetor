<?php
/**
 * TODO : Codeto Training PHP
 * @author : SonHA (hason61vn@gmail.com)
 */
 
 function array2xml($array, $xml = false){

    if($xml === false){
        $xml = new SimpleXMLElement('<result/>');
    }

    foreach($array as $key => $value){
        if(is_array($value)){
            array2xml($value, $xml->addChild($key));
        } else {
            $xml->addChild($key, $value);
        }
    }

    return $xml->asXML();
}

$xml_string = '<mxGraphModel dx="866" dy="510" grid="1" gridSize="10" guides="1" tooltips="1" connect="1" arrows="1" fold="1" page="1" pageScale="1" pageWidth="850" pageHeight="1100" background="#ffffff"><root><mxCell id="0"/><mxCell id="1" parent="0"/><mxCell id="2" value="" style="ellipse;whiteSpace=wrap;html=1;aspect=fixed;" parent="1" vertex="1"><mxGeometry x="140" y="160" width="80" height="80" as="geometry"/></mxCell><mxCell id="3" value="" style="ellipse;whiteSpace=wrap;html=1;" parent="1" vertex="1"><mxGeometry x="250" y="160" width="80" height="80" as="geometry"/></mxCell><mxCell id="4" value="" style="ellipse;whiteSpace=wrap;html=1;aspect=fixed;" parent="1" vertex="1"><mxGeometry x="140" y="260" width="80" height="80" as="geometry"/></mxCell><mxCell id="5" value="" style="ellipse;whiteSpace=wrap;html=1;aspect=fixed;" parent="1" vertex="1"><mxGeometry x="250" y="260" width="80" height="80" as="geometry"/></mxCell><mxCell id="6" value="" style="rounded=0;whiteSpace=wrap;html=1;" vertex="1" parent="1"><mxGeometry x="390" y="180" width="120" height="60" as="geometry"/></mxCell></root></mxGraphModel>';
$xml = simplexml_load_string($xml_string);
$json = json_encode($xml);
$array = json_decode($json,TRUE);

$data_new = array2xml($array);
var_dump($xml_string);







?>