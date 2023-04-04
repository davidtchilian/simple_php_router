<?php
    class Route {
        private $routes = array();

        public function __construct($rootd) {
            // $this->rootdir = $rootd;
        }

        public function add($uri, $function, $method) {
            $this->routes[] = array(
                'uri' => $uri,
                'function' => $function,
                'method' => $method
            );
        }

        public function submit() {
            $uri = $_SERVER['REQUEST_URI'];
            $method = $_SERVER['REQUEST_METHOD'];
            $pagecalled = explode('?', $uri)[0];


            $found = false;
            foreach ($this->routes as $route) {
                if ($route['uri'] == $pagecalled) {
                    $found = true;
                    if ($route['method'] == $method) {
                        $function = $route['function'];
                        $function();
                    }else {
                        header('HTTP/1.1 405 Method Not Allowed');
                        echo "405 Method not allowed";
                    }
                }
            }
            
            if (!$found) {
                header('HTTP/1.1 404 Not Found');
                notfound();
            }
        }
    }
?>