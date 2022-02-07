<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>

    <style>
      th{ background-color: #87ceeb; padding:10px; }
      td{ background-color: #eee; padding: 10px;}
    </style>
  </head>
  <body>
    <h1>Hello/index</h1>
    <p>{!!$msg!!}</p>
    <ul>
      @foreach($data as $item)
      <li>{!!$item!!}</li>
      @endforeach
    </ul>
  </body>
</html>