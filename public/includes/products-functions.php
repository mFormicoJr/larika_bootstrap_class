<?php

    function getAllProducts() : array{

    $jsonFilePath = '../assets/products.json';

    $jsonString = file_get_contents($jsonFilePath);

    $jsonData = json_decode($jsonString, true);
 
    return $jsonData;

}

    function getAllProductsOfType(string $type) : array{

        $result = [];

        foreach(getAllProducts() as $item){

            if($item['type'] == $type){
                $result[] = $item;
            }
        }
        return $result;
    }

?>