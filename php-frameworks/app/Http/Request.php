<?php

namespace App\Http;

use Exception;

require __DIR__ . '/../../vendor/autoload.php';


class Request
{

    protected $segments = [];
    protected $controler;
    protected $method;

    function __construct()
    {
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        $this->setController();
        $this->setMethod();
    }

    function setController()
    {
        $this->controler = empty($this->segments[1]) ? 'home' : $this->segments[1];
    }

    function setMethod()
    {
        $this->method = empty($this->segments[2]) ? 'index' : $this->segments[2];

    }

    public function getControler()
    {
        $controller = ucfirst($this->controler);
        
        return "App\Http\Controllers\\{$controller}Controller";
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function send()
    {
        $controller = $this->getControler();
        $method = $this->getMethod();

        $response = call_user_func([
            new $controller,
            $method
        ]);
        
        try {
            
            if ($response instanceof Response) {
                $response->send();
            } else {
                throw new \Exception("Error processing request");
            }

        } catch (\Exception $th) {
            echo "Details {$th->getMessage()}";
        }
    }
}
