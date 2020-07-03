<?php
class Router{
    private $routes;
    public function  __construct(){
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }


    // Returns request string
    private function getURI(){
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }


    public function run(){
        $error = false;
        $uri = $this->getURI();
        if ($uri == ''){
            header('Location:/home/1');
        }
//        echo $uri;
        foreach($this->routes as $uriPattern => $path){
            if (preg_match("~$uriPattern~",$uri)){
                $error =false;
                $internalRoute = preg_replace("~$uriPattern~",$path,$uri);
                $segments = explode('/',$internalRoute);
//                array_shift($segments);
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));
                $parametrs = $segments;
//                print_r($parametrs);

                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                if (file_exists($controllerFile)){
                    include_once($controllerFile);
                };
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject,$actionName),$parametrs);
                if ($result != null) {
                    break;
                }
            }
            else{
                $error = true;
            }
        }
    }
}

?>