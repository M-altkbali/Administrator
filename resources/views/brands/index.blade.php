<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('title', 'Users')

    @extends('layout')

    @section('Title') Brands @endsection

    @section('page')


    @endsection

</x-app-layout>
