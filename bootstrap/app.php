<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Create the application instance with proper routing and middleware registration
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up'
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Corrected middleware alias to use an associative array
        $middleware->alias(['admin' => \App\Http\Middleware\AdminMiddleware::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Exception handling logic can be added here if necessary
    })
    ->create();
