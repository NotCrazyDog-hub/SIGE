@extends('layouts.app')

@section('page_title', 'Editar Departamento')

@section('content')

    @if( session('error') )
        <p class="my-3 p-3 bg-red-100 text-red-700 border border-red-300 rounded">
            {{ session('error') }}
        </p>
    @endif

    <form action="{{ route('departments.update', ['department' => $department->id]) }}" method="post" class="space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium mb-1">Nome do departamento:</label>
            <input type="text" id="name" name="name" placeholder="Insira o nome do departamento aqui" value="{{ old('name', $department->name) }}" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            @error('name')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="block text-sm font-medium mb-1">Descrição:</label>
            <textarea id="description" name="description" placeholder="Insira a descrição do departamento aqui"  class="w-full border rounded px-3 py-2 h-28 resize-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('description', $department->description) }}</textarea>
            @error('description')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <input type="submit" value="Atualizar" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded shadow cursor-pointer">
    </form>
@endsection
