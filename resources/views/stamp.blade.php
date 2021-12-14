<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>stamp</title>
</head>

<body>
  <x-app-layout>
    <x-slot name="header"></x-slot>
  </x-app-layout>
  <div>{{ Auth::user()->name }}さんお疲れ様です！！</div>
  <form action="/create-work-start" method="post" >
    @csrf
    <input class="button-work-start" type="submit" value="勤務開始">
  </form>
  <form action="/create-work-end" method="post" >
    @csrf
    <input class="button-work-end" type="submit" value="勤務終了">
  </form>


</html>