@extends('layouts.app')

@section('page_title', 'Cadastro de supervisores')

@section('content')

    @if( session('error') )
        <p class="mb-4 p-3 bg-red-100 text-red-700 border border-red-300 rounded">
            {{ session('error') }}
        </p>
    @endif

    <div class="bg-white border rounded-lg p-6 shadow-sm">
        <form action="{{ route('supervisors.store') }}" method="post" class="space-y-5">
            @csrf
            <div>
                <label class="block mb-1 font-medium">Nome do supervisor:</label>
                <input type="text" name="name" placeholder="Insira o nome do supervisor aqui" value="{{ old('name') }}" class="w-full border rounded px-3 py-2">
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Departamento:</label>
                <select name="department_id" class="w-full border rounded px-3 py-2 bg-white">
                    <option disabled selected>Selecione um departamento</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                    @endforeach
                </select>
                @error('department_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Email do supervisor:</label>
                <input type="email" name="email" placeholder="Insira o email do supervisor aqui" value="{{ old('email') }}" class="w-full border rounded px-3 py-2">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Telefone do supervisor:</label>
                <input type="text" name="phone" placeholder="Insira o telefone do supervisor aqui" value="{{ old('phone') }}" class="w-full border rounded px-3 py-2">
                @error('phone')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <input type="submit" value="Cadastrar" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded shadow cursor-pointer">
        </form>
    </div>
@endsection
