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
    　　            <h2 class'title'>
    　　                <a href="/lists/{{ $list->id }}">{{ $list->title}}</a> </h2>
    　　                <h2>{{ $list->priority->name}}</h2> 
　　      　  　@endforeach
　　    </div>
　　</body>
</html>