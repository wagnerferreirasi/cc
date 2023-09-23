<?php

use App\Livewire\CartComponent;
use App\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('home');
Route::any('/add', [HomeComponent::class, 'addCart'])->name('add');
Route::get('/cart', CartComponent::class)->name('cart');
