<div class="inputArea">
    <label for="{{$name}}">{{$label??''}}</label>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder ?? ''}}" 
    {{$required??''}} value="{{$value??''}}"
    />
</div>