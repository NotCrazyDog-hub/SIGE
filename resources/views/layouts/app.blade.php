<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'SIGE')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="min-h-screen flex">
        <aside class="w-56 bg-white border-r fixed inset-y-0 left-0 flex flex-col shadow-md">
            <div class="p-5 border-b">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('sige_logo.png') }}" class="w-10 h-10">
                    <div>
                        <h1 class="font-bold text-lg">SIGE</h1>
                        <p class="text-xs text-gray-500">Gestão de Estágios</p>
                    </div>
                </div>
            </div>

            <nav class="p-4 flex flex-col gap-1 text-sm">
                <a href="{{ route('dashboard') }}" class="px-3 py-2 rounded {{ request()->routeIs('dashboard') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}" >Painel de Controle</a>
                <a href="{{ route('interns.index') }}" class="px-3 py-2 rounded {{ request()->routeIs('interns.*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">Estagiários</a>
                <a href="{{ route('vacancies.index') }}" class="px-3 py-2 rounded {{ request()->routeIs('vacancies.*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}" >Vagas</a>
                <a href="{{ route('departments.index') }}" class="px-3 py-2 rounded {{ request()->routeIs('departments.*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">Departamentos</a>
                <a href="{{ route('supervisors.index') }}" class="px-3 py-2 rounded {{ request()->routeIs('supervisors.*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">Supervisores</a>
                <a href="{{ route('reports.index') }}" class="px-3 py-2 rounded {{ request()->routeIs('reports.*') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">Relatórios</a>

                <div class="border-t my-3"></div>

                <a href="{{ route('profile.edit') }}" class="px-3 py-2 rounded {{ request()->routeIs('profile.edit') ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-gray-100' }}">Ver meu perfil</a>
                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf
                    <input type="submit" class="w-full text-left px-3 py-2 rounded hover:bg-red-50 text-red-600" value="Sair da Conta">
                </form>
            </nav>
        </aside>

        <div class="flex-1 ml-56">
            <header class="h-14 bg-white border-b flex items-center justify-between px-6 shadow-md">
                <h2 class="text-lg font-semibold">@yield('page_title', 'Bem-vindo, ' . Auth::user()->name . '!')</h2>
            </header>
            <main class="p-6">
                <div class="bg-white border rounded-lg p-6 shadow-md">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
