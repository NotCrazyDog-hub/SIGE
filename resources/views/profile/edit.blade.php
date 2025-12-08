@extends('layouts.app')

@section('page_title', 'Meu Perfil')

@section('content')

    <div class="space-y-6">

        <div class="bg-white border rounded-lg p-6 shadow-sm">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="bg-white border rounded-lg p-6 shadow-sm">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="bg-white border rounded-lg p-6 shadow-sm">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>

    </div>

@endsection
