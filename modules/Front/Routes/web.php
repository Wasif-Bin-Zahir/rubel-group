<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// home routes...
Route::resource('/', 'HomeController')->only(['index']);
// page routes...
Route::resource('page', 'PageController')->only(['show']);
// service routes...
Route::resource('service', 'ServiceController')->only(['index', 'show']);
// testimonial routes...
Route::resource('testimonial', 'TestimonialController')->only(['index']);
// faq routes...
Route::resource('faq', 'FaqController')->only(['index']);
// gallery routes...
Route::resource('gallery', 'GalleryController')->only(['index', 'show']);
// committee routes...
Route::resource('committee', 'CommitteeController')->only(['index']);
// directory routes...
Route::resource('directory', 'DirectoryController')->only(['index']);
Route::get('directory/{username}', 'DirectoryController@show');
// news routes...
Route::resource('news', 'NewsController')->only(['index', 'show']);
// notice routes...
Route::resource('notice', 'NoticeController')->only(['index', 'show']);
// event routes...
Route::resource('event', 'EventController')->only(['index', 'show']);

// event routes...
Route::resource('exhibitors-list', 'ParticipantsController')->only(['index', 'show']);
Route::resource('participating-countries', 'participatingCountriesController')->only(['index', 'show']);

// schedule routes...
Route::resource('schedule', 'ScheduleController')->only(['index', 'show']);
Route::resource('brochure', 'BrochureController')->only(['index', 'show']);
Route::resource('floor-plan', 'FloorplanController')->only(['index', 'show']);
Route::resource('hotel-information', 'HotelinformationController')->only(['index', 'show']);
Route::resource('venue-master-plan', 'VenuemasterplanController')->only(['index', 'show']);

// event routes...
Route::resource('sponsors', 'SponsorsController')->only(['index', 'show']);
// article routes...
Route::resource('article', 'ArticleController')->only(['index', 'show']);
// contact routes...
Route::resource('contact', 'ContactController')->only(['index', 'store']);
Route::resource('registration', 'RegistrationController')->only(['index', 'store', 'show']);
