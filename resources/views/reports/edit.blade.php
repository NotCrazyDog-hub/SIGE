@extends('layouts.app')

@section('page_title', 'Edição de relatórios')

@section('content')

    @if( session('error') )
        <p class="mb-4 p-3 bg-red-100 text-red-700 border border-red-300 rounded">
            {{ session('error') }}
        </p>
    @endif

    <div class="bg-white border rounded-lg p-6 shadow-sm">
        <form action="{{ route('reports.update', ['report' => $report->id]) }}" method="post" class="space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label class="block mb-1 font-medium">Título do relatório:</label>
                <input type="text" name="title" placeholder="Insira o título do relatório aqui" value="{{ old('title', $report->title) }}" class="w-full border rounded px-3 py-2">
                @error('title')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror 
            </div>

            <div>
                <label class="block mb-1 font-medium">Sobre:</label>
                <select name="intern_id" class="w-full border rounded px-3 py-2 bg-white">
                    @foreach ($interns as $intern)
                        <option value="{{ $intern->id }}" {{ old('intern_id', $report->intern_id) == $intern->id ? 'selected' : '' }}>{{ $intern->name }}</option>
                    @endforeach
                </select>
                @error('intern_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>       
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Descrição das atividades:</label>
                <textarea name="work_description" placeholder="Insira a descrição das atividades aqui" class="w-full border rounded px-3 py-2 h-32">{{ old('work_description', $report->work_description) }}</textarea>
                @error('work_description')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>       
                @enderror 
            </div>

            <div>
                <label class="block mb-1 font-medium">Nota das atividades:</label>
                <input type="number" name="grade" placeholder="Insira a nota das atividades aqui" value="{{ old('grade', $report->grade) }}" class="w-full border rounded px-3 py-2">
                @error('grade')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>       
                @enderror  
            </div>

            <input type="submit" value="Atualizar" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded shadow cursor-pointer">
        </form>
    </div>
@endsection
