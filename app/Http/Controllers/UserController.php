<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\fake;

class UserController extends Controller
{
    public function dashboard(){
        return view('user');
    }
    public function profile(){
        return view('profile');
    }

    public function fake(){
        // $users = DB::table('fake')->get();
        // $result = json_decode($users, true);
        $users = fake::paginate(10);
 
        return view('user', ['data' => $users]);
        // $data=fake::with('edulevel')->paginate(5);
        // return view('user',compact('data'));
    }
}
