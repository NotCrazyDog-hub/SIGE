@extends('layouts.app')

@section('page_title', 'Departamentos')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-semibold">Lista de departamentos</h1>
        <a href="{{ route('departments.create') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded shadow">+ Adicionar</a>
    </div>

    @if (session('success'))
        <p class="my-4 p-3 bg-green-100 text-green-700 border border-green-300 rounded">
            {{ session('success') }}
        </p>
    @endif

    <div class="space-y-3">
        @foreach ($departments as $department)
            <div class="p-4 border rounded flex justify-between items-center hover:bg-gray-50">
                <span class="font-medium">#{{ $department->id }}: {{ $department->name }}</span>

                <div class="flex items-center gap-3">
                    <a href="{{ route('departments.edit', ['department' => $department->id]) }}" class="text-lg">✏</a>

                    <form action="{{ route('departments.destroy', ['department' => $department->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="🗑" class="text-lg cursor-pointer bg-transparent" onclick="return confirm('Tem certeza que quer deletar este departamento?')">
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
