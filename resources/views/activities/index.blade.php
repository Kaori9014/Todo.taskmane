<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <x-app-layout>
        <head>
            <meta charset="utf-8">
             <title>今日のタスク</title>
             <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    　　<head>
　　  <x-slot name="header">
       {{__('今日のTodoリスト') }}
      </x-slot>
　　<body>
　　       <div class='todos'>　 <a href='/todoes/create'>新規登録</a>
　　            @foreach ($todos as $todo)
    　　          <div class'title'>
    　　              <h2> <a href="/todos/{{ $todo->id }}">{{ $todo->title}}</a> </h2>
    　　              <h2>{{ $todo->priority->name}}</h2>
    　　          </div>
　　      　  　<form action="/activities/{{ $todo->id }}" id="form_{{ $todo->id }}" method="post">
　　      　  　    @csrf
　　      　  　    @method('DELETE')
　　      　  　    <button type="button" onclick="deletePost({{ $todo->id }})">削除</button>
　　      　  　</form>
　　      　  　@endforeach
　　        </div>
　　          <script>
　　              function deletePost(id){
　　                 'use strict'
　　                   
　　                 if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
　　                    document.getElementById(`form_${id}`).submit();      
　　                 }
　　              }
　　          </script>
　　</body>
 </x-app-layout>
</html>