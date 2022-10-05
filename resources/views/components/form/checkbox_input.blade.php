<div class="inputArea">
    <label for="{{$name}}">{{$label??''}}</label>
    <input type="checkbox" name="{{$name}}" id="{{$name}}" 
    {{$required??''}} value="1" {{$value ? 'checked' :''}}
    />
</div>