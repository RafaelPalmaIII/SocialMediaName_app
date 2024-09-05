<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    public function Profile_show(){

        // getting that logged in user ID

        $id = Auth::user()->id;

        // finding user ID

        $user = User::find($id);
        return view('profile_show.blade.php', compact('Data'));
    }
}

