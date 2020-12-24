<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Age;
use App\Answer;


class FrontController extends Controller
{
    //

    public function create() //フォーム投稿画面
    {
        $ages = Age::all();
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
        $is_send_email = $request->input('is_send_email', 2);
        $feedback = $request->feedback;
        $input_data = [
            'fullname' => $fullname,
            'gender' => $gender,
            'age_id' => $age_id,
            'email' => $email,
            'is_send_email' => $is_send_email,
            'feedback' => $feedback,

        ];

        return view('front.confirm', ['input_data' => $input_data]);
    }

    public function send(Request $request)
    {
        // if ($request->get('back')) {
        //     return redirect()->route('front.index')->withInput();
        // } else {
        //     $fullname = $request->fullname;
        //     $gender = $request->gender;
        //     $age_id = $request->age_id;
        //     $email = $request->email;
        //     $check = $request->input('check', 'OFF');
        //     $feedback = $request->feedback;
        //     $answers = [
        //         'fullname' => $fullname,
        //         'gender' => $gender,
        //         'age_id' => $age_id,
        //         'email' => $email,
        //         'check' => $check,
        //         'feedback' => $feedback,

        //     ];
        //     $answers = Answer::insert(
        //         ['answers' => $answers]
        //     );
        // }
        $action = $request->get('action', 'return');
        $input = $request->except('action');


        if ($action === 'submit') {
            $confirm = new Answer;
            $confirm->fullname = $request->fullname;
            $confirm->gender = $request->gender;
            $confirm->age_id = $request->age_id;
            $confirm->email = $request->email;
            $confirm->is_send_email = $request->is_send_email;
            $confirm->feedback = $request->feedback;

            // 保存
            $confirm->save();
        }
    }
}
