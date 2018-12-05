<?php

$router->get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

$router->get('/{width:[0-9]+}/{height:[0-9]+}[/{name}]', ['as' => 'image.place',
    'uses' => 'ImageController@placeImage']);
