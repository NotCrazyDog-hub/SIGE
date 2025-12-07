@extends('layouts.guest')

@section('title', 'Verificar Email')

@section('content')
<div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-center text-xl font-semibold">Verifique seu email</h2>
    <p class="text-sm text-gray-600 mb-6">Obrigado por se registrar! Antes de começar a usar o sistema, confirme seu endereço de e-mail clicando no link que enviamos. Caso não tenha recebido, você pode solicitar um novo abaixo.</p>

    @if (session('status') == 'verification-link-sent')
        <p class="mb-4 text-sm text-green-600">Um novo link de verificação foi enviado para o seu e-mail.</p>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="py-2 px-3 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700">Reenviar e-mail de verificação</button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-sm text-gray-600 hover:text-gray-900 underline">Sair</button>
        </form>
    </div>

</div>
@endsection
