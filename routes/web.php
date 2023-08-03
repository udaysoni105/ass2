<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\RegistrationController;
use App\Models\YourModel;
use Illuminate\Http\Request;
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

//Query builder
Route::get('list',[MembersController::class,'dbOperations']);

//Eloquent model
Route::get('student',[StudentController::class,'getData']);

//csrf//form validation
Route::controller(registercontroller::class)->group(function(){

    Route::get('/register', 'index');//insert orm
    Route::post('/register', 'register');//insert orm
    Route::get('/register/view', 'view');//select orm
    });

//model using formvalidation
Route::get('/your-route', [YourController::class, 'store']);



Route::get('/your-model', function () {
    // Retrieve all YourModel instances
    $yourModels = YourModel::all();
    
    // Return a view or perform other actions
    return view('your-model.index', compact('yourModels'));
});

Route::get('/your-model/{id}', function ($id) {
    // Find a specific YourModel instance
    $yourModel = YourModel::find($id);

    // Return a view or perform other actions
    return view('your-model.show', compact('yourModel'));
});

Route::post('/your-model', function (Request $request) {
    // Create a new YourModel instance based on the request data
    $yourModel = new YourModel();
    $yourModel->fill($request->all());
    $yourModel->save();
    
    // Redirect or perform other actions
    return redirect('/your-model');
});

Route::put('/your-model/{id}', function (Request $request, $id) {
    // Find the specific YourModel instance to update
    $yourModel = YourModel::find($id);
    
    // Update the model attributes based on the request data
    $yourModel->fill($request->all());
    $yourModel->save();
    
    // Redirect or perform other actions
    return redirect('/your-model');
});

Route::delete('/your-model/{id}', function ($id) {
    // Find the specific YourModel instance to delete
    $yourModel = YourModel::find($id);
    
    // Delete the model
    $yourModel->delete();
    
    // Redirect or perform other actions
    return redirect('/your-model');
});

//custom validation
Route::get('/registration',[RegistrationController::class,'showform']);
Route::post('/registration',[RegistrationController::class,'signup']);