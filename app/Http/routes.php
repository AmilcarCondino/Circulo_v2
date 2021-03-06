<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('project', 'ProjectController');
Route::resource('project.module', 'ModuleController');
Route::get('project/{project}/module/{module}/submodule/create', [
    'as' => 'project.module.submodule.create', 'uses' => 'ModuleController@submodule'
]);
Route::resource('project.module.page', 'PageController');
Route::resource('project.module.page.image', 'ImageController');
Route::resource('project.module.page.image.proposal', 'ProposalController');