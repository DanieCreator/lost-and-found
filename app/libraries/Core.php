<?php

/**
 *  Application core class
 *  Creates URL and loads core class
 *  URL Format /controller/method/class
 */

class Core
{
    protected $callback = ['Pages', 'index'];
    protected $params = [];

    public function __construct(){
        $this->processUrl($this->getUrl());
    }


    /**
     * Return an exploded array of the $_SERVER['REQUEST_URL]
     * 
     * @return array
     */

    public function getUrl(){

        $url = $_SERVER['REQUEST_URI'];

        //Strip the trailing slashes
        $url = trim($url, '/');

        //Sanitize the URL
        $url = filter_var($url, FILTER_SANITIZE_URL);

        //Break it into an array
        return explode('/', $url);

    }

    /**
     * Process the first part of the url without considering the extra parameters
     * 
     * @param array $urlParts
     */

    public function processUrl(array $urlParts){

        if(file_exists(__DIR__ . '/../controllers/' . ucfirst($urlParts[0]) . '.php')){

            require_once __DIR__ . '/../controllers/' . ucfirst($urlParts[0]) . '.php';

            $this->callback[0] = $urlParts[0];

            array_shift($urlParts);

            //Instantiate default controller and check and set the method if necessary
            $controller = new $this->callback[0];

            if(count($urlParts)){

                if(method_exists($controller, $urlParts[0])){
    
                    $this->callback[1] = $urlParts[0];
    
                    array_shift($urlParts);
    
                    if(count($urlParts)){
                        $this->params = $urlParts;
                    }
                }
            }
            

        }else{

            require_once __DIR__ . '/../controllers/' . ucfirst($this->callback[0]) . '.php';

            //Instantiate default controller and check and set the method if necessary
            $controller = new $this->callback[0];

            if(method_exists($controller, $urlParts[0])){
                $this->callback[1] = $urlParts[0];
                array_shift($urlParts);
            }else{

                if($urlParts[0] !== ''){
                    echo "<strong>Method does not exist in the default controller<string><br>";
                    return;
                }
            }

        }
        
        $this->callback[0] = new $this->callback[0];
        //echo(count($urlParts));

        call_user_func_array($this->callback, $this->params);
    
    }

    
}