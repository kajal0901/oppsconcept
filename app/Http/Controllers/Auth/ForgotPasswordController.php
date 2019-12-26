<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\Auth\ForgotPasswordRepository;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    /**
     * @var ForgotPasswordRepository
     */
    protected $repository;
    /**
     * ForgotPasswordController constructor.
     *
     * @param ForgotPasswordRepository $repository
     */
    public function __construct(ForgotPasswordRepository $repository)
    {
        $this->repository = $repository;
    }
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;


    public function sendResetLinkEmail(Request $request): JsonResponse
    {
        $input = $this->validate($request, config('validation-rules.forgot-password'));
        $data = $this->repository->process($input);
        return response()->json($data, $data['code']);
    }
}
