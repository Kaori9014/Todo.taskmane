 <x-app-layout>
　　  <x-slot name="header">
       {{__('リスト一覧') }}
      </x-slot>
　　  
　　    <div class='flex font-mono'>
　　        <div class='todos basis-1/2'>　 
    　　        <table style="border="1" cellpadding="10" cellspacing="0"">
    　　      　<h1>Todoリスト一覧</h1>
        　　      <tr>
        　　          <td>タイトル</td>
        　　          <td>優先度</td>
        　　      </tr>    
                    @foreach ($todos as $todo)
            　　        　 　<form action="/lists/{{ $todo->id }}" id="form_{{ $todo->id }}" method="post">
            　　        　    <tr>
            　　        　     <td>  <a href="/lists/{{ $todo->id }}">{{ $todo->title}}</a> </td>
            　　              <td>  {{ $todo->priority->name}} </td>
            　　          　　<td> <a href="/listed/{{ $todo->id }}">達成！</a> </td>
            　　      　  　    @csrf
            　　      　  　    @method('DELETE')
            　　      　        <td><button type="button" onclick="deletePost({{ $todo->id }})">削除</button></td> 
            　　             </tr>
            　　      　  　</form>
    　　      　  　@endforeach
    　　      　</table>
　　        </div>
　　   
　　        <div class='tasks basis-1/2 '>
　　          <table style="border="1" cellpadding="10" cellspacing="0"">
　　                <h1>タスクリスト一覧</h1> 
        　　           <div class="fixed top-20 right-0 mt-4 mr-4">
        　　            <button class='bg-teal-100 hover:bg-teal-300 text-black font-bold py-2 px-4 rounded'> <a href='/create'>新規登録</a> </button>   
        　　           </div>
　　            <tr> 
　　                <td>タイトル</td>
　　                <td>締切日</td>
　　            </tr>
　　            @foreach($tasks as $task)
        　　            <tr>
        　　              <td>  <a href="/lists/{{ $task->id }}">{{ $task->title}}</a> </td>
        　　              <td>  {{ $task->deadline->format(config('const.format.datetime')) }} </td>
                        <td> <a href="/listed/{{ $task->id }}">達成！</a> </td>
            　　      　  　<form action="/lists/{{ $task->id }}" id="form_{{ $task->id }}" method="post">
            　　      　  　    @csrf
            　　      　  　    @method('DELETE')
            　　      　     <td>  <button type="button" onclick="deletePost({{ $task->id }})">削除</button> </td> 
            　　      　  　</form>
        　　      　     </tr>
                @endforeach
　　      　  </table>
　　        </div>
　　    </div>  
　　  
    　　          <script>
    　　              function deletePost(id){
    　　                 'use strict'
    　　                   
    　　                 if(confirm('削除すると復元できません。\n本当に削除しますか？')) {
    　　                    document.getElementById(`form_${id}`).submit();      
    　　                 }
    　　              }
    　　        </script>

 </x-app-layout>
