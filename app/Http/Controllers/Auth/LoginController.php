<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Repositories\Auth\LoginRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    /**
     * @var LoginRepository
     */
    protected $loginRepository;

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /***
     * LoginController constructor.
     *
     * @param LoginRepository $loginRepository
     */
    public function __construct(LoginRepository $loginRepository)
    {
        $this->loginRepository = $loginRepository;
     //   $this->middleware('guest')->except('logout');
    }

    public function login(Request $request): JsonResponse
    {
       // dd($request->all());
        $input = $this->validate($request, config('validation-rules.login'));
        $oUser = $this->loginRepository->process($input);

        return response()->json($oUser, $oUser['code']);
    }

}
