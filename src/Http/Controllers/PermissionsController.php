<?php
namespace H34\Auth\Http\Controllers;

use H34\Core\Http\Controllers\BaseController as Controller;
use H34\Auth\Repositories\PermissionRepository;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'items' => PermissionRepository::getAll()
        ]);
    }
}
