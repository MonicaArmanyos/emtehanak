<?php
namespace App\Http\Middleware;

use App\Http\Resources\Error;
use Closure;

class ApiKey
{
    protected $apiKey ;
    public function __construct(){
        $this->apiKey = config('api.api_key');
    }
    
    public function handle($request, Closure $next)
    {
       if ($this->apiKey ==$request->header('x-api-key')){
            return $next($request);
       }else{

        return new Error(403, 'Invalid API key', 'x-api-key');
       }
    }
}