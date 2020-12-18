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
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">氏名</th>
                        <td></td>
                    </tr>
                    {{-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr> --}}
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>