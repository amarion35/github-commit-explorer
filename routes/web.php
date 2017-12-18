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

// Home
Route::get('/home', ['uses' => 'CommitsController@home']);

// List of commits
Route::get('{user}/{repo}/commits', [
    'as' => 'commits',
    'uses' => 'CommitsController@listCommits'])
    ->where('user', '[a-z0-9\-]+')
    ->where('repo', '[a-z0-9\-]+');

// Details of one commit
Route::get('{user}/{repo}/commits/{sha}', [
    'as' => 'commits',
    'uses' => 'CommitsController@selectCommit'])
    ->where('user', '[a-z0-9\-]+')
    ->where('repo', '[a-z0-9\-]+')
    ->where('sha', '[a-z0-9]+');

// Redirection if page not found
Route::any('{all}', function() {
    return redirect('/home');
})->where('all', '.*');