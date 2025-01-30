<?php

use app\classes\Engine;

function view(string $view, array $data = []): false|string {
    try {
        $engine = new Engine();
        echo $engine->render($view, $data);
    } catch (Throwable $throwable) {
        var_dump($throwable->getMessage());
    }
}
