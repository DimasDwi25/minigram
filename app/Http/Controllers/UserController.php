<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('user.profile.index');
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);

        return view('user.profile.edit', compact('data'));
    }


}
