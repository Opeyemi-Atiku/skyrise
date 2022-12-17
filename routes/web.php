<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Models\Project;
use App\Models\Developer;

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
    $projects = Project::where('published', "=", true)->get()->count();
    $developers = Developer::get()->count();
    $all_projects = Project::where('published', '=', true)->where('featured', '=', true)->get();
    
    $cities = Project::select('city')->distinct()->get();
    $presale = Project::where("type_id", "=", 1)->where('published', '=', true)->get();
    $presale_count = 0;
    foreach($presale as $proj) {
        if($proj->condos !== null) {
            $presale_count+=$proj->condos;
        }
        if($proj->townhouse !== null) {
            $presale_count+=$proj->townhouse;
        }
        if($proj->rowhouse !== null) {
            $presale_count+=$proj->rowhouse;
        }
    }
    
    
    $condoCount = Project::where('published', '=', true)->where('featured', '=', true)->where('condos', '<>', null)->get()->count();
    $townCount = Project::where('published', '=', true)->where('featured', '=', true)->where('townhouse', '<>', null)->get()->count();
    $rowCount = Project::where('published', '=', true)->where('featured', '=', true)->where('rowhouse', '<>', null)->get()->count();
    $detachedCount = Project::where('published', '=', true)->where('featured', '=', true)->where('type_id', '=', 2)->get()->count();
    $duplexCount = Project::where('published', '=', true)->where('featured', '=', true)->where('type_id', '=', 3)->get()->count();
    
    

    return view('welcome', compact('projects', 'developers', 'all_projects', 'cities', 'presale_count', 'condoCount', 'townCount', 'rowCount', 'detachedCount', 'duplexCount'));
});

Route::get('contact', [PagesController::class, 'contact']);
Route::get('projects', [PagesController::class, 'projects']);
Route::get('project-info/{type_id}/{id}', [PagesController::class, 'project_info']);
Route::get('project-info-detached', [PagesController::class, 'project_info_detached']);
Route::get('project-info-duplex', [PagesController::class, 'project_info_half_duplex']);
Route::get('project-info-attached', [PagesController::class, 'project_info_attached']);
Route::get('search-projects', [PagesController::class, 'project_search']);
// Route::post('search-project', [PagesController::class, 'search_project']);
Route::post('send-message', [PagesController::class, 'send_message']);
Route::post('send-data', [PagesController::class, 'flutter_data']);

Route::get('search-project', [PagesController::class, 'se']);