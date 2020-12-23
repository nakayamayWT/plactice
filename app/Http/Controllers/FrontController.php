<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function create() //フォーム投稿画面
    {
        $ages = DB::table('ages')->get();
        return view('front.index', ['ages' => $ages]);
        // return view('index');
    }

    public function post()
    {
    }

    public function confirm(Request $request)
    {

        // $fullname = $request->fullname;
        // $gender = $request->gender;
        // $age_id = $request->age_id;
        // $email = $request->email;
        // $check = $request->check;
        // $feedback = $request->feedback;
        // $input_data = [
        //     'fullname' => $fullname,
        //     'gender' => $gender,
        //     'age_id' => $age_id,
        //     'email' => $email,
        //     'check' => $check,
        //     'feedback' => $feedback,

        // ];

        $request->validate([
            'fullname' => 'required',
            'gender' => 'required',
            'age_id' => 'required',
            'email' => 'required|email',
            // 'feedback'=>'max:10',
        ]);
        $input_data = $request->all();

        return view('front.confirm', ['input_data' => $input_data]);
    }
}
