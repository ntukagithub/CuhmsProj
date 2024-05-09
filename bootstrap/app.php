<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\http\Middleware\Accountancy;
use App\http\Middleware\Admin;
use App\http\Middleware\B_administration;
use App\http\Middleware\Ba_hr;
use App\http\Middleware\Civil_engineering;
use App\http\Middleware\Clinical_medicine;
use App\http\Middleware\Computer_science;
use App\http\Middleware\Electrical_engineering;
use App\http\Middleware\It;
use App\http\Middleware\Laboratory_engineering;
use App\http\Middleware\Law;
use App\http\Middleware\Marketing;
use App\http\Middleware\Procurement;
use App\http\Middleware\Tourism;



return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'accountancy'=>Accountancy::class,
            'admin'=>Admin::class,
            'b_administration'=>B_administration::class,
            'ba_hr'=>Ba_hr::class,
            'civil_engineering'=>Civil_engineering::class,
            'clinical_medicine'=>Clinical_medicine::class,
            'computer_science'=>Computer_science::class,
            'electrical_engineering'=>Electrical_engineering::class,
            'it'=>It::class,
            'laboratory_engineering'=>Laboratory_engineering::class,
            'law'=>Law::class,
            'marketing'=>Marketing::class,
            'procurement'=>Procurement::class,
            'tourism'=>Tourism::class
        ]);
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
