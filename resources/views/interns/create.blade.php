@extends('layouts.app')

@section('page_title', 'Cadastro de estagiários')

@section('content')

    @if( session('error') )
        <p class="mb-4 p-3 bg-red-100 text-red-700 border border-red-300 rounded">
            {{ session('error') }}
        </p>
    @endif

    <div class="bg-white border rounded-lg p-6 shadow-sm">
        <form action="{{ route('interns.store') }}" method="post" class="space-y-5">
            @csrf
            <div>
                <label class="block mb-1 font-medium">Nome:</label>
                <input type="text" name="name" placeholder="Insira o nome do estagiário aqui" value="{{ old('name') }}" class="w-full border rounded px-3 py-2">
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Email:</label>
                <input type="email" name="email" placeholder="Insira o email do estagiário aqui" value="{{ old('email') }}" class="w-full border rounded px-3 py-2">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Curso:</label>
                <input type="text" name="course" placeholder="Insira o curso do estagiário aqui" value="{{ old('course') }}" class="w-full border rounded px-3 py-2"
                >
                @error('course')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Telefone (opcional):</label>
                <input type="text" id="phone" name="phone" placeholder="Insira o telefone do estagiário aqui" value="{{ old('phone') }}" class="w-full border rounded px-3 py-2">
                @error('phone')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <input type="hidden" name="status" value="0">
                <label class="inline-flex items-center gap-2">
                    <input type="checkbox" name="status" value="1" {{ old('status') == 1 ? 'checked' : '' }} class="h-4 w-4">
                    <span class="font-medium">Marque se o estagiário estiver ativo</span>
                </label>
            </div>

            <input type="submit" value="Cadastrar" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded shadow cursor-pointer">
        </form>
    </div>
@endsection
