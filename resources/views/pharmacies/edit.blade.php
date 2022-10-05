<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    @section('title', 'Pharmacies - Add')

    @extends('layout')

    @section('Title') Update Pharmacy @endsection

    @section('page')

        <form action="{{ route('pharmacies.update', ['pharmacy' => $pharmacy->id]) }}" method="post" class="form-create"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="phar_name">Pharmacy Name</label>
                <input id="phar_name" name="pharma_name" value="{{ $pharmacy->pharmacy_name }}" type="text"
                    placeholder="Enter Pharmacy Name">
                @error('pharma_name')
                    <span class="error">please Enter Name of Pharmacy</span>
                @enderror
            </div>
            <div>
                <label for="mang_name">Manager Name</label>
                <input id="mang_name" name="Manager_name" value="{{ $pharmacy->manager_name }}" type="text"
                    placeholder="Enter Manager Name">
                @error('Manager_name')
                    <span class="error">please Enter Manager Name</span>
                @enderror
            </div>
            <div>
                <label for="phone">Phone</label>
                <input id="phone" name="phone" value="{{ $pharmacy->phone }}">
                @error('phone')
                    <span class="error">please Enter Phone Number</span>
                @enderror
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input id="email" name="pharma_email" value="{{ $pharmacy->email }}" type="email"
                    placeholder="Enter The Email">
                @error('pharma_email')
                    <span class="error">please Enter The Email</span>
                @enderror
            </div>
            <div class="">
                <label for="pass">Password</label>
                <input id="pass" name="password" value="{{ $pharmacy->password }}" type="password"
                    placeholder="Enter The password">
                @error('pharma_email')
                    <span class="error">please Enter The password</span>
                @enderror
            </div>
            <div>
                <label for="city">City</label>
                <select id="city" name="city" value="{{ $pharmacy->city }}">
                    @if ($pharmacy->city == 'Tripoli')
                        <option value="Tripoli" selected>Tripoli</option>
                        <option value="Musrata">Musrata</option>
                        <option value="Bangazi">Bangazi</option>
                    @elseif ($pharmacy->city == 'Musrata')
                        <option value="Tripoli">Tripoli</option>
                        <option value="Musrata" selected>Musrata</option>
                        <option value="Bangazi">Bangazi</option>
                    @elseif ($pharmacy->city == 'Bangazi')
                        <option value="Tripoli">Tripoli</option>
                        <option value="Musrata">Musrata</option>
                        <option value="Bangazi" selected>Bangazi</option>
                    @endif

                </select>
            </div>
            <div>
                <label for="domain">Domain</label>
                <input id="domain" name="domain" value="{{ $pharmacy->domain }}" type="text"
                    placeholder="Enter The Domain">
            </div>
            <div>
                <label for="loc_lat">Location Lattude</label>
                <input id="loc_lat" name="loc_lat" value="{{ $pharmacy->location_lattude }}" type="text"
                    placeholder="Enter The Location Lattude">
            </div>
            <div>
                <label for="loc_long">Location Longtude</label>
                <input id="loc_long" name="loc_long" value="{{ $pharmacy->location_longtude }}" type="text"
                    placeholder="Enter The Location Lattude">
            </div>
            <div>
                <label for="notes">Notes</label>
                <textarea id="notes" name="notes" cols="30" rows="5" placeholder="Enter Your Notes Here .. !">
                    {{ $pharmacy->notes }}
                </textarea>
            </div>
            <div class="fileInput">
                <label for="pic">Pharmacy Logo</label>
                <input id="pic" name="pharma_logo" type="file">
            </div>
            <div class="save_button">
                <div>
                    <button type="submit">save</button>
                    <button type="reset">Cancel</button>
                </div>
            </div>

        </form>

    @endsection
</x-app-layout>
