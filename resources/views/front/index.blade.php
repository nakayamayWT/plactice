@extends('front.layouts.app')

@section('title','投稿フォーム')
@section('description','laravelを使用した投稿フォームです。')
@section('keywords','投稿,laravel')


@section('content')


<form action="{{route("front.confirm")}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">氏名<span
                class="text-danger ml-2 font-weight-bold">※</span></label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="name" name="fullname" value="{{old('fullname')}}">
            @if ($errors->has('fullname'))
            <p class="alert alert-danger m-1 p-1">{{ $errors->first('fullname') }}</p>
            @endif
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-3 pt-0">性別<span class="text-danger ml-2 font-weight-bold">※</span>
            </legend>
            <div class="col-sm-8">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="男性" checked>
                    <label class="form-check-label" for="gender1">
                        男性
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="女性">
                    <label class="form-check-label" for="gender2">
                        女性
                    </label>
                </div>
                @if ($errors->has('gender'))
            <p class="alert alert-danger m-1 p-1">{{ $errors->first('gender') }}</p>
            @endif
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <label for="age" class="col-sm-3 col-form-label">年代<span
                class="text-danger ml-2 font-weight-bold">※</span></label>
        <div class="col-sm-4">
            <select class="custom-select mr-sm-2" id="age" name="age_id">
                <option selected>選択してください</option>
                @foreach ($ages as $item)
                <option value="{{$item->id}}">{{$item->age}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-3 col-form-label col-form-label">メールアドレス</div>
        <div class="col-sm-8">
            <input type="email" class="form-control" id="" name="email">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-3 col-form-label">メール送信可否</div>
        <div class="col-sm-9">登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？<br>
            <input type="checkbox" name="check" id="check" class="mr-2 align-middle" checked><label for="check"
                class="mb-0">送信を許可します</label></div>
    </div>
    <div class="form-group row">
        <label for="textbox" class="col-sm-3 ">ご意見</label>
        <div class="col-sm-8">
            <textarea class="form-control" id="textbox" rows="3" name="feedback"></textarea>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg">登録</button>
    </div>
</form>
</div>
@endsection