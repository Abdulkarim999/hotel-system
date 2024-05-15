<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Homecontroller;



Route::get('/',[Admincontroller::class,'home']);
Route::get('/home',[Admincontroller::class,'index'])->name('home')->middleware('admin');
Route::get('/create_room',[Admincontroller::class,'create_room'])->middleware('admin');
Route::post('/add_room',[Admincontroller::class,'add_room'])->middleware('admin');
Route::get('/view_room',[Admincontroller::class,'view_room'])->middleware('admin');
Route::get('/room_delete/{id}',[Admincontroller::class,'room_delete'])->middleware('admin');
Route::get('/room_update/{id}',[Admincontroller::class,'room_update'])->middleware('admin');
Route::post('/edit_room/{id}',[Admincontroller::class,'edit_room'])->middleware('admin');
Route::get('/room_details/{id}',[HomeController::class,'room_details']);
Route::post('/add_booking/{id}',[HomeController::class,'add_booking']);
Route::get('/booking',[Admincontroller::class,'booking'])->middleware('admin');
Route::get('/delete_booking/{id}',[AdminController::class,'delete_booking'])->middleware('admin');
Route::get('/approve_book/{id}',[AdminController::class,'approve_book'])->middleware('admin');
Route::get('/reject_book/{id}',[AdminController::class,'reject_book'])->middleware('admin');
Route::get('/view_gallery',[Admincontroller::class,'view_gallery'])->middleware('admin');
Route::post('/upload_gallery',[AdminController::class,'upload_gallery'])->middleware('admin');
Route::get('/delete_gallery/{id}',[AdminController::class,'delete_gallery'])->middleware('admin');
Route::post('/contact',[HomeController::class,'contact']);
Route::get('/all_message',[AdminController::class,'all_message'])->middleware('admin');
Route::get('/send_mail/{id}',[AdminController::class,'send_mail'])->middleware('admin');
Route::post('/mail/{id}',[AdminController::class,'mail'])->middleware('admin');
Route::get('/our_rooms',[HomeController::class,'our_rooms']);
Route::get('/our_about',[HomeController::class,'our_about']);
Route::get('/our_gallery',[HomeController::class,'our_gallery']);
Route::get('/our_contact',[HomeController::class,'our_contact']);