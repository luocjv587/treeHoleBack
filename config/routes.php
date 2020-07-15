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

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
Router::addRoute(['GET'], '/getLetter', 'App\Controller\IndexController@getLetter');
Router::addRoute(['POST'], '/createLetter', 'App\Controller\IndexController@createLetter');
Router::addRoute(['POST'], '/likeLetter', 'App\Controller\IndexController@likeLetter');
