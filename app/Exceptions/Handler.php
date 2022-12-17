<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            if ($this->isHttpException($e)) {
            switch ($e->getStatusCode()) {

                // not authorized
                case '403':
                return redirect('/');
                break;

                // not found
                case '404':
            return redirect('/project-info/1/99999999');
                    break;

                // internal error
            case '419':
                return redirect('/');
                break;
 case '498':
        return redirect('/') ;
         break;
                case '405':
                return redirect('/');
                break;

                default:
                    return $this->renderHttpException($e);
                    break;
            }
        }
        
        });
    }
}
