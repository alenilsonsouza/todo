<x-layout>
    <x-slot:btn>
        <x-btn title="Voltar pra home" href="{{route('home')}}"/>
    </x-slot:btn>
    <section class="container_inner">
        <h1>Editar Tarefa</h1>
        <form action="{{route('task.edit_action')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}">

            <x-form.checkbox_input value="{{$task->is_done}}" name="is_done" label="Tarefa realizada?"/>

            <x-form.input name="title" label="Título da Tarefa" placeholder="Digite o título da Tarefa" type="text" value="{{$task->title}}"/>

            <x-form.input name="due_date" label="Data da Tarefa" placeholder="Digite a data da Tarefa" type="datetime-local" value="{{$task->due_date}}" />

            <x-form.select name="category_id" label="Categoria da Tarefa" required="required">
                @foreach($categories as $category)
                <option value="{{$category->id}}"
                    @if($category->id == $task->category_id)
                    selected
                    @endif
                    
                >{{$category->title}}</option>
                @endforeach
            </x-form.select>

            <x-form.textarea name="description" label="Descrição da Tarefa" placeholder="Digite a descrição da tarefa" value="{{$task->description}}"/>

            <x-form.btArea txtReset="Resetar" txtSubmit="Atualizar Tarefa" />
        </form>
</x-layout>

