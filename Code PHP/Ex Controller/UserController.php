<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Request;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController {
    public function getUser(Request $request) {
        $user = User::find($request -> user_id);

        return response() -> json($user);
    }
    public function updateUser(Request $request)
    {
        return 'Thông tin người dùng đã được cập nhật.';
    }

}
