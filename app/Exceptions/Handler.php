<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
        //
    }
    public function render($request, Exception $e)
       {
           if($this->isHttpException($e))
           {
               switch ($e->getStatusCode()) 
                   {
                   // not found
                   case 404:
                    return redirect('dashboard/product');
                   break;

                   // internal error
                   case '500':
                    return redirect('dashboard/product');
                   break;

                   default:
                       return $this->renderHttpException($e);
                   break;
               }
           }
           else
           {
                   return parent::render($request, $e);
           }
       }
}
