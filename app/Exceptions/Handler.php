<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
<<<<<<< HEAD
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
=======
     * The list of the inputs that are never flashed to the session on validation exceptions.
>>>>>>> c7c93a3 (sample todo project using laravel)
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
<<<<<<< HEAD
     *
     * @return void
     */
    public function register()
=======
     */
    public function register(): void
>>>>>>> c7c93a3 (sample todo project using laravel)
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
