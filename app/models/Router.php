<?php

namespace routing;

class Router 
{
    private array $routes = []; // syntaxe php7.4+   

    /**
     * Retourner les routes (tableau)
     * 
     * @return array
     */
    public function getRoutes(): array 
    {
        return $this->routes;
    }

    /**
     * Ajoute une nouvelle route
     * 
     * @param string method : verbe
     * @param string path : chemin de l'URL de la route
     * @param string controller : controller que l'on doit appeler
     * @param string action : action à effectuer
     * @return void
     */
    public function addRoute(string $method, string $path, string $controller, string $action): void
    {
        $this->routes [] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    /**
    * Trouve le controller associé à une requete HTTP donnée en fonction de l'URI demandée
    * 
    * Cette fonction recherche la correspondance entre le verbe HTTP et l'URI demandée
    * dans les routes définies et renvoie les détails du controleur associé si une correspondance est trouvée
    * 
    * @param string $method : verbe HTTP de la requête
    * @param string $uri : URI demandée par le client pour accéder à une ressource
    * @return array|null : tableau associatif contenant les détails du controleur et de l'action si une correspondance est trouvée, sinon null.
    */
    public function getHandler(string $method, string $uri) { 
    foreach($this->routes as $route) {
//        var_dump($route);
        if($route['method'] === $method && $route['path'] === $uri) {
            return [
            'method' => $route['method'],
            'controller' => $route['controller'],
            'action' => $route['action'],
                    ];
        }
    }
    return null;
    } 
}