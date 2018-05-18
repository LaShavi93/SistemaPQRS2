<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource() Usado para: RESTful Resource controller
/*
//Acciones Incluidas.
Route::resource('users', 'UsersController', [
    'only' => ['index', 'show']
]);

//Acciones Excluidas.
Route::resource('monkeys', 'MonkeysController', [
    'except' => ['edit', 'create']
]);
*/

//Controlador RESTful para affairs.
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Route::resource('affairs', 'AffairController', [
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
    ]);
});


//Controlador RESTful para answers.
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Route::resource('answers', 'AnswerController', [
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
    ]);
});

//Controlador RESTful para assignments.
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Route::resource('assignments', 'AssignmentController', [
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
    ]);
});

//Controlador RESTful para attached_documents.
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Route::resource('attached_documents', 'AttachedDocumentController', [
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
    ]);
});

//Controlador RESTful para companies.
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Route::resource('companies', 'CompanyController', [
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
    ]);
});

//Controlador RESTful para customers.
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Route::resource('customers', 'CustomerController', [
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
    ]);
});

//Controlador RESTful para documents.
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Route::resource('documents', 'DocumentController', [
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
    ]);
});

//Controlador RESTful para DocumentType.
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Route::resource('DocumentType', 'DocumentTypeController', [
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
    ]);
});

//Controlador RESTful para parameters.
Route::group(['prefix' => 'api', 'middleware' => ['cors']], function(){
    Route::resource('parameters', 'ParameterController', [
        'only' => ['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']
    ]);
});