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
           {{__('Todoリスト詳細一覧') }}
          </x-slot>　    
　　<body>
　　  <div calss=todos>
　　    <h1 class='title'>
　　        {{ $activity->title }}
　　    </h1>
　　       <h2>メモ</h2>To
　　       <p>{{ $activity->memo }}</p>
　　  
　　       <h2>カテゴリー</h2>
　　       <p>{{ $activity->category->name }}</p>
　　       
　　       <h2>優先度</h2>
　　       <p>{{ $activity->priority->name}}</p>
　　       
　　       <h2>予想時間</h2>
　　       <p>{{ $activity->workload}}</p>
　　       
　　    </div>
　　    <div class="footer">
　　  　<div class="edit"><a href="/todoes/{{ $activity->id }}/edit">編集</a></div>
　　        <a href="/">戻る</a>
　　    </div>
　   </body>
　</x-app-layout>
</html>