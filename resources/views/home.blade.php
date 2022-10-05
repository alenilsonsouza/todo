<x-layout title="Todo: Página Incial">


    <x-slot:btn>
        <x-btn title="Criar Tarefa" href="{{route('task.create')}}"/>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2 class="graph_header-title">Progresso do dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="">
                <span>30 de Dez</span>
                <img src="/assets/images/icon-next.png" alt="">
            </div>
        </div>
        <div class="graph_header-subtitle">
            Tarefas: <strong>{{$n_rest}}/{{count($tasks)}}</strong>
        </div>
        <div class="graph_placeholder"></div>
        <div class="graph_footer">
            <img src="/assets/images/icon-info.png" alt="">
            <span>Restam {{$n_rest}} tarefas para serem realizadas</span>
        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <select name="" id=""class="list_header-select">
                <option value="1" disabled>Todas as tarefas</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="task_list">
            @foreach($tasks as $task)
            <x-task :data=$task/>
            @endforeach
        </div>
    </section>
</x-layout>