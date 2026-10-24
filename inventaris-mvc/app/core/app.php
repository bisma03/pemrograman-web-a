
<?php

class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        if (!empty($url[0])) {
            $file = ROOT_PATH . '/app/controllers/'
                . ucfirst($url[0]) . 'Controller.php';

            if (file_exists($file)) {
                $this->controller = ucfirst($url[0]) . 'Controller';
                unset($url[0]);
            }
        }

        $controllerFile = ROOT_PATH . '/app/controllers/'
            . $this->controller . '.php';

        if (!class_exists($this->controller)) {
            if (file_exists($controllerFile)) {
                require_once $controllerFile;
            }
        }

        if (!class_exists($this->controller)) {
            http_response_code(404);
            exit('Controller tidak ditemukan.');
        }

        $controller = new $this->controller();

        if (isset($url[1]) && method_exists($controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array(
            [$controller, $this->method],
            $this->params
        );
    }

    public function parseURL(): array
    {
        if (!isset($_GET['url'])) {
            return [];
        }

        $url = filter_var(
            rtrim($_GET['url'], '/'),
            FILTER_SANITIZE_URL
        );

        return $url === '' ? [] : explode('/', $url);
    }
}
