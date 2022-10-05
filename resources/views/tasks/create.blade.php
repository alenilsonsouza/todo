<x-layout>
    <x-slot:btn>
        <x-btn title="Voltar pra home" href="{{route('home')}}" />
    </x-slot:btn>
    <section class="container_inner">
        <h1>Criar Tarefa</h1>
        <form action="{{route('task.create_action')}}" method="POST">
            @csrf
            <x-form.input name="title" label="Título da Tarefa" placeholder="Digite o título da Tarefa" type="text" />

            <x-form.input name="due_date" label="Data da Tarefa" placeholder="Digite a data da Tarefa" type="datetime-local" />

            <x-form.select name="category_id" label="Categoria da Tarefa" required="required">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </x-form.select>

            <x-form.textarea name="description" label="Descrição da Tarefa" placeholder="Digite a descrição da tarefa" />

            <x-form.btArea txtReset="Resetar" txtSubmit="Criar Tarefa" />
        </form>
    </section>
</x-layout>

