<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <x-app-layout>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
             <title>Todoリスト達成済み確認画面</title>
             <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    　　<head>
          <x-slot name="header">
           {{__('Todoリスト達成済み詳細') }}
          </x-slot>　    
　　<body>
　　  <form action="/listed/show" method="POST">
　　    @csrf
    　　  <div calss='oldtodos flex flex-col'>
    　　    <h1 class='title '>
    　　        {{ $post->title }}
    　　    </h1>
    　　       <h2>メモ</h2>
    　　       <p>{{ $post->memo }}</p>
    　　  
    　　       <h2>カテゴリー</h2>
    　　       <p>{{ $post->category->name }}</p>
    　　       
    　　     @if($post->priority)
    　　       <h2>優先度</h2>
    　　       <p>{{ $post->priority->name}}</p>
    　　     @endif
    　　    
    　　     @if($post->workload)   
    　　       <h2>予想時間</h2>
    　　       <p>{{ $post->workload}}</p>
    　　     @endif
    　　       
    　　     @if($post->deadline)
　　       <h2>締切日</h2>
　　       <p>{{ $post->deadline}}</p>
　　       <input type="hidden" name="post[deadline]" value={{ $post->deadline }}>
　　       @endif
　　       
    　　     @if($post->newworkload)
    　　        <h2>達成時間</h2>
    　　       <p>{{ $post->newworkload }}</p>
    　　     @endif
    　　     
    　　   
    　　    </div>
　　  </form>
　　  　
　　  　<div class="footer">
　　        <a href="/listed">戻る</a>
　　    </div>
　   </body>
　</x-app-layout>
</html>