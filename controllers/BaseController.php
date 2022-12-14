<?php 

define('VIEW_PATH_NAME', 'views');
define('MODEL_PATH_NAME', 'models');

function view($viewPath, $data = []) {
    if($data) {
        foreach($data as $key => $val) {
            $$key = $val;
        }
    }

    $viewPath = './' . VIEW_PATH_NAME . '/' . str_replace('.' , '/', $viewPath) . '.php';
    require $viewPath;
}

function loadModel($modelPath) {
    $modelPath = './' . MODEL_PATH_NAME . '/' . $modelPath . '.php';
    require $modelPath;
}


?>