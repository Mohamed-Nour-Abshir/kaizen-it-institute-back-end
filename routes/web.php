<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminAddHomeSlider;
use App\Http\Livewire\Admin\AdminAddPopularCourse;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminDeleteHomeSlider;
use App\Http\Livewire\Admin\AdminDeletePopularCourses;
use App\Http\Livewire\Admin\AdminDeleteUsers;
use App\Http\Livewire\Admin\AdminEditHomeSlider;
use App\Http\Livewire\Admin\AdminEditPopularCourses;
use App\Http\Livewire\Admin\AdminEditUsers;
use App\Http\Livewire\Admin\AdminShowUsers;
use App\Http\Livewire\Admin\EditHomeSliderForm;
use App\Http\Livewire\Admin\EditPopularCourseForm;
use App\Http\Livewire\Admin\EditUser;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CoursesComponent;
use App\Http\Livewire\FreelancingComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\OurTeamComponent;
use App\Http\Livewire\SoftwareServicesComponent;
use App\Http\Livewire\SuccessStoryComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/',HomeComponent::class);
Route::get('/about',AboutComponent::class);
Route::get('/software-services',SoftwareServicesComponent::class);
Route::get('/freelancing',FreelancingComponent::class);
Route::get('/success-story',SuccessStoryComponent::class);
Route::get('/contact',ContactComponent::class);
Route::get('/courses',CoursesComponent::class);
Route::get('/our-team',OurTeamComponent::class);


Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    
    Route::get('/admin/admin-dashboard',AdminDashboard::class)->name('admin.dashboard'); 
    
   //Admin manage users 
    Route::get('/admin/admin-show-all-users',AdminShowUsers::class)->name('admin.showusers');    
    Route::get('/admin/admin-edit-users',AdminEditUsers::class)->name('admin.editusers');    
    Route::get('/admin/admin-delete-users',AdminDeleteUsers::class)->name('admin.deleteusers');    
    Route::get('/admin/admin-edit-user/{user_id}',EditUser::class)->name('admin.edituser');    

    //Admin manage home slider
    Route::get('/admin/admin-add-home-slider',AdminAddHomeSlider::class)->name('admin.addhomeslider');
    Route::get('/admin/admin-edit-home-slider',AdminEditHomeSlider::class)->name('admin.edithomeslider');
    Route::get('/admin/admin-edit-home-slider/{slide_id}',EditHomeSliderForm::class)->name('admin.edithomesliderForm');
    Route::get('/admin/admin-delete-home-slider',AdminDeleteHomeSlider::class)->name('admin.deletehomeslider');

    // Admin manage Home page popular courses
    Route::get('/admin/admin-add-popular-course-from-home-page',AdminAddPopularCourse::class)->name('admin.addPopularCourse'); 
    Route::get('/admin/admin-edit-popular-course-from-home-page',AdminEditPopularCourses::class)->name('admin.editPopularCourses');
    Route::get('/admin/admin-edit-popular-course-from-home-page/{p_course_id}',EditPopularCourseForm::class)->name('admin.editpopularcourse'); 
    Route::get('/admin/admin-delete-popular-course-from-home-page',AdminDeletePopularCourses::class)->name('admin.deletePopularCourse');
});


Route::middleware(['auth:sanctum','verified'])->group(function(){

});
