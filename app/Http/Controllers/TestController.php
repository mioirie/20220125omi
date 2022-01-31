<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public static function index()
    {
        $items = Test::all();
        return view('index', ['items' =>$items]);
    }

    public function createTodo(Request $request)
    {
        $form = $request->all(); // 送信されたデータを連想配列に直す['contact' => inputタグに入力した値]
        Test::create($form);
        return redirect('/'); // web.phpのRoute::get('/', [TestController::class, 'index']);に対してアクセス
    }

    //ここから下が更新の工程です//

    public function updateTodo(Request $request)
    {
        $this->validate($request, Test::$rules);
          dd($request->content);
        $form = $request->except(['_token']); // 送信されたデータを連想配列に直す['contact' => inputタグに入力した値]
        //Test::update($form);//
        Test::where('id',$request->id)->update($request);//この行を付け加えました　20220130//
        return redirect('/');
        // →web.phpのRoute::get('/todo/update', [TestController::class, 'index']);に対してアクセス
    }

}