@extends('front.layouts.app')

@section('title','確認画面｜投稿フォーム')
@section('description','確認画面です')
@section('keywords','投稿,laravel')


@section('content')

<h2 class="mb-4 text-center">内容確認</h2>
<form>
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">氏名</th>
                <td>{{$input_data['fullname']}}
                <input type="hidden" name=""></td>
            </tr>
            <tr>
                <th scope="row">性別</th>
                <td>{{$input_data['gender']}}</td>
            </tr>
            <tr>
                <th scope="row">年代</th>
                <td>{{$input_data['age_id']}}</td>
            </tr>
            <tr>
                <th scope="row">メールアドレス</th>
                <td>{{$input_data['email']}}</td>
            </tr>
            <tr>
                <th scope="row">メール送信可否</th>
                <td>{{$input_data['check']}}</td>
            </tr>
            <tr>
                <th scope="row">ご意見</th>
                <td> {!! nl2br($input_data['feedback']) !!}</td>
            </tr>
            <tr>
        </tbody>
    </table>
</form>
</div>
@endsection