<?php
function group1 ($old_array){
    $new_array = array();
    foreach ($old_array as $item)
        if (!in_array($item->categorie, $new_array))
            array_push($new_array, $item->categorie,);
    asort($new_array);
    return $new_array;
}