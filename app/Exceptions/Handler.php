<?php
namespace App\Exceptions;
use Throwable;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Debug\Exception\FlattenException;
use Symfony\Component\Debug\ExceptionHandler as SymfonyExceptionHandler;
use App\Mail\Exception as ExceptionMail;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

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
     * Report or log an exception.
     *
     * @param  \Throwable $exception
     * @return void
     * @throws Exception
     */
    public function report(Throwable $exception)
    {
    if ($this->shouldReport($exception) && \App::environment('production'))
    	$this->sendExceptionEmail($exception);

    parent::report($exception);

}

    /**
     * Parse the exception and send email
     *
     * @param Throwable $exception
     */
    public function sendExceptionEmail(Throwable $exception)
    {
    	try
    	{
    		$e = FlattenException::create($exception);
    	}
    	catch (Throwable $e)
    	{
    		$e = FlattenException::createFromThrowable($exception);
    	}

    	try
    	{
    		$destino 	= config('luure.developer');

    		$assunto 	= \Lang::get('mail.exception_subject', [
    			'server' => strtoupper(app()->environment()),
    			'ip' => request()->server('SERVER_ADDR')
    		]);

    		$erro = 	$exception->getMessage();

    		$texto  = '<pre>';
    		$texto .= 'Error:'.$erro.'<br />';
    		$texto .= 'File:'.$exception->getFile().':'. $exception->getLine().'<br /><br />';
    		$texto  .= '</pre>';

    		$texto  .= '<pre>';
    		foreach ($exception->getTrace() as $value)
    		{
    			if(isset($value['class']))
    				$texto  .= $value['class'].$value['type'].$value['function'].'<br />';
    			else
    				$texto  .= $value['file'].':'.$value['line'].'<br />';
    		}
    		
    		$texto  .= '</pre>';

    		$mailFrom 	= config('mail.mailers.smtp.username');
    		$url 		= 'smtps://'.config('mail.mailers.smtp.host').':'.config('mail.mailers.smtp.port');
    		$userPass	= config('mail.mailers.smtp.username').':'.config('mail.mailers.smtp.password');
    		
    		$process = Process::fromShellCommandline(base_path()."/sendmail.sh '$mailFrom' '$url' '$userPass' '$assunto' '$erro' '$texto'");
    		$process->run();

    		if (!$process->isSuccessful()) {
    			throw new ProcessFailedException($process);
    		}
    	}
    	catch (Throwable $ex)
    	{
    		\Log::debug($ex->getMessage().PHP_EOL.'File:'.$ex->getFile().':'. $ex->getLine());
    	}
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        /**
         * Had to put this in because it was throwing an exception if the user wasn't unauthenticated
         */
        if ( ! $this->shouldReport($exception)) {
        	return parent::render($request, $exception);

        }
        if(config('app.debug')) {
        	return parent::render($request, $exception);

        }
        return response()->view('errors.500', [], 500);

    }
}