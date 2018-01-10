<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resources([

        'tags' => TagController::class,
        'users' => UserController::class,
        'images' => ImageController::class,
        'posts' => PostController::class,
        'videos' => VideoController::class,
        'articles' => ArticleController::class,
        'painters' => PainterController::class,
        'categories' => CategoryController::class,
        'messages' => MessageController::class,
        'multiple-images' => MultipleImageController::class,

        'movies/in-theaters' => Movies\InTheaterController::class,
        'movies/coming-soon' => Movies\ComingSoonController::class,
        'movies/top250' => Movies\Top250Controller::class,

        'world/country' => World\CountryController::class,
        'world/city' => World\CityController::class,
        'world/language' => World\LanguageController::class,

        'china/province' => China\ProvinceController::class,
        'china/city' => China\CityController::class,
        'china/district' => China\DistrictController::class,

    ]);

    Route::group([
        'middleware' => 'admin.permission:allow,administrator,materialcreator',
    ], function ($router) {

        $router->resources([
            'cc/theme' => Cc\ThemeController::class,
            'cc/activity' => Cc\ActivityController::class,
            'cc/chapter' => Cc\ChapterController::class,
            'cc/article' => Cc\ArticleController::class,
            'cc/material' => Cc\MaterialController::class,
            'cc/club' => Cc\ClubController::class,
            'cc/student-club' => Cc\StudentClubController::class,
        ]);

        $router->any('cc/activity/{id}/chapters', 'Cc\ActivityController@crudChapters');

    });


    $router->post('posts/release', 'PostController@release');
    $router->post('posts/restore', 'PostController@restore');
    $router->get('api/users', 'PostController@users');

    $router->get('china/cascading-select', 'China\ChinaController@cascading');

    $router->get('api/world/cities', 'World\ApiController@cities');
    $router->get('api/world/countries', 'World\ApiController@countries');
    $router->get('api/china/city', 'China\ChinaController@city');
    $router->get('api/china/district', 'China\ChinaController@district');


    $router->get('vmanager', 'cc\MediaController@index')->name('media-index');
    $router->get('vmanager/download', 'cc\MediaController@download')->name('media-download');
    $router->delete('vmanager/delete', 'Encore\Admin\Media\MediaController@delete')->name('media-delete');
    $router->put('vmanager/move', 'Encore\Admin\Media\MediaController@move')->name('media-move');
    $router->post('vmanager/upload', 'Encore\Admin\Media\MediaController@upload')->name('media-upload');
    $router->post('vmanager/folder', 'Encore\Admin\Media\MediaController@newFolder')->name('media-new-folder');


    $router->get('widgets/form-1', 'WidgetsController@form1');
    $router->get('widgets/form-2', 'WidgetsController@form2');
    $router->get('widgets/form-3', 'WidgetsController@form3');
    $router->get('widgets/table', 'WidgetsController@table');
    $router->get('widgets/box', 'WidgetsController@box');
    $router->get('widgets/info-box', 'WidgetsController@infoBox');
    $router->get('widgets/tab', 'WidgetsController@tab');
    $router->get('widgets/notice', 'WidgetsController@notice');
    $router->get('widgets/editors', 'WidgetsController@editors');
});


