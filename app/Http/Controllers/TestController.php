<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
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

    //ここから下、更新の工程//
    public function updateTodo(Request $request)
    {
        $form = $request->all(); // 送信されたデータを連想配列に直す['contact' => inputタグに入力した値]
        Test::update($form['_token']);
        return redirect('/todo/update');
        // →web.phpのRoute::get('/todo/update', [TestController::class, 'index']);に対してアクセス
    }

}