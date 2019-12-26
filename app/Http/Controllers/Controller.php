<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function httpOk(array $response = []): JsonResponse
    {
        if (!isset($response['code'])) {
            $response['code'] = Response::HTTP_OK;
        }

        if (!isset($response['message'])) {
            $response['message'] = __('success');
        }

        if (!isset($response['data'])) {
            $response['data'] = [];
        }

        return response()->json($response, $response['code']);
    }
}
