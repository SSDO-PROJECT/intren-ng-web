<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Company List') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Company</a></div>
        </div>
    </x-slot>


    {{--<div>
        <livewire:table.main name="user" :model="$company" />
    </div>--}}




</x-app-layout>
