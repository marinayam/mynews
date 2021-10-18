<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv="X-UA-Compatible" content ="IE = edge">
        <meta name = "viewport" content = "width=device-width,initial-scale=1">
        <title>MyProfile</title>
        {{-- layouts/admin.blade.phpを読み込む --}}
        @extends('layouts.admin')
        
        {{-- admin.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む --}}
        @section('title','Myプロフィール')
        
    </head>
    <body>
        
        {{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
        @section('content')
        <div class ="container">
            <div class="row">
                <div class ="col-md-8 mx-auto">
                    <h2>Myプロフィール</h2>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>