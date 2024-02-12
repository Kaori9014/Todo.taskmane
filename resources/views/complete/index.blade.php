
<x-app-layout>
        
　　  <x-slot name="header">
       {{__('達成済みリスト') }}
      </x-slot>
　　    <div class='flex font-mono'>
　　       <div class='todos basis-1/2'>　
　　         <h1>Todoリスト</h1>
　　         <table style="border="1" cellpadding="10" cellspacing="0"">
　　            <tr>
　　                <th>タイトル</th>
　　                <th>優先度</th>
　　                <th>達成日時</th>
　　            </tr>
　　            @foreach ($oldtodos as $oldtodo)
        　　            <tr>
        　　              <td>  <a href="/listed/show/{{ $oldtodo->id }}">{{ $oldtodo->title}}</a> </td>
        　　              <td>  {{ $oldtodo->priority->name}} </td>
        　　          　  <td>  {{ $oldtodo->updated_at->format(config('const.format.datetime')) }} </td>
        　　      　  　  </tr>
　　      　  　@endforeach
　　      　  </table>
　　        </div>
　　    
　　        <div class='tasks basis-1/2'>　
　　         <h1>taskリスト</h1>
　　          <table style="border="1" cellpadding="10" cellspacing="0"">
　　            <tr>
　　                <th>タイトル</th>
　　                <th>達成日時</th>
　　            </tr>
　　            @foreach ($oldtasks as $oldtask)
        　　            <tr>
        　　              <td>  <a href="/listed/show/{{ $oldtask->id }}">{{ $oldtask->title}}</a> </td>
        　　          　  <td>  {{ $oldtask->updated_at->format(config('const.format.datetime')) }} </td>
        　　      　  　  </tr>
　　      　  　@endforeach
　　      　  </table>
　　        </div>
　　    </div>
 </x-app-layout>
