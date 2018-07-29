<?php
function createCartObject($id, $sl)
{
    return [
        'product' => $id,
        'soluong' => $sl,
    ];
}
function pr($el)
{
    echo "<pre>";
    print_r($el);
    echo "</pre>";
    exit;
}
