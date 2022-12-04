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

Route::get('/', 'CGSScontroller@index');

Route::get('/CGSS', 'CGSScontroller@index');

Route::get('/alumni', 'Alumnicontroller@display');
Route::post('submitcontact','contactcontroller@submitcontact');
Route::get('/admission', 'AdmissController@index');
Route::get('/event', 'Eventcontroller@index');
Route::get('/trainning', 'TrainingSessionController@index');
Route::get('/CGSS_gallery', 'gallerycontroller@index');
Route::get('/Matric_achievment', 'Achievmentcontroller@matric_front');
Route::get('/International_achievment', 'Achievmentcontroller@international_front');
Route::get('/AOlevel_achievment', 'Achievmentcontroller@ao_front');
Route::get('/about', 'Aboutcontroller@index');
Route::get('/contact', 'contactcontroller@index');
Route::get('/education', 'Educationcontroller@index');
Route::get('Publication', function () {
    $data=App\Publication::all();
    return view('publications',compact('data'));});


Route::get('/view','Testcontroller@show'); 

Route::get('/alumniEntry','Alumnicontroller@entry')->middleware('auth'); 

Route::get('/alumniEntry', 'Alumnicontroller@index')->middleware('auth');

Route::post('/addalumni','Alumnicontroller@store')->name('addalumni'); 
Route::get('/addalumni', 'Alumnicontroller@index');

Route::put('/updatealumni/{id}','Alumnicontroller@update');
Route::delete('deletealumni/{id}','Alumnicontroller@delete');


Route::get('/achievmententry','Achievmentcontroller@display')->middleware('auth'); 
Route::post('/addiachievment','Achievmentcontroller@store')->name('addiachievment');
Route::put('/updateiachievment/{id}','Achievmentcontroller@update');
Route::delete('/deleteiachievment/{id}','Achievmentcontroller@delete');
Route::post('/addmachievment','Achievmentcontroller@storem')->name('addmachievment');
Route::put('/updatemachievment/{id}','Achievmentcontroller@updatem');
Route::delete('/deletemachievment/{id}','Achievmentcontroller@mdelete');
Route::post('/addmachievmenty','Achievmentcontroller@biase')->name('addmachievmenty');
Route::post('/addAOlevel','Achievmentcontroller@aostore')->name('addAOlevel');
Route::put('/updateeAolevel/{id}','Achievmentcontroller@aoupdate');
Route::delete('/deleteAOlevel/{id}','Achievmentcontroller@aodelete');
Route::post('/addAOlevelyear','Achievmentcontroller@frontao')->name('addAOlevelyear');
Route::delete('/deleteaoyear/{id}','Achievmentcontroller@frontaodelete');

Route::delete('/biasedelete/{id}','Achievmentcontroller@biasedelete');
Route::post('/addAlevelyear','Achievmentcontroller@fronta')->name('addAlevelyear');
Route::delete('/deleteayear/{id}','Achievmentcontroller@frontadelete');




Route::get('/evententry','Eventcontroller@display')->middleware('auth'); 
Route::put('/updateevent/{id}','Eventcontroller@update');
Route::delete('/deleteevent/{id}','Eventcontroller@deleteevent');
Route::post('/addevent','Eventcontroller@store')->name('addevent');
Route::get('/eventdetail/{id}','Eventcontroller@eventmore');


Auth::routes();








Route::get('CGSS_Admin','HomeController@index')->middleware('auth');
Route::get('home','HomeController@index')->middleware('auth');
Auth::routes();
Route::resource('external_training', 'externaltrainingController')->middleware('auth');


Route::resource('external_training', 'externaltrainingController');

Route::get('message','contactcontroller@message')->name('message')->middleware('auth');
Route::get('new_message','contactcontroller@new_Message')->name('newmessage'); 
 Route::get('gallery','gallerycontroller@adminView')->name('gallery')->middleware('auth'); 
Route::get('addimages','gallerycontroller@create')->name('addimage'); 
Route::post('storeimage','gallerycontroller@store')->name('storeimages'); 
Route::delete('/deleteMessage/{id}', 'contactcontroller@deleteMessage')->name('message.destroy');
Auth::routes();

Route::get('CGSS_Admin/gallery','gallerycontroller@adminView')->name('gallery')->middleware('auth'); 
  Route::resource('publications', 'PublicationController')->middleware('auth');
  Route::get('ChangePassword','ChangePassword@create')->name('ChangePassword');
  Route::post('storepassword','ChangePassword@Change_Passward')->name('storepassword');




  Route::get('matric','Achievmentcontroller@matric')->middleware('auth');
  Route::get('international','Achievmentcontroller@international')->middleware('auth');
  Route::get('AOlevel','Achievmentcontroller@aolevel')->middleware('auth');





  Route::post('add_title','gallerycontroller@title' )->name('add_title');
    Route::delete('delete_image/{id}', function ($id) {
    $gim=App\gallery::find($id);
    $del=$gim->delete();
    if($del){
        return redirect()->route('gallery')->with('message', 'The record has been successfully deleted.');
    }
    })->name('delete_image');
    Route::resource('AlumniPlacement', 'AlumniControllerP')->middleware('auth');
    Route::get('marquee','MarqueController@index')->middleware('auth');;
    Route::post('updatemar','MarqueController@edit')->name('updatemar');