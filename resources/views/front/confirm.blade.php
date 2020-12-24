@extends('front.layouts.app')

@section('title','確認画面｜投稿フォーム')
@section('description','確認画面です')
@section('keywords','投稿,laravel')


@section('content')

<h2 class="mb-4 text-center">内容確認</h2>
<form method="POST" action="{{route("front.send")}}">
 {{var_dump($input_data)}}
    <table class="table">
        {{ csrf_field() }}
        <tbody>
            <tr>
                <th scope="row">氏名</th>
                <td>{{$input_data['fullname']}}
                    <input type="hidden" name="fullname" value="{{$input_data['fullname']}}"></td>
            </tr>
            <tr>
                <th scope="row">性別</th>
                <td>{{$input_data['gender']}}
                    <input type="hidden" name="gender" value="{{$input_data['gender']}}"></td>
            </tr>
            <tr>
                <th scope="row">年代</th>
                <td>{{$input_data['age_id']}}
                    <input type="hidden" name="age_id" value="{{$input_data['age_id']}}"></td>
            </tr>
            <tr>
                <th scope="row">メールアドレス</th>
                <td>{{$input_data['email']}}
                    <input type="hidden" name="email" value="{{$input_data['email']}}"></td>
            </tr>
            {{-- <tr>
                <th scope="row">メール送信可否</th>
                <td>{{$input_data['check']}}
                    <input type="hidden" name="check" value="{{$input_data['check']}}"></td>
            </tr> --}}
            <tr>
                <th scope="row">ご意見</th>
                <td> {!! nl2br($input_data['feedback']) !!}
                    <input type="hidden" name="feedback" value="{{$input_data['feedback']}}"></td>
            <tr>
        </tbody>
    </table>
    <div class="row text-center">
        <div class="col-6">
            <button type="submit" name="back" class="btn btn-primary btn-lg w-50" value="true">再入力
        </div>
        <div class="col-6">
            <button type="submit" class="btn btn-success btn-lg w-50">送信
        </div>
    </div>

</form>
</div>
@endsection