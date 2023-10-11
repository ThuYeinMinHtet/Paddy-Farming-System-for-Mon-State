<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [
HomeController::class,
'index',
]);

Route::get('/about_us',[
HomeController::class,
'about_us',
]);

Route::get('/contact',[
HomeController::class,
'contact',
]);

Route::get('/prevent',[
HomeController::class,
'prevent',
]);

//Insurance Routes

Route::get('/insurance',[
HomeController::class,
'insurance',
]);

Route::get('/insurance/life',[
HomeController::class,
'lifeInsurance',
]);

Route::get('/paddytype',[
HomeController::class,
'alltype',
]);

Route::get('/type_details/{id}',[
HomeController::class,
'detailtype',
]);

Route::get('/insurance/organ',[
HomeController::class,
'organInsurance',
]); 

Route::get('/weather',[
HomeController::class,
'showWeather',
]);

Route::get('/home',[
HomeController::class,
'redirect',
])->middleware('auth','verified');


// Knowledgable Post
Route::get('/knowledge',[
HomeController::class,
'viewknowledge'
]);

Route::get('/knowledge_detail/{id}',[
HomeController::class,
'ViewKnowledgeDetail'
]);

//End Knowledge 

//Bugs Routes
Route::get('/bug_view',[
HomeController::class,
'SeeBugs'
]);

Route::get('bug_details/{id}',[
HomeController::class,
'BugDetails'
]);

Route::get('bug_detail',[
HomeController::class,
'BugDetails'
]);

//Calculate Route

Route::get('calculate',[
HomeController::class,
'Calculate'
]);

Route::get('calculate_detail/chooseType/{id}',[
HomeController::class,
'CalculateDetail'
]);

Route::get('/choice/calculateOnPest/{id}',[
HomeController::class,
'ChoosingByPest'
])->middleware('auth','verified');

Route::get('/choice/calculateOnBudget/{id}',[
HomeController::class,
'ChoosingByBudget'
])->middleware('auth','verified');

Route::post('/CalculateBudget/{id}',[
HomeController::class,
'CalculateBudget'
]);

Route::get('/CalculateOnPest/total/{id}/{pestid}',[
HomeController::class,
'CalculateOnPest'
]);

Route::get('choice/calculateOnPest/acre/{id}/{pestid}',[
HomeController::class,
'OnChoiceAcre'
]);

//end Calculate Route

//Review Route

Route::post('payfeedback',[
HomeController::class,
'payFeedback'
]);

Route::get('myfeedback',[
HomeController::class,
'myfeedback'
]);

//Admin Routes

Route::get('/addNewKnowledge',[
  AdminController::class,
  'addNewKnowledge'
])->middleware('auth','verified');

Route::post('/upload_knowledge',[
AdminController::class,
'upload_Knowledge'
]);

Route::get('/admin/ViewPaddyBugs',[
  AdminController::class,
  'ViewKnowledge'
])->middleware('auth','verified');

Route::get('/deletebug/{id}',[
AdminController::class,
'DeleteBugs'
]);

Route::get('/updatebug/{id}',[
AdminController::class,
'UpdateBugs'
])->middleware('auth','verified');

Route::post('/editBugs/{id}',[
AdminController::class,
'EditBug'
]);


//admin add paddy route
Route::get('/addNewPaddyBugs',[
  AdminController::class,
  'addNewPaddyBugs'
])->middleware('auth','verified');

Route::post('/upload_paddyBugs',[
AdminController::class,
'upload_paddyBugs'
]);

//admin add new pesticides routes
Route::get('/addNewPesticide',[
AdminController::class,
'addNewPesticide'
])->middleware('auth','verified');

Route::post('/upload_pesticide',[
AdminController::class,
'upload_pesticide'
]);

Route::get('/admin/ViewPesticide',[
AdminController::class,
'viewpesticide'
]);

Route::get('/deletepest/{id}',[
AdminController::class,
'deletepest'
]);

Route::get('/updatepest/{id}',[
AdminController::class,
'updatepest'
])->middleware('auth','verified');

Route::post('/editpest/{id}',[
AdminController::class,
'editpest'
]);

//Review

Route::get('admin/viewReview',[
AdminController::class,
'ViewReview'
]);

//Paddy Type Route

Route::get('/addnewpaddytype',[
AdminController::class,
'addpaddyType'
])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
