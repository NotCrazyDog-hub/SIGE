@extends('layouts.guest')

@section('title', 'Redefinir Senha')

@section('content')
<div class="w-full max-w-sm bg-white p-6 rounded-lg shadow">
    <h2 class="text-center text-xl font-semibold">Redefinir Senha</h2>
    <p class="text-center text-sm mb-6 text-gray-600">Defina uma nova senha para acessar sua conta.</p>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div>
            <label for="email" class="text-sm text-gray-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="text-sm text-gray-700">Nova senha</label>
            <input id="password" type="password" name="password" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="text-sm text-gray-700">Confirmar senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" class="mt-1 w-full border rounded-md p-2 focus:border-blue-500">
            @error('password_confirmation')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="w-full py-2 rounded-md text-white bg-blue-600 hover:bg-blue-700">Redefinir senha</button>

    </form>
</div>
@endsection
