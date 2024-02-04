<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Todoリスト編集画面</title>
         <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
　　<head>
　　<body>
        <h1>todoリスト編集画面</h1>
        <div class="content">
           <form action="/todoes/{{ $list->id }}" method="POST">
             @csrf
             @method('PUT')
             
            <div class="content_category">
                @foreach($categories as $category)
                <label>
                <input type='radio' name="list[category_id]" value={{ $category->id }} >
                    {{ $category->name }}
                </label>
                @endforeach
            </div>
            <div class="content_priority">
                @foreach($priorities as $priority)
                <label>
                <input type='radio' name="list[priority_id]" value={{ $priority->id }} >
                    {{ $priority->name }}
                </label>
                @endforeach
            </div>
            <div class="content_title">
                <h2>タイトル</h2>
                <input type="text" name="list[title]" value="{{ $list->title }}"/>
            </div>
            <div class="content_memo">
                <h2>メモ</h2>
                <textarea name="list[memo]" value="{{ $list->memo  }} "></textarea>
            </div>
            <div class="content_workload">
                <h2>予想時間</h2>
                <input type="text" name="list[workload]" value="{{ $list->workload}}"/>
            </div>
　　      <input type="submit" value="保存"/>
　　    </form>
　　    <div class="footer">
　　        <a href="/">戻る</a>
　　    </div>
　　</body>
</html>