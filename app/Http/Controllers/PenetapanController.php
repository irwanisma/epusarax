<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class PenetapanController extends Controller
{
    //
    function daftarMajlis()
    {
        return view('form-layouts');
        //dd("huhu");
        //if (view()->exists($request->path())) {
        //    return view($request->path());
        //}
        //return abort(404);
    }
}
