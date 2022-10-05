<div class="inputArea">
    <label for="{{$name}}">{{$label??''}}</label>
    <select name="{{$name}}" id="{{$name}}" {{$required??''}}>
        <option selected value="" disabled>Escolha uma opção</option>
        {{$slot}}
    </select>
</div>