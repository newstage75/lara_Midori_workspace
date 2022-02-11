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

      //LaraMidoriP152コレクションの機能mergeとunique
      $even = Person::get()->filter(function($item)
        {
          return $item->id % 2 == 0;
        });

      $even2 = Person::get()->filter(function($item)
        {
          return $item->age % 2 == 0;
        });
      $result = $even->merge($even2);

      //自分でコードの追加！コレクションを並び帰るにはsortByを使うこと！
      $result2 = $result->sortBy('id');

      $data = [
        'msg' => $msg,
        'data' => $result2,
      ];

      return view('hello.index', $data);
  }
}
