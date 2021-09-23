<?php

    // All products, Current products and previous products display
    $filterProducts = [];

    if(isset($_GET["curr"]) || isset($_GET["prev"])){
        foreach($retrieveItems as $item) {
            if(isset($_GET["curr"]) && $item["status"] == "In Stock") {
                array_push($filterProducts, $item);
            } else if (isset($_GET["prev"]) && $item["status"] == "Previous Item") {
                array_push($filterProducts, $item);
            }
        }
    } else {
        $filterProducts = $retrieveItems;
    }

    // Search function
    if(isset($_GET['search']) && $_GET['search'] !== '' && isset($_GET['filter'])){
        $filterProducts = [];
        foreach($retrieveItems as $item){
            if($_GET['filter'] === $item['status'] || $_GET['filter'] === 'all'){
                if(strpos(strtolower($item['name']), strtolower($_GET['search'])) !== false || 
                    strpos(strtolower($item['manufacturer']), strtolower($_GET['search'])) !== false || 
                    strpos(strtolower($item['description']), strtolower($_GET['search'])) !== false) {
                        array_push($filterProducts, $item);
                }
            }
        }
    }

    // Category filter
    if(isset($_GET['category'])){
        $filterProducts = [];
        foreach($retrieveItems as $item){
            if($_GET['category'] == $item['category']){
                array_push($filterProducts, $item);
            }
        }
    }

?>