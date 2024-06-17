<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\FrontendHomeController;
use App\Http\Controllers\Backend\ClassController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\MessageFromController;
use App\Http\Controllers\Backend\AccreditationController;
use App\Http\Controllers\Backend\AlbumController;
use App\Http\Controllers\Backend\ArtistController;

use App\Http\Controllers\Backend\DownloadTypeController;
use App\Http\Controllers\Backend\DownloadResourceController;
use App\Http\Controllers\Backend\StudyAboradController;
use App\Http\Controllers\Backend\UniversityController;
use App\Http\Controllers\Backend\FAQController;
use App\Http\Controllers\Backend\CarrerController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\FavouritesController;
use App\Http\Controllers\Backend\GenreController;
use App\Http\Controllers\Backend\HistoryController;
use App\Http\Controllers\Backend\Intakecontroller;
use App\Http\Controllers\Backend\MyPlaylistController;
use App\Http\Controllers\Backend\RegistersController;
use App\Http\Controllers\Backend\SEOController;
use App\Http\Controllers\Backend\SigninController;
use App\Http\Controllers\Backend\SongController;
use App\Http\Controllers\Backend\VisaSuccessController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\TeamMemberController;
use App\Http\Controllers\Backend\SupportivePagesController;
use App\Http\Controllers\FavoritesController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::middleware('auth')->group(function () {
    Route::post('/favorites/add', [FavoritesController::class, 'addFavorite'])->name('favorites.add');
    Route::post('/favorites/remove', [FavoritesController::class, 'removeFavorite'])->name('favorites.remove');
    Route::get('/favorites', [FavoritesController::class, 'listFavorites'])->name('favorites.list');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/playlists', [MainController::class, 'showPlaylists'])->name('playlists.index');
    Route::post('/playlists', [MainController::class, 'createPlaylist'])->name('playlists.create');
    Route::post('/playlists', [MainController::class, 'createPlaylist'])->name('playlists.create');
    // Route::post('/playlists/{playlistId}/add-song', [MainController::class, 'addSongToPlaylist'])->name('playlists.addSong');
    Route::get('/songs', [MainController::class, 'showSongs'])->name('songs.show');
Route::post('/playlists/{playlistId}/add-song', [MainController::class, 'addSongToPlaylist'])->name('playlists.addSong');
});
Route::get('/', [MainController::class, 'index'])->name('frontend.index'); 
// Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/artist-list', [MainController::class, 'artists'])->name('artists.list'); 
Route::get('/artistdetail-list/{slug}', [MainController::class, 'artistdetail'])->name('artists.detail'); 
Route::get('/artists/{slug}', [ArtistController::class, 'show'])->name('artist.detail');
Route::get('/playlist-list', [MainController::class, 'playlists'])->name('playlists.list'); 
Route::get('/song-list', [MainController::class, 'songs'])->name('songs.list'); 
Route::get('/songs/{slug}', [SongController::class, 'show'])->name('songs.detail');
Route::get('/favorite-list', [MainController::class, 'favorite'])->name('favorite.list'); 
// Route::post('/favourite', [MainController::class, 'toggleFavourite'])->name('favourite.toggle');
Route::get('/genre-list', [MainController::class, 'genre'])->name('genre.list'); 
Route::get('/genredetail-list/{slug}', [MainController::class, 'genredetail'])->name('genredetail.list'); 
Route::get('/playsong-list', [MainController::class, 'playsong'])->name('playsong.list'); 
// Route::get('/home', [MainController::class, 'home'])->name('home.index'); 
Route::get('/history-list', [MainController::class, 'history'])->name('history.list'); 
Route::get('/album-list', [MainController::class, 'album'])->name('album.list'); 
Route::get('/albumdetail-list/{slug}', [MainController::class, 'albumdetail'])->name('albumdetail.list'); 
Route::get('/about', [MainController::class, 'about'])->name('about.detail'); 
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts.detail'); 
Route::get('/signin', [MainController::class, 'signin'])->name('signin.form'); 
Route::get('/signup', [MainController::class, 'signup'])->name('signup.form'); 
Route::post('/user-register', [MainController::class, 'register'])->name('register.form'); 



// Route::get('/classes-list',[MainController::class,'ClassesList'])->name('frontend.classes.list');
// Route::get('/classes/{slug}',[MainController::class,'ClassesDetails'])->name('frontend.classes.details');

// Route::get('/copymail', [MainController::class, 'EnquiryData1'])->name('frontend.enquiry-data.store');

// Route::get('/document-checklists', [MainController::class, 'DocumentChecklist'])->name('frontend.document-checklists');
// Route::get('/classes/{slug}', [MainController::class, 'Classes'])->name('frontend.classes');
// Route::get('/scholarships', [MainController::class, 'Scholarships'])->name('frontend.scholarships');
// Route::get('/aboutus', [MainController::class, 'AboutUs'])->name('frontend.about');
// Route::get('/accredition-list', [MainController::class, 'AccreditionsList'])->name('frontend.accreditions.List');
// Route::get('/find-universities', [MainController::class, 'UniversityList'])->name('frontend.university.List');
// Route::get('/testimonial-list', [MainController::class, 'TestimonialList'])->name('frontend.testimonial.List');
// Route::get('/message-from/{slug}', [MainController::class, 'MessageFrom'])->name('frontend.message-from');
// Route::get('/studyabroad-details/{slug}', [MainController::class, 'StudyAbroadDetails'])->name('frontend.studyabroad.details');
// Route::get('/enroll', [MainController::class, 'Enroll'])->name('frontend.enroll');
// Route::get('/visa-success', [MainController::class, 'VisaSuccess'])->name('frontend.visa-success');
// Route::get('/visa-success-details/{slug}', [MainController::class, 'VisaSuccessDetails'])->name('frontend.visa-success.details');

// Route::get('/find-your-counselor', [MainController::class, 'FindYourCounselor'])->name('frontend.find-your-counselor');

// Route::get('/event/{slug}', [MainController::class, 'EventDetails'])->name('frontend.event-details');
// Route::get('/event', [MainController::class, 'EventList'])->name('frontend.event-list');

// Route::get('/destinations', [MainController::class, 'AbroadDestinations'])->name('frontend.abroad-destinations');
// Route::get('/destinations-details', [MainController::class, 'AbroadDestinationsDetails'])->name('frontend.abroad-destinations-details');
// Route::get('/enquiry-form',[MainController::class,'EnquiryForm'])->name('frontend.enquiry.form');
// Route::post('/enquiry',[MainController::class,'EnquiryData'])->name('frontend.enquiry-data.store');
// Route::post('/enroll',[MainController::class,'EnrollmentForm'])->name('frontend.Enrollment.Form.store');
// Route::get('/enroll-success',[MainController::class,'EnrollSuccess'])->name('frontend.Enrollment.Form.success');
// Route::get('/career-success',[MainController::class,'CareerSuccess'])->name('frontend.Career.Application.success');
// Route::post('/request-callback',[MainController::class,'RequestCallback'])->name('frontend.request.callback');
// Route::post('/vacancy-store',[MainController::class,'VacancyApplication'])->name('frontend.vacancy.application');



Auth::routes(['register' => True]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   
    Route::resource('artist', ArtistController::class);
    Route::resource('my_playlist', MyPlaylistController::class);
    Route::resource('favourite', FavouritesController::class);
    Route::resource('genre', GenreController::class);
    Route::resource('history', HistoryController::class);
    Route::resource('song', SongController::class);
    Route::resource('album', AlbumController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('about', AboutController::class);
    Route::resource('register', RegistersController::class);
    
    
    
});
