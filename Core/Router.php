<?php

namespace Core;

class Router
{
    protected array $routes = [];
    protected array $params = [];

    public function __get(string $property): array|false {
        switch ($property) {
            case 'routes':
                return $this->routes;
            case 'params':
                return $this->params;
            default:
                return false;
        }
    }

    public function add(string $route, array $params): void
    {
        $this->routes[$route] = $params;
    }
}
