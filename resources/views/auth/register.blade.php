@extends('layouts.guest')

@section('title', 'Registre sua conta')

@section('content')
<div class="w-full max-w-sm bg-white p-6 rounded-lg shadow">
    <h2 class="text-center text-xl font-semibold">Registre sua conta</h2>
    <p class="text-center text-sm mb-6">Sistema Integrado de Gestão de Estágios</p>
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="text-sm">Nome:</label>
            <input id="name" type="text" name="name" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
            @error('name')
                <p class="text-sm text-red-600 mt-4">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email" class="text-sm">Email:</label>
            <input id="email" type="email" name="email" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
            @error('email')
                <p class="text-sm text-red-600 mt-4">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password" class="text-sm">Senha:</label>
            <input id="password" type="password" name="password" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
            @error('password')
                <p class="text-sm text-red-600 mt-4">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password_confirmation" class="text-sm">Confirmar senha:</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
            @error('password')
                <p class="text-sm text-red-600 mt-4">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Registrar</button>
        <p class="text-center text-sm mt-2">
            <a href="{{ route('login') }}" class="hover:underline">Já tem uma conta? Acesse!</a>
        </p>
    </form>
</div>
@endsection