<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .container-xl {
            max-width: 800px;
        }
    </style>
</head>

<body>
    <div class="container-xl mt-5 p-5 border">
        <form>
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">氏名<span
                        class="text-danger ml-2 font-weight-bold">※</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-3 pt-0">性別<span
                            class="text-danger ml-2 font-weight-bold">※</span></legend>
                    <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" value="option1"
                                checked>
                            <label class="form-check-label" for="gender1">
                                男性
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender2" value="option2">
                            <label class="form-check-label" for="gender2">
                                女性
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <label for="age" class="col-sm-3 col-form-label">年代<span
                        class="text-danger ml-2 font-weight-bold">※</span></label>
                <div class="col-sm-8">
                    <select class="custom-select mr-sm-2" id="age">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3">メールアドレス</div>
                <div class="col-sm-9">登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？<br>
                    <input type="checkbox" name="ok" id="ok" class="mr-2 align-middle" checked><label for="ok" class="mb-0">送信を許可します</label></div>
            </div>
            <div class="form-group row">
                <label for="textbox" class="col-sm-3 ">ご意見</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="textbox" rows="3"></textarea>
                </div>
            </div>
        </form>
    </div>
</body>

</html>