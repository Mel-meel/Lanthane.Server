<?php

class Routeur {
    
    public function __construct(
        private array $routes_collection = [],
        private string $route = 'index',
    ) {}
}