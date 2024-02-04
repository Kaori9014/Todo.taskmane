<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Todoリスト作成画面</title>
         <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
　　<head>
　　<body>
        <h1>todoリスト新規作成</h1>
        <form action="/todoes" method="POST">
            @csrf
            <div class="category">
                @foreach($categories as $category)
                <label>
                <input type='radio' name="list[category_id]" value={{ $category->id }} >
                    {{ $category->name }}
                </label>
                @endforeach
            </div>
            
            <div class="priority">
                @foreach($priorities as $priority)
                <label>
                <input type='radio' name="list[priority_id]" value={{ $priority->id }} >
                    {{ $priority->name }}
                </label>
                @endforeach
            </div>
            
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="list[title]" placeholder="タイトル"/>
            </div>
            <div class="memo">
                <h2>メモ</h2>
                <textarea name="list[memo]" placeholder="メールを送る"></textarea>
            </div>
            
            <div class="workload">
                <h2>予想時間</h2>
                <input type="text" name="list[workload]" placeholder="1時間"/>
            </div>
　　      <input type="submit" value="保存"/>
　　    </form>
　　    <div class="footer">
　　        <a href="/">戻る</a>
　　    </div>
　　</body>
</html>