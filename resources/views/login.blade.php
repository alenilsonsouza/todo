<x-layout title="Todo: login">
    <x-slot:btn>
        <x-btn title="Registre-se" href="{{route('register')}}"/>
    </x-slot:btn>

    <h2>Login</h2>
    <a href="{{route('home')}}">Voltar pra home</a>
</x-layout>