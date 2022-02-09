<?php

namespace App\Http\Controllers;

// use App\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//ファイルアクセス用に追加
use Illuminate\Support\Facades\Storage;

//MyClasses/MyServiceを利用
// use App\MyClasses\MyService;

//MyServiceInterfaceの利用
use App\MyClasses\MyServiceInterface;

//MyServiceファサードの使用
use App\Facades\MyService;

//ファサード「DBクラス」の利用
use Illuminate\Support\Facades\DB;

//Personモデルの利用
use App\Person;

//MyPaginatorの利用
use App\Http\Pagination\MyPaginator;

class HelloController extends Controller
{

  public function index(Request $request)
  {
      $msg = 'show people records.';
      $keys = Person::get()->modelKeys();
      $even = array_filter($keys, function($key)
        {
          return $key % 2 == 0;
        });
      $result = Person::get()->except($even);

      $data = [
        'msg' => $msg,
        'data' => $result,
      ];
      return view('hello.index', $data);
  }
}
