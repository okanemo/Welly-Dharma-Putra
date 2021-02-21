<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\AboutController@AboutPage');

Route::get('/projects','App\Http\Controllers\ProjectsController@ProjectsPage');

Route::get('/projects/{id}','App\Http\Controllers\ProjectsController@ProjectbyCategory');

Route::get('/projects/detail/{id}','App\Http\Controllers\ProjectsController@GetProjectDetail');

Route::get('/resume','App\Http\Controllers\ResumeController@ResumePage');

Route::get('/download', function(){
    $file = public_path()."\PDF\Wely Dharma Putra CV.pdf";

    $headers = array(
        'Content-Type: application/pdf',
    );

    return Response::download($file,"Wely Dharma Putra CV.pdf", $headers);
});