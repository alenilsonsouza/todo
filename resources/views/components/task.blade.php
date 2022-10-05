<div class="task">
    <div class="title">
        <input type="checkbox"
            @if($data['is_done'])
                checked
            @endif
        >
        <h5>{{$data['title'] ?? ''}}</h5>
    </div>
    <div class="priority">
        <div class="sphere" style="background-color:{{$data['category']->color}}"></div>
        <div class="text">{{$data['category']->title ?? null}}</div>
    </div>
    <div class="actions">
        <a href="{{route('task.edit', ['id' => $data['id']])}}">
            <img src="/assets/images/icon-edit.png" alt="">
        </a>
        <a href="{{route('task.delete', ['id' => $data['id']])}}">
            <img src="/assets/images/icon-delete.png" alt="">
        </a>
    </div>
</div>