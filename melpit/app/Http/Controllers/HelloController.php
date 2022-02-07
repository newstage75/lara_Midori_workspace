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

class HelloController extends Controller
{

  public function index(Request $request)
  {
    $data = [
      'msg' => $request->msg,
      'data' => $request->alldata,
    ];
    return view('hello.index', $data);
  }
}
