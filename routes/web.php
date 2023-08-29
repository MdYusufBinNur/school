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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
});

Auth::routes([
    'register'=> false,
    'reset'=> false,

]);

Route::get('/home', 'HomeController@index')->name('home');

//---------------SOCIAL LINKER---------------------
Route::get('linker',['middleware' => 'auth','uses'=>'SocialLinkerController@create'])->name('linker');
Route::get('linker_list',['middleware' => 'auth','uses'=>'SocialLinkerController@index'])->name('linker_list');
Route::post('add_new_linker','SocialLinkerController@store')->name('add_new_linker');
Route::get('/get_linker_info/{id}','SocialLinkerController@edit');
Route::post('/update_linker_info','SocialLinkerController@update');
Route::get('/delete_linker/{id}','SocialLinkerController@destroy');


//----------------- SLIDER ------------------------------
Route::get('slider',['middleware' => 'auth','uses'=>'SliderController@create'])->name('slider');
Route::get('slider_list',['middleware' => 'auth','uses'=>'SliderController@index'])->name('slider_list');
Route::post('add_new_slider','SliderController@store')->name('add_new_slider');
Route::get('/get_slider_info/{id}','SliderController@edit');
Route::post('/update_slider_info','SliderController@update');
Route::get('/delete_slider/{id}','SliderController@destroy');

//------------------CONTACT-------------------------
Route::get('contact',['middleware' => 'auth','uses' =>'ContactController@create'])->name('contact');
Route::get('contact_list',['middleware' => 'auth','uses'=>'ContactController@index'])->name('contact_list');
Route::post('add_new_contact','ContactController@store')->name('add_new_contact');
Route::get('/get_contact_info/{id}','ContactController@edit');
Route::post('/update_contact_info','ContactController@update');
Route::get('/delete_contact/{id}','ContactController@destroy');

Route::get('/delete_contact_page/{id}','ContactController@destroy_message');
Route::get('/contact_page_list',['middleware' => 'auth','uses'=>'ContactController@view_message']);

//------------------ADDRESS-------------------------
Route::get('address',['middleware' => 'auth','uses' =>'AddressController@create']);
Route::get('address_list',['middleware' => 'auth','uses'=>'AddressController@index']);
Route::post('add_new_address','AddressController@store');
Route::get('/get_address_info/{id}','AddressController@edit');
Route::post('/update_address_info','AddressController@update');
Route::get('/delete_address/{id}','AddressController@destroy');


//----------------- ABOUT ------------------------------
Route::get('about',['middleware' => 'auth','uses'=>'AboutController@create'])->name('about');
Route::get('about_list',['middleware' => 'auth','uses'=>'AboutController@index'])->name('about_list');
Route::post('add_new_about','AboutController@store')->name('add_new_about');
Route::get('/get_about_info/{id}','AboutController@edit');
Route::post('/update_about_info','AboutController@update');
Route::get('/delete_about/{id}','AboutController@destroy');

//----------------- MESSAGE ------------------------------
Route::get('message',['middleware' => 'auth','uses'=>'CornerMessageController@create'])->name('about');
Route::get('message_list',['middleware' => 'auth','uses'=>'CornerMessageController@index'])->name('about_list');
Route::post('add_new_message','CornerMessageController@store')->name('add_new_about');
Route::get('/get_message_info/{id}','CornerMessageController@edit');
Route::post('/update_message_info','CornerMessageController@update');
Route::get('/delete_message/{id}','CornerMessageController@destroy');

//----------------- NOTICE ------------------------------
Route::get('notice',['middleware' => 'auth','uses'=>'NoticeController@create'])->name('about');
Route::get('notice_list',['middleware' => 'auth','uses'=>'NoticeController@index'])->name('about_list');
Route::post('add_new_notice','NoticeController@store')->name('add_new_about');
Route::get('/get_notice_info/{id}','NoticeController@edit');
Route::post('/update_notice_info','NoticeController@update');
Route::get('/delete_notice/{id}','NoticeController@destroy');


