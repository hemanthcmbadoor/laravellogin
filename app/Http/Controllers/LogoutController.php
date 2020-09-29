<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function logout(){
        $value = session()->get('userId');
        $ph = session()->get('userPhone');
        session()->forget('userPhone');
        session()->forget('userId');
        return redirect('/');
    }
}
