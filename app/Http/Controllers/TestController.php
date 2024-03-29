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

    //ここから下、更新ボタンの作動//
    public function updateTodo(Request $request)
    {
        $this->validate($request, Test::$rules);
        //dd($request->content);//
        $form = $request->except(['_token']);// 送信されたデータを連想配列に直す['contact' => inputタグに入力した値]//
        Test::where('id',$request->id)->update($form);//20220130追加//
        return redirect('/');
    }

    //ここから下、削除ボタンの作動//

    public function deleteTodo(Request $request)
    {
        $this->validate($request, Test::$rules);
        //dd($request->content);//
        $form = $request->except(['_token']);
        Test::where('id',$request->id)->delete($form);
        return redirect('/');
    }

}
