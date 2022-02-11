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

      //laraMidoriP156MyCollectionクラスの、fielsメソッドの使用
      $re = Person::get();
      $fields = Person::get()->fields();

      $data = [
        'msg' => implode(', ', $fields),
        'data' => $re,
      ];

      return view('hello.index', $data);
  }
}
