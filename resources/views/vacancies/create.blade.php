@extends('layouts.app')

@section('page_title', 'Cadastro de vagas')

@section('content')

    @if( session('error') )
        <p class="mb-4 p-3 bg-red-100 text-red-700 border border-red-300 rounded">
            {{ session('error') }}
        </p>
    @endif

    <div class="bg-white border rounded-lg p-6 shadow-sm">
        <form action="{{ route('vacancies.store') }}" method="post" class="space-y-5">
            @csrf
            <div>
                <label class="block mb-1 font-medium">Título da vaga:</label>
                <input type="text" name="title" placeholder="Insira o título da vaga" value="{{ old('title') }}" class="w-full border rounded px-3 py-2">
                @error('title')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Departamento:</label>
                <select name="department_id" class="w-full border rounded px-3 py-2 bg-white">
                    <option disabled selected>Selecione um departamento</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}"
                            {{ old('department_id') == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                    @endforeach
                </select>
                @error('department_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Descrição da vaga:</label>
                <textarea name="description" placeholder="Insira a descrição da vaga aqui"
                          class="w-full border rounded px-3 py-2 h-28">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Carga horária semanal:</label>
                <input type="number" name="workload" placeholder="Insira a carga horária semanal aqui" value="{{ old('workload') }}" class="w-full border rounded px-3 py-2">
                @error('workload')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" value="Cadastrar" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded shadow cursor-pointer">
        </form>
    </div>
@endsection
