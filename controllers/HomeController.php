<?php 
loadModel('HomeModel');
$data = null;

function index() {
    global $data;
    $products = getProduct();
    $categorys = getCategory();
    view('layouts/index', [
        'content' => 'home/index',
        $data = [
            'products' => $products,
            'categorys' => $categorys
        ]
    ]);
}

?>