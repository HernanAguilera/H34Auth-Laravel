<?php
namespace H34\Auth\Http\Controllers;

use H34\Core\Http\Controllers\BaseController as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class MeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function execute(Request $request, Auth $auth)
    {
        return response()->json($auth->user());
    }
}
