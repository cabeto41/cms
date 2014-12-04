<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/////////
// =================== Pagina Principal (Sitio Web) ============================ //
Route::get('index', array('as' => 'index', 'uses'=>'MainController@showIndex'));
Route::get('/', array('as' => '/', 'uses'=>'MainController@showIndex'));
// ============================================================================ //

// =================== Llamadas al controlador Auth=========================== //
Route::get('login', array('as' => 'login', 'uses'=>'AuthController@showLogin'));// Mostrar login
Route::post('login', array('as' => 'validate', 'uses'=>'AuthController@validateLogin')); // Verificar datos
Route::get('logout', array('as' => 'logout', 'uses'=>'AuthController@logOut')); // Finalizar sesión
// ============================================================================ //

// =================== Rutas privadas solo para usuarios autenticados ========================= //
Route::group(['before' => 'auth'], function()
{
    Route::get('CPanel/admin',array('as' => 'CPanel.index', 'uses'=>'IndexController@showIndex'));
    // ================== Sections =================================== //
    Route::resource('CPanel/admin/sections','AdminSectionsController');
    Route::get('CPanel/admin/sections/{sections}/delete',array('as' => 'CPanel.admin.sections.delete', 'uses'=>'AdminSectionsController@delete'));
    // =============================================================== //
});
// ========================================================================================= //
/*Route::get('/', function(){
    return View::make('index');
});*/


