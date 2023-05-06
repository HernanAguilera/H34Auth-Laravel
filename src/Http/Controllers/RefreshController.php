<?php

namespace H34\Auth\Http\Controllers;

use H34\Core\Http\Requests\JsonRequest;
use H34\Core\Http\Controllers\BaseController as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefreshController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function execute(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorization' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
}
