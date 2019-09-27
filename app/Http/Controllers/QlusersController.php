<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class QlusersController extends Controller
{
    public function getusers(){
        $allusers = user::orderBy('id','desc')
            ->paginate(12);
        return view('qlusers', compact('allusers'));
    }
    public function deluser($id){
        user::destroy($id);
        return back();
    }
}
