<?php

namespace app\config;
use Exception;

class Env {
    /**
     * @throws Exception
     */
    public static function load(): void {
        $path = ROOT . '/.env';
        if(!file_exists($path)) {
            throw new Exception(".env file not found");
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#')) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (!array_key_exists($name, $_ENV)) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }

    public static function get($key, $default = null) {
        return $_ENV[$key] ?? $default;
    }
}