
<!-- @extends('layouts.default')  -->
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>

  <style>
    body {
      background-color:purple;
    }
    .area {
      width: 80vw;
      height: 600px;
      margin: 0 auto;
      background-color: white;
      border-radius: 10px;
    }
    .todolist_area {
      width: 70vw;
      height: 130px;
      margin: 0 auto;
    }

    .todolist_ttl {
      font-size:25px;
      padding-top:20px;
    
    /*  
      .text {
      margin-left:25px;
    }   */

    .text {
      width: 100px;
      height: 40px;
      
    }

    .form {
      width: 100px;
    }

    .btn-submit {
      color: red;

    .th {
      width: 70vw;
      margin: 0 auto;
    }  
    }

    }

  </style>

<!-- ***************************** CSSここまで ******************************-->
  <div class="area">
    <div class="todolist_area">
      <div class="todolist">
        <h1 class="todolist_ttl">Todo List</h1>
        <form action="todo" method="post"> <!-- formタグで囲いtodoに対してpostリクエストを送信 -->
        @csrf
        <input type="text" name="content"> <!-- 入力した内容を送信 -->
        <button class="btn btn-submit" type="submit"> 追加 </button>  
      </div>
    </div>

  

<!-- 以下、サンプルコード -->
  <table class="todotable">
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    @foreach($items as $item)  
 
<!-- <p>{{$item}}</p>  -->
    <tr>
 	    <th>{{$item->created_at}}</th>
      @csrf
	<!--<th><input type="string" name="content" value={{$item->content}} ></th> -->
    </form>

<!-- ここから下、更新ボタンの作動 -->
<!--  <form action="/todo/update" method="update"> --> <!-- todo/updateに対してupdateリクエストを送信 ※いったんコメントアウトします -->
    <form method="post" action="{{ route('update', ['id' => $item->id]) }}">  <!-- 20220131追加 -->
      <th><input type="string" name="content" value={{$item->content}} ></th> <!-- 20220131追加 -->
      @csrf
      <th><button class="btn btn-update"> 更新 </button></th>
    </form>

<!-- ここから下、削除ボタンの作動 -->
    <form method="post" action="{{ route('delete', ['id' => $item->id]) }}">  <!-- 20220131追加 -->

      @csrf
      <th><button class="btn btn-delete"> 削除 </button></th>
    </form>
    </tr>
    @endforeach
  </table>

  </div>     <!-- "area"の閉じタグ-->

</body>
</html>