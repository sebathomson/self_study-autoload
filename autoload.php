<?php 

spl_autoload_register(function ($fqn) {
    $filename = str_replace('\\', DIRECTORY_SEPARATOR, $fqn) . '.php';
    $path     = __DIR__ . '/src/' . $filename;

    if (file_exists($path)) {
        require_once $path;

        return true;
    }

    return false;
});
