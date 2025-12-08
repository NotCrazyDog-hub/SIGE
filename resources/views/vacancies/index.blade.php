@extends('layouts.app')

@section('page_title', 'Vagas')

@section('content')

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-xl font-semibold">Lista de vagas</h1>
        <a href="{{ route('vacancies.create') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded shadow">+ Adicionar</a>
    </div>

    @if( session('success') )
        <p class="my-4 p-3 bg-green-100 text-green-700 border border-green-300 rounded">
            {{ session('success') }}
        </p>
    @endif

    <table class="w-full border">
        <thead>
            <tr class="bg-gray-50 border">
                <th class="p-3 text-center text-sm font-semibold border-r">Título</th>
                <th class="p-3 text-center text-sm font-semibold border-r">Departamento</th>
                <th class="p-3 text-center text-sm font-semibold border-r">Carga horária</th>
                <th class="p-3 text-center text-sm font-semibold w-32">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($vacancies as $vacancy)
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-3 text-center border-r">{{ $vacancy->title }}</td>
                    <td class="p-3 text-center border-r">{{ $vacancy->department?->name ?? '-' }}</td>
                    <td class="p-3 text-center border-r">{{ $vacancy->workload }}</td>
                    <td class="p-3">
                        <div class="flex items-center gap-3">
                            <a href="{{ route('vacancies.edit', ['vacancy' => $vacancy->id]) }}" class="text-center text-lg">✏</a>

                            <form action="{{ route('vacancies.destroy', ['vacancy' => $vacancy->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="🗑" class="text-center text-lg cursor-pointer bg-transparent" onclick="return confirm('Tem certeza que quer deletar esta vaga?')">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
