<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    @section('title', 'Brands - Add')

    @extends('layout')

    @section('Title') Add Brand @endsection

    @section('page')

        <form action="{{ route('brands.store') }}" method="post" class="form-create" enctype="multipart/form-data">
            @csrf

            <div class="w-full">
                <label for="brand_name">Brand Name</label>
                <input id="brand_name" name="brand_name" value="{{ old('brand_name') }}" type="text"
                    placeholder="Enter Brand Name">
                @error('brand_name')
                    <span class="error">please Enter Name of Brand</span>
                @enderror
            </div>
            <div class="w-full">
                <label for="notes">Notes</label>
                <textarea  class="w-full" id="notes" name="notes" value="{{ old('notes') }}" cols="30" rows="5"
                    placeholder="Enter Your Notes Here .. !">
                </textarea>
            </div>
            <div class="fileInput w-full">
                <label for="pic">Brand Logo</label>
                <input id="pic" name="brand_logo" type="file">
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
