<?php



/*
  admin route
*/
Route::group(['middleware' => ['web','admin']] , function(){

  #datatable Ajax
  Route::get('/adminpanel/users/data', ['as' => 'adminpanel.users.data' , 'uses' => 'UsersController@anyData'] );
    Route::get('/adminpanel/bu/data', ['as' => 'adminpanel.bu.data' , 'uses' => 'BuController@anyData'] );
    Route::get('/adminpanel/contact/data', ['as' => 'adminpanel.contact.data' , 'uses' => 'ContactController@anyData'] );

  #main admin
  Route::get('/adminpanel' , 'AdminController@index');
    Route::get('/adminpanel/buYear/statics' , 'AdminController@showYearStatics');
    Route::post('/adminpanel/buYear/statics' , 'AdminController@showThisYear');


  #users
  Route::resource('/adminpanel/users' , 'UsersController');
  Route::post('/adminpanel/user/changePassword' , 'UsersController@UpdatePassword');
  Route::get('/adminpanel/users/{id}/delete' , 'UsersController@destroy');



  #setingsite
    Route::get('/adminpanel/sitesetting' , 'SiteSettingController@index');
    Route::post('/adminpanel/sitesetting' , 'SiteSettingController@store');


    #users
    Route::resource('/adminpanel/bu' , 'BuController' , ['except' => ['index' , 'show']]);
    Route::get('/adminpanel/bu/{id?}' , 'BuController@index');
    Route::get('/adminpanel/change_status/{id}/{status}' , 'BuController@changeStatus');



    Route::get('/adminpanel/bu/{id}/delete' , 'BuController@destroy');


    #users
    Route::resource('/adminpanel/contact' , 'ContactController');
    Route::get('/adminpanel/contact/{id}/delete' , 'ContactController@destroy');

});


/*
  user route
*/
/*Route::get('welcome/{locale}', function ($locale) {
  App::setLocale($locale);

  //
});*/



Route::group(['middleware' => 'web'], function () {

    Route::auth();
    Route::get('/', 'HomeController@showHome');
   


    Route::get('/ShowAllBullding' , 'BuController@showAllEnabel');
    Route::get('/ForRent' , 'BuController@ForRent');
    Route::get('/ForBuy' , 'BuController@ForBuy');
    Route::get('/type/{type}' , 'BuController@showByType');

    Route::get('/search' , 'BuController@search');
    Route::get('/SingleBullding/{id}' , 'BuController@ShowSingle');
    Route::get('/ajax/bu/infomation' , 'BuController@getAjaxInfo');


    Route::get('/user/create/bullding' , 'BuController@userAddView');
    Route::post('/user/create/bullding' , 'BuController@userStore');

    Route::get('/user/bulldingShow' , 'BuController@showUserBuldding')->middleware('auth');
    Route::get('/user/bulldingShowWatting' , 'BuController@bulldingShowWatting')->middleware('auth');
    Route::get('/user/editSetting' , 'UsersController@usereditInfo')->middleware('auth');
    Route::patch('/user/editSetting' , ['as' => 'user.editSetting' , 'uses' => 'UsersController@userUpdateProfile'])->middleware('auth');
    Route::post('/user/changePassword' , 'UsersController@changePassword')->middleware('auth');

    Route::get('/user/edit/bullding/{id}' , 'BuController@userEditBullding')->middleware('auth');
    Route::patch('/user/update/bullding' , 'BuController@userUpdateBullding')->middleware('auth');







    Route::get('/contact' , 'HomeController@contact');

    Route::post('/contact' , 'ContactController@store');







    Route::get('/home', 'HomeController@index');

    Route::get('locale/{locale}', function ($locale){
      Session::put('locale', $locale);
      return redirect()->back();
    });
});
