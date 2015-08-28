<?php
use Cake\Routing\Router;

Router::plugin('CakeElements', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
