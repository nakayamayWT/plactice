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
            'feedback' => 'max:10000',
        ]);
        $input_data = $request->all();

        return view('front.confirm', ['input_data' => $input_data]);
    }

    public function send(Request $request)
    {

        $action = $request->get('action', 'return');
        $input = $request->except('action');


        if ($action === 'submit') {
            $confirm = new Answer;
            $confirm->fill($input);
            $confirm->save(); // 保存
            return redirect()->route('front.index', ['save' => 'アンケートを送信しました。']);
        } else {
            return redirect()->route('front.index')->withInput($input);
        }
    }
}
