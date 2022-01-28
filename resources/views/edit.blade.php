@extends('layouts.default')
<style>

</style>
@section('title', 'edit.blade.php')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/edit" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        id
      </th>
      <td>
        <input type="text" name="id" value="{{$form->id}}">
      </td>
    </tr>
    <tr>
      <th>
        name
      </th>
      <td>
        <input type="text" name="name" value="{{$form->name}}">
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        <input type="text" name="age" value="{{$form->age}}">
      </td>
    </tr>
    <tr>
      <th>
        nationality
      </th>
      <td>
        <input type="text" name="nationality" value="{{$form->nationality}}">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>
@endsection