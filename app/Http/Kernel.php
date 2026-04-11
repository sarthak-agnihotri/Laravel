protected $routeMiddleware = [
    'check.age' => \App\Http\Middleware\CheckAge::class,
    ];

'check.login'=>\App\Http\Middleware\CheckLogin::class,