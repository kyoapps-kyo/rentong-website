<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('adminusers', "AdminUsersController");
    $router->resource('topics', "TopicsController");
    $router->resource('imgs', "ImgsController");
    $router->resource('imgs', "ImgsController");
    $router->resource('prices', "PricesController");
    $router->resource('trades', "InternationalTradesController");
    $router->resource('history-imgs', "HistoryImgsController");

    //api选项查询
    $router->get('/api/topics', 'ImgsController@topics')->name('admin.api.topics');
});
