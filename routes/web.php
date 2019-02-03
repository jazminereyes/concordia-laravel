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

//Client Side Routes

Route::get('/', 'PagesController@getHome');
Route::get('/donate', 'PagesController@getDonate');
Route::get('/sponsorapp', 'PagesController@getSponsorApp');
Route::get('/login', 'PagesController@getLogin');
Route::get('/referral', 'PagesController@getReferral');
Route::get('/swregister', 'PagesController@getRegister');
Route::get('/scholarapp', 'PagesController@getScholarApp');
Route::get('/sponsor', 'PagesController@getSponsor');
Route::get('/scholar', 'PagesController@getScholar');
Route::get('/swhome', 'PagesController@getSocialWorker');

Route::post('/monitor', 'ApplicationController@check');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//

Route::post('/store', 'SponsorController@store');
Route::post('/social', 'SocialWorkerController@create');

//Admin Side Routes
Route::get('/dashboard', 'PagesController@getDashboard');
Route::get('/orphans', 'PagesController@getOrphans');
Route::get('/scholars', 'PagesController@getScholars');
Route::get('/sponsors', 'PagesController@getSponsors');
Route::get('/swapp', 'SocialWorkerController@display');

Route::get('/sponsorapplications', 'SponsorController@display');

Route::get('/sponsor/{personid}', 'SponsorController@getInfo');
