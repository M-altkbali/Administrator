<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('title', ' Pharmacy - Show ')

    @extends('layout')

    @section('Title') Show Brand
    : id ({{ $brand['id'] }}) @endsection

    @section('page')

        <section class="show">
            <div class="info">
                <div>
                    <label>Brand Name</label>
                    <span>{{ $brand['brand_name'] }}</span>
                </div>
                <div>
                    <label>Notes</label>
                    <span>{{ $brand['notes'] }}</span>
                </div>
            </div>
            <div class="pic">
                <div class="img"><img src="{{ url("images/brands/$brand->logo") }}" alt="" srcset="">
                </div>
            </div>  
        </section>

    @endsection

</x-app-layout>
