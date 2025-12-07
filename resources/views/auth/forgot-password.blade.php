@extends('layouts.guest')

@section('title', 'Recuperar Senha')

@section('content')
<div class="w-full max-w-sm bg-white p-6 rounded-lg shadow">
    <h2 class="text-center text-xl font-semibold">Recuperar Senha</h2>
    <p class="text-center text-sm mb-6">Informe seu endereço de e-mail e enviaremos um link para você definir uma nova senha.</p>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
        @csrf
        <div>
            <label for="email" class="text-sm">Email:</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
            @error('email')
                <p class="text-sm text-red-600 mt-4">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Enviar Link de Recuperação</button>

        <p class="text-center text-sm mt-2">
            <a href="{{ route('login') }}" class="hover:underline">Voltar para a página de login</a>
        </p>
    </form>
</div>
@endsection
