@extends('layouts.guest')

@section('title', 'Confirmar Senha')

@section('content')
<div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-center text-xl font-semibold mb-4">Confirmar senha</h2>
    <p class="text-sm text-gray-600 mb-6">Esta é uma área segura do sistema. Antes de continuar, confirme sua senha.</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
        <div class="mb-4">
            <label for="password" class="text-sm font-medium text-gray-700">Senha</label>
            <input id="password" type="password" name="password" autocomplete="current-password" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500 focus:ring-blue-500">
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Confirmar</button>
    </form>
</div>
@endsection
