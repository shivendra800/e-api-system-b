<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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


        $this->renderable(function (Throwable $e) {
            if($e instanceof NotFoundHttpException) {
                Log::info('From renderable method: '.$e->getMessage());

                // you can return a view, json object, e.t.c
                // $notification = array(
                //     'message' => "From renderable method: Resource not found!",
                //     'alert-type' => 'error'
                // );
                return redirect()->back()->with('error_message',$e->getMessage());
                // return response()->json([
                //     'message' => 'From renderable method: Resource not found'
                // ], Response::HTTP_NOT_FOUND);
            }

            return redirect()->back()->with('error_message',$e->getMessage());

            // return response()->json([
            //     'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
            //     'message' => $e->getMessage()
            // ], Response::HTTP_INTERNAL_SERVER_ERROR);
        });
    }

    public function render($request,$exception)
    {
         if($exception instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException){
             return redirect('/');
         }

        return parent::render($request, $exception);
    }
}
