@extends('layouts.guest')

@section('title', 'Acesse sua conta')

@section('content')
<div class="w-full max-w-sm bg-white p-6 rounded-lg shadow">
    <h2 class="text-center text-xl font-semibold">Acesse sua conta</h2>
    <p class="text-center text-sm mb-6">Sistema Integrado de Gestão de Estágios</p>
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <div>
            <label for="email" class="text-sm">Email:</label>
            <input id="email" type="email" name="email" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
        </div>
        <div>
            <label for="password" class="text-sm">Senha:</label>
            <input id="password" type="password" name="password" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
        </div>
        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2">
                <input type="checkbox" name="remember" class="border rounded">
                Manter conectado
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">Esqueceu sua senha?</a>
            @endif
        </div>
        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Entrar</button>
        <p class="text-center text-sm mt-2">
            <a href="{{ route('register') }}" class="hover:underline">Não tem uma conta? Registra-se!</a>
        </p>
    </form>
</div>
@endsection