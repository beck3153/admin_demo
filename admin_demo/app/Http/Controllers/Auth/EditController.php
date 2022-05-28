<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EditController extends Controller
{

    public function edit(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->input('name');
        if(!empty($request->input('password'))&&($request->input('password') == $request->input('password_confirmation'))){
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();
        return view('home');
    }

}
