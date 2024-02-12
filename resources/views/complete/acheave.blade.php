
 <x-app-layout>
　　  <x-slot name="header">
       {{__('達成済みリスト') }}
      </x-slot>
　　
　　    <div class='posts flex font-mono'>　 
　　        <div class='todoposts basis-1/2'>　
　　         <h1>Todo達成リスト</h1>
　　         <table style="border="1" cellpadding="10" cellspacing="0"">
　　            <tr>
　　                <th>タイトル</th>
　　                <th>優先度</th>
　　                <th>達成日時</th>
　　            </tr>
　　            @foreach ($todoposts as $todopost)
        　　            <tr>
        　　              <td>  <a href="/listed/{{ $todopost->id }}">{{ $todopost->title}}</a> </td>
        　　              <td>  {{ $todopost->priority->name}} </td>
        　　          　  <td>  {{ $todopost->updated_at->format(config('const.format.datetime')) }} </td>
        　　      　  　  </tr>
　　      　  　@endforeach
　　      　  </table>
　　        </div>
　　    
　　        <div class='taskposts basis-1/2'>　
　　         <h1>task達成リスト</h1>
　　          <table style="border="1" cellpadding="10" cellspacing="0"">
　　            <tr>
　　                <th>タイトル</th>
　　                <th>達成日時</th>
　　            </tr>
　　            @foreach ($taskposts as $taskpost)
        　　            <tr>
        　　              <td>  <a href="/listed/{{ $taskpost->id }}">{{ $taskpost->title}}</a> </td>
        　　          　  <td>  {{ $taskpost->updated_at->format(config('const.format.datetime')) }} </td>
        　　      　  　  </tr>
　　      　  　@endforeach
　　      　  </table>
　　        </div>
　　    </div>
 </x-app-layout>
