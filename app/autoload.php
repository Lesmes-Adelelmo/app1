<?php
function app_autoload($classname) {
    $directories = [
        'controllers/',
        'models/',
        'config/'
    ];

    foreach ($directories as $directory) {
        $file = $directory . $classname . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
}

spl_autoload_register('app_autoload');
?>
