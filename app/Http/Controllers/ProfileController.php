<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view("pages.profile");
    }

    public function settings(){
        return view("pages.settings");
    }

    public function theme(){
        $userId = Auth::user()->id;

        $user = User::find($userId);

        $theme = $user->theme;

        if($theme == "false"){
            $theme = "true";
        }else if($theme == "true"){
            $theme = "false";
        }

        $user->theme = $theme;
        $user->save();

        return redirect()->back()->with('success', 'Tema je uspešno ažurirana');
    }
}
