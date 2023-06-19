<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Request;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController {
    public function getAbout( $the_about) {
        return 'Thông tin này hợp lệ '. $the_about;
    }

}
