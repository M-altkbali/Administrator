<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    @section('title', 'Pharmacies - Add')

    @extends('layout')

    @section('Title') Add Pharmacy @endsection

    @section('page')

        <form action="{{ route('pharmacies.store') }}" method="post" class="form-create" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="phar_name">Pharmacy Name</label>
                <input id="phar_name" name="pharma_name" value="{{ old('pharma_name') }}" type="text"
                    placeholder="Enter Pharmacy Name">
                @error('pharma_name')
                    <span class="error">please Enter Name of Pharmacy</span>
                @enderror
            </div>
            <div>
                <label for="mang_name">Manager Name</label>
                <input id="mang_name" name="Manager_name" value="{{ old('Manager_name') }}" type="text"
                    placeholder="Enter Manager Name">
                @error('Manager_name')
                    <span class="error">please Enter Manager Name</span>
                @enderror
            </div>
            <div>
                <label for="phone">Phone</label>
                <input id="phone" name="phone" value="{{ old('phone') }}">
                @error('phone')
                    <span class="error">please Enter Phone Number</span>
                @enderror
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input id="email" name="pharma_email" value="{{ old('pharma_email') }}" type="email"
                    placeholder="Enter The Email">
                @error('pharma_email')
                    <span class="error">please Enter The Email</span>
                @enderror
            </div>
            <div class="">
                <label for="pass">Password</label>
                <input id="pass" name="password" value="{{ old('password') }}" type="password"
                    placeholder="Enter The password">
                @error('pharma_email')
                    <span class="error">please Enter The password</span>
                @enderror
            </div>
            <div>
                <label for="city">City</label>
                <select id="city" name="city" value="{{ old('city') }}">
                    <option value="Tripoli">Tripoli</option>
                    <option value="Musrata">Musrata</option>
                    <option value="Bangazi">Bangazi</option>
                </select>
            </div>
            <div>
                <label for="domain">Domain</label>
                <input id="domain" name="domain" value="{{ old('domain') }}" type="text"
                    placeholder="Enter The Domain">
            </div>
            <div>
                <label for="loc_lat">Location Lattude</label>
                <input id="loc_lat" name="loc_lat" value="{{ old('loc_lat') }}" type="text"
                    placeholder="Enter The Location Lattude">
            </div>
            <div>
                <label for="loc_long">Location Longtude</label>
                <input id="loc_long" name="loc_long" value="{{ old('loc_long') }}" type="text"
                    placeholder="Enter The Location Lattude">
            </div>
            <div>
                <label for="notes">Location Longtude</label>
                <textarea id="notes" name="notes" value="{{ old('notes') }}" cols="30" rows="10"
                    placeholder="Enter Your Notes Here .. !">
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
