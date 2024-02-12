<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <x-app-layout>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
             <title>Todoリスト詳細画面</title>
             <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    　　<head>
          <x-slot name="header">
           {{__('リスト詳細一覧') }}
          </x-slot>　    
　　<body>
　　  <div calss='todos padding: "10px 20px":'>
　　    <h1 class='title-2xl font-bold mb-4'>
　　        {{ $activity->title }}
　　    </h1>
　　       <h2 class="text-lg font-semibold mb-2">メモ</h2>
　　       <p class="text-gray-700 mx-10">{{ $activity->memo }}</p>
　　  
　　       <h2>カテゴリー</h2>
　　       <p>{{ $activity->category->name }}</p>
　　       
　　       <h2>優先度</h2>
　　       <p>{{ $activity->priority->name}}</p>
　　       
　　       <h2>予想時間</h2>
　　       <p>{{ $activity->workload}}</p>
　　       
　　       <h2>締切日</h2>
　　       <p>{{ $activity->deadline }}</p>
　　       
　　    </div>
　　    <div class="footer">
　　  　<div class="edit"><a href="/lists/{{ $activity->id }}/edit">編集</a></div>
　　        <a href="/">戻る</a>
　　    </div>
　   </body>
　</x-app-layout>
</html>