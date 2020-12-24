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

    public function confirm(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'gender' => 'required',
            'age_id' => 'required',
            'email' => 'required|email',
            // 'feedback'=>'max:10',
        ]);
        // $input_data = $request->all();
        $fullname = $request->fullname;
        $gender = $request->gender;
        $age_id = $request->age_id;
        $email = $request->email;
        $check = $request->input('check', 'OFF');
        $feedback = $request->feedback;
        $input_data = [
            'fullname' => $fullname,
            'gender' => $gender,
            'age_id' => $age_id,
            'email' => $email,
            'check' => $check,
            'feedback' => $feedback,

        ];

        return view('front.confirm', ['input_data' => $input_data]);
    }

    public function send(Request $request)
    {
        if ($request->get('back')) {
            return redirect()->route('front.index')->withInput();
        }
    }
}
