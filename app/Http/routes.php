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

/* vistas en el front-end*/
Route::get('/','PaginacionController@index');
/*
 * nosotros routers
 */
Route::get('nosotros','PaginacionController@nosotros');
Route::get('nosotros/vision-mision','PaginacionController@misionvision');
Route::get('nosotros/mensaje-director','PaginacionController@director');
Route::get('nosotros/plan-estudio','PaginacionController@plan');
Route::get('nosotros/reseña-historica','PaginacionController@historia');
/*
 *admision
 */
Route::get('admision','PaginacionController@admision');
Route::get('admision/inicial','PaginacionController@inicial');
Route::get('admision/primaria','PaginacionController@primaria');
Route::get('admision/secundaria','PaginacionController@secundaria');

/*
 * Talleres
 */
Route::get('talleres','PaginacionController@talleres');
Route::get('talleres/ballet','PaginacionController@ballet');
Route::get('talleres/computacion','PaginacionController@computacion');
Route::get('talleres/educacion-fisica','PaginacionController@educacion');
Route::get('talleres/ingles','PaginacionController@ingles');
Route::get('talleres/karate','PaginacionController@karate');

/*
 * Noticias
 */
Route::get('noticias/nueva','PaginacionController@noticias');

/*
 * Galeria
 */
Route::get('galeria','PaginacionController@galeria');
/*
 * Aula Virtual
 */
Route::get('aula-virtual','PaginacionController@aula');
/*
 * Contacto
 */
Route::get('contacto','PaginacionController@contacto');

/* vistas administrativas */
Route::get('admin','PaginacionController@admin');
Route::get('login','PaginacionController@login');

/* 404 error*/
Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
