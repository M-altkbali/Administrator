<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    @section('title', 'Brands - Update')

    @extends('layout')

    @section('Title') Update Brand @endsection

    @section('page')



        <form action="{{ route('brands.update', ['brand' => $brand->id]) }}" method="post" class="form-create"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="brand_name">Brand Name</label>
                <input id="brand_name" name="brand_name" value="{{ $brand->brand_name }}" type="text"
                    placeholder="Enter Brand Name">
                @error('brand_name')
                    <span class="error">please Enter Name of Brand</span>
                @enderror
            </div>
            <div>
                <label for="notes">Notes</label>
                <textarea id="notes" name="notes" cols="30" rows="5" placeholder="Enter Your Notes Here .. !">
                    {{ $brand->notes }}
                </textarea>
            </div>
            <div class="fileInput">
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
