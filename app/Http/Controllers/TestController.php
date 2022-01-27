<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
      public function createTodo(Request $request)
    {
        $form = $request->all(); // 送信されたデータを連想配列に直す['contact' => inputタグに入力した値]
        Test::create($form);
        return redirect('/'); // web.phpのRoute::get('/', [TestController::class, 'index']);に対してアクセス
    }

      public function index()
    {
        $txt = Test::find($id)->getDetail(); // $this->created_at . $this->content
    }

    public function post(Request $request)
    {
        $test = $request->content;
        $item = $test;
        return view('index', ['item' =>$item]);
    }
}