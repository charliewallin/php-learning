<?php

class Router
{
    protected $routes = [];
    
    public function define($routes)
    {
        $this->routes = $routes;
    }


    public function direct($uri)
    {
      //  var_dump($this->routes['contact']); exit();
        if ( array_key_exists($uri, $this->routes )) {
           
            return trim($this->routes[$uri], '/');
       }

       throw new Exception('No route defined for this URI: ' . $uri);
    }
}