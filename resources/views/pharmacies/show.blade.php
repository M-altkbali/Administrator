<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('title', ' Pharmacy - Show ')

    @extends('layout')

    @section('Title') Show Pharmacy 
    : id ({{ $pharmacies['id'] }})  @endsection

    @section('page')

        <section class="show">
            <div class="info">
                <div>
                    <label>Pharmacy Name</label>
                    <span>{{ $pharmacies['pharmacy_name'] }}</span>
                </div>
                <div>
                    <label>Manager Name</label>
                    <span>{{ $pharmacies['manager_name'] }}</span>
                </div>
                <div>
                    <label>Email</label>
                    <span>{{ $pharmacies['email'] }}</span>
                </div>
                <div>
                    <label>Password</label>
                    <span>{{ $pharmacies['password'] }}</span>
                </div>

            </div>
            <div class="pic">
                <div class="img"><img src="{{ url("images/pharmacies/$pharmacies->logo") }}" alt="" srcset="">
                </div>
            </div>
            <div class="info_">
                <div>
                    <div>
                        <label>Phone Number</label>
                        <span>000-0000000</span>
                    </div>
                    <div>
                        <label>City</label>
                        <span>{{ $pharmacies['city'] }}</span>
                    </div>
                </div>
                <div>
                    <div>
                        <label>Location Lattude</label>
                        <span>{{ $pharmacies['location_lattude'] }}</span>
                    </div>
                    <div>
                        <label>Location Longtude </label>
                        <span>{{ $pharmacies['location_longtude'] }}</span>
                    </div>
                </div>
                <div>
                    <div>
                        <label>Domain</label>
                        <span>{{ $pharmacies['domain'] }}</span>
                    </div>
                    <div>
                        <label>Notes</label>
                        <span>{{ $pharmacies['notes'] }}</span>
                    </div>
                </div>


            </div>

        </section>

    @endsection

</x-app-layout>