//-----------------------Gallery----------------------
Route::get('gallery',['middleware' => 'auth','uses'=>'GalleryController@create'])->name('gallery');
Route::get('gallery_list',['middleware' => 'auth','uses'=>'GalleryController@index'])->name('gallery_list');
Route::post('add_new_gallery','GalleryController@store')->name('add_new_gallery');
Route::get('/get_gallery_info/{id}','GalleryController@edit');
Route::post('/update_gallery_info','GalleryController@update');
Route::get('/delete_gallery/{id}','GalleryController@destroy');

Route::get('delete_selected_image','GalleryController@delete_selected_image');
Route::post('projects/media', 'GalleryController@test_crud')->name('projects.storeMedia');

//----------------- FACILITY ------------------------------
Route::get('facility',['middleware' => 'auth','uses'=>'FacilityController@create']);
Route::get('facility_list',['middleware' => 'auth','uses'=>'FacilityController@index']);
Route::post('add_new_facility','FacilityController@store');
Route::get('/get_facility_info/{id}','FacilityController@edit');
Route::post('/update_facility_info','FacilityController@update');
Route::get('/delete_facility/{id}','FacilityController@destroy');


//----------------- ACADEMIC ------------------------------
Route::get('academy',['middleware' => 'auth','uses'=>'AcademicController@create']);
Route::get('academy_list',['middleware' => 'auth','uses'=>'AcademicController@index']);
Route::post('add_new_academy','AcademicController@store');
Route::get('/get_academy_info/{id}','AcademicController@edit');
Route::post('/update_academy_info','AcademicController@update');
Route::get('/delete_academy/{id}','AcademicController@destroy');

//----------------- MEMBER ------------------------------
Route::get('member',['middleware' => 'auth','uses'=>'MemberController@create']);
Route::get('member_list',['middleware' => 'auth','uses'=>'MemberController@index']);
Route::post('add_new_member','MemberController@store');
Route::get('/get_member_info/{id}','MemberController@edit');
Route::post('/update_member_info','MemberController@update');
Route::get('/delete_member/{id}','MemberController@destroy');

//----------------- NEWS AND EVENT ------------------------------
Route::get('/news_events',['middleware' => 'auth','uses'=>'NewsAndEventController@create'])->name('news_events');
Route::get('/news_events_list',['middleware' => 'auth','uses'=>'NewsAndEventController@index'])->name('news_events');
Route::post('/add_new_news_events','NewsAndEventController@store')->name('news_events');
Route::get('/get_news_events_info/{id}','NewsAndEventController@edit');
Route::post('/update_news_events_info','NewsAndEventController@update');
Route::get('/delete_news_events/{id}','NewsAndEventController@destroy');


//----------------------------WEB-------------------------------
Route::get('/','WebController@index');
Route::get('web_gallery','WebController@gallery');
Route::get('/web_categorized_gallery/{id}','WebController@web_categorized_gallery');
Route::get('/web_video','WebController@youtube_api');
Route::get('/get_video_data','WebController@get_video_data');

Route::get('/web_notice','WebController@notice');
Route::get('/web_news_events','WebController@news_events');
Route::get('/web_academy/{name}','WebController@academic');
Route::get('/web_message/{id}','WebController@message');
Route::get('/web_facility/{lab}','WebController@facility');
Route::get('/web_contact','WebController@contact_page');
Route::get('/web_about','WebController@about');

Route::get('/web_member_info/{name}','WebController@member_info');



Route::get('get_footer_address','WebController@get_footer_address');
Route::get('get_footer_contact','WebController@get_footer_contact');
Route::get('get_footer_social_linker','WebController@get_footer_social_linker');
Route::get('get_header_messages_list','WebController@get_header_messages_list');
/*SAVE MESSAGE*/
Route::post('/web_message_us','ContactController@save_message');
