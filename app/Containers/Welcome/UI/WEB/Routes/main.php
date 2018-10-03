<?php

$router->get('/home', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@sayWelcome',
]);
