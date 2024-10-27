<?php

use Illuminate\Support\Facades\Route;
use Modules\Authentication\app\Http\Controllers\Auth\AuthenticatedSessionController;
use Modules\Authentication\app\Http\Controllers\Auth\EmailVerificationNotificationController;
use Modules\Authentication\app\Http\Controllers\Auth\NewPasswordController;
use Modules\Authentication\app\Http\Controllers\Auth\PasswordResetLinkController;
use Modules\Authentication\app\Http\Controllers\Auth\RegisteredUserController;
use Modules\Authentication\app\Http\Controllers\Auth\VerifyEmailController;

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest')
    ->name('register');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest')
    ->name('login');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.store');

Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');