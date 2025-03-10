<?php

/**
 * @throws Exception
 */
function router() {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $routes = require 'routes.php';
    $requestMethod = $_SERVER['REQUEST_METHOD'];
    $matched_uri = exactMatchUriFromArrayRoutes($uri, $routes[$requestMethod]);
    $params_formatted = [];
    if(empty($matched_uri)) {
        $matched_uri = regexMatchArrRoutes($uri, $routes[$requestMethod]);
        $uri_components = explode('/', ltrim($uri, '/'));
        $params = params($uri_components, $matched_uri);
        $params_formatted = formatParameters($uri_components, $params);
    }

    if(!empty($matched_uri)) {
        return controller($matched_uri, $params_formatted);
    }

    throw new Exception("No route found for $uri");
}

function params(array $uri, array $matched_uri): array {
    if(!empty($matched_uri)) {
        $paramsFromUri = array_keys($matched_uri)[0];
        return array_diff(
            $uri,
            explode('/', ltrim($paramsFromUri, '/'))
        );
    }
    return [];
}

function formatParameters(array $uri, array $params): array {
    $params_formatted = [];
    foreach($params as $index => $param) {
        $params_formatted[$uri[$index - 1]] = $param;
    }
    return $params_formatted;
}

function exactMatchUriFromArrayRoutes(string $uri, array $routes): array {
    return array_key_exists($uri, $routes) ? [ $uri => $routes[$uri]]: [];
}

function regexMatchArrRoutes(string $uri, array $routes): array {
    return array_filter(
        $routes,
        function ($route) use ($uri) {
            $regex = str_replace('/', '\/', ltrim($route, '/'));
            return preg_match("/^$regex$/", ltrim($uri, '/'));
        },
        ARRAY_FILTER_USE_KEY
    );
}
