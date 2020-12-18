<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function index()
    {
        $ages = DB::table('ages')->get();
        return view('index', ['ages' => $ages]);
        // return view('index');
    }

    public function confirm(Request $request)
    {

        $fullname = $request->fullname;
        $gender = $request->gender;
        $age_id = $request->age_id;
        $email = $request->email;
        $is_send_email = $request->is_send_email;
        $feedback = $request->feedback;

        $input_data = [
            'fullname' => $fullname,
            'gender' => $gender,
            'age_id' => $age_id,
            'email' => $email,
            'is_send_email' => $is_send_email,
            'feedback' => $feedback,

        ];

        return view('confirm.index', ['input_data' => $input_data]);
    }
}
