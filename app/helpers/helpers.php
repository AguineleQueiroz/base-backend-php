<?php

function view($viewPath, $data = []) {
    $filePath = str_replace('.', '/', $viewPath) . '.php';
    $fullPath = str_replace('\\', '/', PATH_VIEWS . $filePath);
    //var_dump($filePath, file_exists($fullPath));
    if (!file_exists($fullPath)) {
        throw new Exception("View $fullPath does not exist");
    }

    extract($data);
    return require $fullPath;
}