<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Repositories\Auth\ResetPasswordRepository;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ResetPasswordController extends Controller
{

    /**
     * @var ResetPasswordRepository
     */
      protected $repository;
    /**
     * ResetPasswordController constructor.
     *
     * @param ResetPasswordRepository $repository
     */
    public function __construct(ResetPasswordRepository $repository)
    {
        $this->repository = $repository;
    }
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Reset password
     * save new password
     *
     * @param Request $request
     * @param string  $token
     *
     * @return JsonResponse
     * @throws ValidationException|Exception
     */
    public function postReset(
        Request $request,
        string $token
    ): JsonResponse
    {
        $request->merge(['token' => $token]);
        $input = $this->validate($request, config('validation-rules.password-reset'));
        $data = $this->repository->process($input);
        return response()->json($data, $data['code']);
    }
}
