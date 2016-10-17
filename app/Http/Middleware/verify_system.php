<?php

namespace App\Http\Middleware;
use App\Http\Controllers\Controller;
use App\Models\MemberToken;
use Closure;

class verify_system extends Controller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $model;

    public function __construct(MemberToken $usertoken) {
        $this->model = $usertoken;
    }

    public function handle($request, Closure $next)
    {
        $result['data'] = ['project' => 'matching',];
        $token = $request -> header('token');
        if($this->model->where('token',$token)->first() == False){
                return $this->buildResponseError('422','0','Token Not Found','1');
        }
       $timelocal = $request -> header('time');
       $timeserver = date('m/d/Y H:i:s');  
       $valuetimeout = 3;
       if((strtotime($timeserver) - strtotime($timelocal)) > $valuetimeout) {       
           return $this->buildResponseError('422','0','Request Time Out','1');       
        }
        return $next($request);
    }
}
