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

class HelloController extends Controller
{

  public function index($id = -1)
  {
    if($id >= 0)
    {
      $msg = 'get name like "' . $id.  '".';
      $result = DB::table('people')
        ->where('name', 'like', '%'. $id . '%')->get();
    }
    else {
      $msg = 'get people recordes.';
      $result = DB::table('pepple')->get();
    }

    $data = [
      'msg' => $msg,
      'data' => $result
    ];

    return view('hello.index', $data);
  }
}
