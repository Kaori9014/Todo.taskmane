 <x-app-layout>
        <x-slot name="header">
           {{__('リスト編集画面') }}
        </x-slot>　    
        <div class="content">
           <form action="/lists/{{ $activity->id }}" method="POST">
             @csrf
             @method('PUT')
            <div class="content_category">
                <input type='radio' name="activity[category_id]" id='category.1' value= 1 <?php if($activity->category_id == '1'){print "checked";}?> />
                <label>todo</label>
                <input type='radio' name="activity[category_id]" id='category.2' value= 2 <?php if($activity->category_id == '2'){print "checked";}?>/>
                 <label>task</label>
                 
            </div>
            
            <div class="content_priority">
                @foreach($priorities as $priority)
                <label>
                <input type='radio' name="activity[priority_id]" value="{{ $priority->id }}" <?php if($activity->priority_id == $priority->id){print "checked";}?>/>
                    {{ $priority->name }}
                </label>
                @endforeach
            </div>
            <div class="content_title">
                <h2>タイトル</h2>
                <input type="text" name="activity[title]" value="{{ $activity->title }}"/>
            </div>
            <div class="content_memo">
                <h2>メモ</h2>
                <input type="text" name="activity[memo]" value="{{ $activity->memo  }}"/>
            </div>
            @if($activity->workload)
               <div class="content_workload">
                <h2>予想時間</h2>
                <input type="text" name="activity[workload]" value="{{ $activity->workload}}"/>
               </div>
            @endif
            @if($activity->deadline)
               <div class="content_deadline">
                <h2>締切日</h2>
                <input type="text" name="activity[deadline]" value="{{ $activity->deadline }}"/>
               </div>
            @endif
            
　　      <input type="submit" value="保存"/>
　　    </form>
　　    <div class="footer">
　　        <a href="/">戻る</a>
　　    </div>
　　</body>
</x-app-layout>
</html>