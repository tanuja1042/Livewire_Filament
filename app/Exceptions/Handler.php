<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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
     */
    public function register(): void
    {
        $this->renderable(function (Throwable $exception, $request) {
            if ($request->expectsJson()) {
                return $this->handleApiException($request, $exception);
            }

            return parent::render($request, $exception);
        });
    }

    /**
     * Handle exceptions for API requests.
     */
    private function handleApiException($request, Throwable $exception)
    {
        // dd("hello");
        if ($exception instanceof \Illuminate\Validation\ValidationException) {
            return response()->json([
                'status' => 'error',
                'errors' => $exception->errors(),
            ], 422);
        }

        return response()->json([
            'status' => 'error',
            'message' => $exception->getMessage(),
        ], $exception->getCode() ?: 400);
    }
}
