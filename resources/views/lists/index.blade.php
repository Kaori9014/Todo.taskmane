<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         <title>今日のタスク</title>
         <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
　　<head>
　　<body>
　　    <h1>todolist</h1>
　　    <div class='lists'>
　　            @foreach ($lists as $list)
    　　          <div class'title'>
    　　              <h2> <a href="/lists/{{ $list->id }}">{{ $list->title}}</a> </h2>
    　　              <h2>{{ $list->priority->name}}</h2>
    　　          </div>
　　      　  　<form action="/lists/{{ $list->id }}" id="form_{{ $list->id }}" method="post">
　　      　  　    @csrf
　　      　  　    @method('DELETE')
　　      　  　    <button type="button" onclick="deletePost({{ $list->id }})">削除</button>
　　      　  　</form>
　　      　  　@endforeach
　　    </div>
　　            <a href='/todoes/create'>create</a>
　　          <script>
　　              function deletePost(id){
　　                 'use strict'
　　                   
　　                 if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
　　                    document.getElementById(`form_${id}`).submit();      
　　                 }
　　              }
　　          </script>
　　</body>
</html>