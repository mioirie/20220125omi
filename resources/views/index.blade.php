<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>
<body>
  <div class="todolist">
    <h1 class="todolist_ttl">Todo List</h1>
    <form action="todo" method="post"> <!-- formタグで囲いtodoに対してpostリクエストを送信 -->
      @csrf
      <input type="content"> <!-- 入力した内容を送信 -->
      <button class="btn btn-submit" type="submit"> 追加 </button>  
    </form>    
  </div>

 
<!-- 以下、サンプルコード -->
    <table class="todotable">
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    @foreach
    <tr>
       <form action="/" method="POST">
        @csrf
        <td><input type="string"></td>
        <th><button class="btn btn-renew"> 更新 </button></th>
       </form>
       <form action="">
          @csrf
         <th><button class="btn btn-delete"> 削除 </button></th>
       </form>
    </tr>
    @endforeach
 </table>

<!-- 以前の記述
    <tr>
      <th>{{$items}}</th>  作成日を反映 -->
      <!-- <form action="/" method="POST">
        @csrf
        <input type="timestamp" > -->

        <!-- <th>{{$items}}</th>　 記述内容を反映 -->
<!--
       <form action="/" method="POST">
        @csrf
        <td><input type="string"></td>

        <th><button class="btn btn-renew"> 更新 </button></th>
      <th><button class="btn btn-delete"> 削除 </button></th>

    </tr>

 </table>
-->

</body>
</html>