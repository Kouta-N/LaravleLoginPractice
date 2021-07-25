<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(session('login_success'))
    <div class="alert alert-success">
            {{session('login_success')}}
    </div>
@endif
名前:{{ Auth::user()->name }}<br>
メアド:{{ Auth::user()->email }}<br>

</body>
</html>
