<?php

use app\config\Env;

/**
 * @throws Exception
 */
function connect(): ?PDO {
    Env::load();
    $connect = null;
    try {
        $connect = new PDO(
            "mysql:host=" .
            Env::get('DB_HOST', '127.0.0.1') .
            ";dbname=" .
            Env::get('DB_NAME'),
            Env::get('DB_USER'),
            Env::get('DB_PASS')
        );
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $connect->exec("set names utf8");
    } catch(PDOException $e) {
        echo "Connection error: " . $e->getMessage();
    }

    return $connect;
}