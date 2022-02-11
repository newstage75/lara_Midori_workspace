<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>

    <style>
      th{ background-color: #87ceeb; padding:10px; }
      td{ background-color: #eee; padding: 10px;}
    </style>

    <!-- BootStrapの導入 -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- スタイルシートへのリンクタグ(P135) -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body>
    <h1>Hello/index</h1>
    <p>{!!$msg!!}</p>

    <table border="1">
    @foreach($data as $item)
      <tr>
        <th>{{$item->id}}</th>
        <td>{{$item->all_data}}</td>
      </tr>
    @endforeach
    </table>
    <hr>

  </body>
</html>