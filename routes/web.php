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

Route::get('/', 'ProjectController@index');
Route::get('/category-news/{id}', 'ProjectController@categoryNewsInfo');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category/add', 'CategoryController@addCategoryInfo');
Route::post('/category/new', 'CategoryController@saveCategoryInfo');
Route::get('/category/manage', 'CategoryController@manageCategoryInfo');
Route::get('/category/edit/{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update', 'CategoryController@updateCategoryInfo');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategoryInfo');


Route::get('/news/add', 'NewsController@addNewsInfo');
Route::post('/news/new', 'NewsController@saveNewsInfo');
Route::get('/news/manage', 'NewsController@manageNewsInfo');
Route::get('/news/view/{id}', 'NewsController@viewNewsInfo');
Route::get('/news/unpublished/{id}', 'NewsController@unpublishedNewsInfo');
Route::get('/news/published/{id}', 'NewsController@publishedNewsInfo');
Route::get('/news/edit/{id}', 'NewsController@editNewsInfo');
Route::post('/news/update', 'NewsController@updateNewsInfo');
Route::get('/news/delete/{id}', 'NewsController@deleteNewsInfo');
Route::get('/single-news/{id}', 'NewsController@singleNewsInfo');


Route::post('/comment/new/{id}', 'CommentsController@postCommentInfo');
Route::get('/comment/manage', 'CommentsController@manageCommentInfo');
Route::get('/comment/delete/{id}', 'CommentsController@deleteCommentInfo');


Route::get('/account', 'AccountController@accountInfo');
Route::post('/new-author', 'AccountController@newAuthorInfo');
Route::get('/logout', 'AccountController@authorLogoutInfo');
Route::post('/author-login-check', 'AccountController@authorloginCheck');
Route::get('/author/add', 'AccountController@addAuthor');
Route::post('/author/new', 'AccountController@saveAuthorInfo');
Route::get('/author/manage', 'AccountController@manageAuthorInfo');
Route::get('/author/edit/{id}', 'AccountController@editAuthorInfo');
Route::post('/user/update', 'AccountController@updateAuthorInfo');
Route::get('/author/delete/{id}', 'AccountController@deleteAuthorInfo');


Route::get('/contact-us', 'ContactController@addContactInfo');
Route::post('/submit-contact-form', 'ContactController@submitContactInfo');
Route::get('/manage-contact-us', 'ContactController@manageContactInfo');
Route::get('/contact-message/delete/{id}', 'ContactController@deleteContactInfo');

Route::get('/search-results', 'SearchController@index');

Route::get('/add-social', 'SocialController@addSocialLinks');
Route::post('/social/new', 'SocialController@saveSocialLinks');