
<!-- @extends('layouts.default')  -->
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH omi</title>
</head>

<body>

  <style>
  body {
    background-color:midnightblue;
  }
  .area {
    width: 65vw;
    margin: 0 auto;
    margin-top: 40px;
    padding-bottom: 20px;
    background-color: white;
    border-radius: 10px;
  }
  .todolist_area{
    width: 60vw;
    margin: 0 auto;
  }
  .todolist_ttl {
    font-size:15px;
    padding-top:20px;
  }
  .todo_input {
    width: 45vw;
    height: 28px;
    border: 1px solid lightgray;
    border-radius: 3px;
  }
  form {
    justify-content: center-between;
  }
  .btn-submit {
    width: 50px;
    height: 30px;
    border: 2px solid violet;
    border-radius: 5px;
    background-color: white;
    color: violet;
    margin-left: 5vw;
    font-size: 10px;
    font-weight: bold;
  }

  .btn-submit:hover {
    width: 50px;
    height: 30px;
    border-radius: 5px;   
    background-color: violet;
    outline: 1px solid violet;
    color: white;
   }

  .todotable{
    width: 55vw;
    margin: 0 auto; 
  }

  .todotable_title{
    font-weight: bold;
  }

  th{
    font-weight: lighter;
    padding-top: 10px;
  }

  .task_input{
    width: 20vw;
    height: 20px;
    border: 1px solid lightgray;
    border-radius: 3px;

  }

  .btn-update{
    width: 50px;
    height: 30px;
    border: 2px solid orange;
    border-radius: 5px;
    background-color: white;
    color: orange;
    font-size: 10px;
    font-weight: bold;
  }
  .btn-update:hover {
    width: 50px;
    height: 30px;
    border-radius: 5px;   
    background-color: orange;
    outline: 1px solid orange;
    color: white;
   }

  .btn-delete{
    width: 50px;
    height: 30px;
    border: 2px solid aquamarine;
    border-radius: 5px;
    background-color: white;
    color: aquamarine;
    font-size: 10px;
    font-weight: bold;
  }
  .btn-delete:hover {
    width: 50px;
    height: 30px;
    border-radius: 5px;   
    background-color: aquamarine;
    outline: 1px solid aquamarine;
    color: white;
   }

  </style>

<!-- ***************************** CSSここまで ******************************-->

  <div class="area">
    <div class="todolist_area">
      <div class="todolist">
          <h1 class="todolist_ttl">Todo List</h1>
            <form action="todo" method="post"> <!-- formタグで囲いtodoに対してpostリクエストを送信 -->
            @csrf
          <input class="todo_input" type="text" name="content"> <!-- 入力した内容を送信 -->
          <button class="btn-submit" type="submit"> 追加 </button>
            </form>
      </div>　<!-- todolist の閉じタグ -->
<!-- 以下、サンプルコード -->
      <table class="todotable">
        <tr>
          <th class="todotable_title">作成日</th>
          <th class="todotable_title">タスク名</th>
          <th class="todotable_title">更新</th>
          <th class="todotable_title">削除</th>
        </tr>
        @foreach($items as $item)  
<!-- <p>{{$item}}</p>  -->
        <tr>
 	        <th>{{$item->created_at}}</th>
        @csrf

<!-- ここから下、更新ボタンの作動 -->
          <form method="post" action="{{ route('update', ['id' => $item->id]) }}">
          <th><input class="task_input" type="string" name="content" value={{$item->content}} ></th>
        @csrf
          <th><button class="btn-update"> 更新 </button></th>
          </form>
<!-- ここから下、削除ボタンの作動 -->
          <form method="post" action="{{ route('delete', ['id' => $item->id]) }}">
        @csrf
          <th><button class="btn-delete"> 削除 </button></th>
          </form>
        </tr>
      @endforeach
      </table>
    </div> <!-- todolist_area の閉じタグ -->
  </div>     <!-- "area"の閉じタグ-->

</body>
</html>