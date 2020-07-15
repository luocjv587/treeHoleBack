<?php

declare(strict_types=1);

/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index', ['middleware' => [\App\Middleware\EnableCrossRequestMiddleware::class]]);
Router::addRoute(['GET'], '/getLetter', 'App\Controller\IndexController@getLetter', ['middleware' => [\App\Middleware\EnableCrossRequestMiddleware::class]]);
Router::addRoute(['GET'], '/getSecond', 'App\Controller\IndexController@getSecond', ['middleware' => [\App\Middleware\EnableCrossRequestMiddleware::class]]);
Router::addRoute(['POST','OPTIONS'], '/createLetter', 'App\Controller\IndexController@createLetter', ['middleware' => [\App\Middleware\EnableCrossRequestMiddleware::class]]);
Router::addRoute(['POST','OPTIONS'], '/likeLetter', 'App\Controller\IndexController@likeLetter', ['middleware' => [\App\Middleware\EnableCrossRequestMiddleware::class]]);
