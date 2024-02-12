<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <x-app-layout>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
             <title>Todoリスト作成画面</title>
             <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    　　<head>
      <x-slot name="header">
       {{__('todoリスト新規作成') }}
      </x-slot>
    　　
　　<body>
        <h1>todoリスト新規作成</h1>
        <form action="/lists" method="POST">
            @csrf
            <div class="category">
                
                <label>
                <input type='radio' name="activity[category_id]" id='category.1' value= 1 checked  >
                    todo
                </label>
                <label>
                <input type='radio' name="activity[category_id]" id='category.2' value= 2 />
                    task
                </label>
               
            </div>
            
            <div class="priority">
                @foreach($priorities as $priority)
                <label>
                <input type='radio' name="activity[priority_id]" value={{ $priority->id }} >
                    {{ $priority->name }}
                </label>
                @endforeach
            </div>
            
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="activity[title]" placeholder="タイトル"/>
            </div>
            
            <div class="memo">
                <h2>メモ</h2>
                <textarea name="activity[memo]" placeholder="メールを送る"></textarea>
            </div>
            
            <div class="workload" id="workload" tyle="display: none;">
                <h2>予想時間</h2>
                <input type="text" name="activity[workload]" placeholder="1時間"/>
            </div>
            
            <div class="deadline" id="deadline" tyle="display: none;">
                <h2>締切日</h2>
                <input type="text" name="activity[deadline]" placeholder="2024-02-12 11:00"/>
            </div>
            
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var todo = document.getElementById('category.1');
                var task = document.getElementById('category.2');
                var workload = document.getElementById('workload');
                var deadline = document.getElementById('deadline');
                
                if (todo.checked)
                {
                     deadline.style.display = 'none';
                     workload.style.display = 'block';
                }
                
                todo.addEventListener('change', function() {
                    if (this.checked) {
                        deadline.style.display = 'none';
                        workload.style.display = 'block';
                    } 
                });
        
                task.addEventListener('change', function() {
                    if (this.checked) {
                        workload.style.display = 'none';
                        deadline.style.display = 'block';
                    }
                });
            });
        </script>
        
　　      <input type="submit" value="保存"/>
　　    </form>
　　    <div class="footer">
　　        <a href="/">戻る</a>
　　    </div>
　　</body>
　</x-app-layout>
</html>