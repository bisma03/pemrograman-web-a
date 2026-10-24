
<?php

define('ROOT_PATH', dirname(__DIR__, 2));

function loadEnv(string $file): void
{
    if (!file_exists($file)) {
        return;
    }

    $lines = file(
        $file,
        FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
    );

    foreach ($lines as $line) {
        $line = trim($line);

        
        if (
            $line === ''
            || strpos($line, '#') === 0
            || strpos($line, '=') === false
        ) {

            continue;
        }

        [$name, $value] = array_map(
            'trim',
            explode('=', $line, 2)
        );

        $value = trim($value, "\"'");
        $_ENV[$name] = $value;
        putenv("$name=$value");
    }
}

loadEnv(ROOT_PATH . '/.env');

function env(string $key, $default = null)
{
    $value = $_ENV[$key] ?? getenv($key);

    if ($value === false || $value === null || $value === '') {
        return $default;
    }

    return $value;
}

define('APP_NAME', env('APP_NAME', 'Inventory System'));
define('APP_ENV', env('APP_ENV', 'production'));

define(
    'APP_DEBUG',
    filter_var(env('APP_DEBUG', false), FILTER_VALIDATE_BOOLEAN)
);

define(
    'BASEURL',
    rtrim(env('BASE_URL', 'http://localhost:8000'), '/')
);

define('DB_HOST', env('DB_HOST', 'localhost'));
define('DB_PORT', env('DB_PORT', '3306'));
define('DB_USER', env('DB_USER', 'root'));
define('DB_PASS', env('DB_PASS', ''));
define('DB_NAME', env('DB_NAME', 'db_inventory'));

date_default_timezone_set(
    env('APP_TIMEZONE', 'Asia/Jakarta')
);
