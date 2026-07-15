<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // \App\Http\Middleware\UnderConstruction::class,

    ];

    protected $middlewareGroups = [
        'web' => [
            // --- IGNORE ---  
        ],

        'api' => [
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $middlewareAliases = [
        // --- IGNORE ---
    ];

    protected $routeMiddleware = [
        // 'construction' => \App\Http\Middleware\UnderConstruction::class,
    ];
}