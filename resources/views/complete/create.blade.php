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
           {{__('Todoリスト達成済み確認') }}
          </x-slot>　    
　　<body>
　　  
　　  <form action="/listed" method="POST">
　　    @csrf
　　    
    　　  <div calss=oldtodos>
    　　     <input type="hidden" name="post[activity_id]" value={{ $activity->id }}>
    　　   
    　　     <h1 class='title'>{{ $activity->title }}</h1>
    　　　　   <input type="hidden" name="post[title]" value={{ $activity->title }}>    
    　　　　   
　　       <h2>メモ</h2>
　　       <p>{{ $activity->memo }}</p>
　　       <input type="hidden" name="post[memo]" value={{ $activity->memo }}>
　　  
　　       <h2>カテゴリー</h2>
　　       <p>{{ $activity->category->name }}</p>
　　       <input type="hidden" name="post[category_id]" value={{ $activity->category_id }}>　  
　　       
　　       @if($activity->priority_id)
　　       <h2>優先度</h2>
　　       <p>{{ $activity->priority->name}}</p>
　　       <input type="hidden" name="post[priority_id]" value={{ $activity->priority_id }}>
　　       @endif
　　       
　　       @if($activity->deadline)
　　       <h2>締切日</h2>
　　       <p>{{ $activity->deadline}}</p>
　　       <input type="hidden" name="post[deadline]" value={{ $activity->deadline }}>
　　       @endif
　　       
　　       @if($activity->workload)
　　       <h2>予想時間</h2>
　　       <p>{{ $activity->workload}}</p>
　　       <input type="hidden" name="post[workload]" value={{ $activity->workload }}>
　　       @endif
　　       
    　　     <div class="newworkload">
        　　     <h2>実際の達成時間</h2>
        　　     <input type="text" name="post[newworkload]" placeholder="2時間"/>
    　　     </div>
    　　   <input type="submit" value="完了"/>
　　  </form>
　　  　
　　  　<div class="footer">
　　        <a href="/listed">戻る</a>
　　    </div>
　   </body>
　</x-app-layout>
</html>