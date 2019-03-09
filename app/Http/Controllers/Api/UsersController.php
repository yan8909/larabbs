<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function store(UserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        return $this->response->created();
    }
}
