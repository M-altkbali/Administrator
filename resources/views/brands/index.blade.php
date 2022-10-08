<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('title', 'Brands')

    @extends('layout')

    @section('Title') Brands @endsection

    @section('page')



        <div class="table-title">
            <input class="search-input" type="search" id="">
            <a href="{{ route('brands.create') }}" class="add-user">New</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Brand Name </th>

                        <th scope="col">Notes</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($brands) > 0)

                        @foreach ($brands as $brand)
                            <tr>
                                <th scope="row">{{ $brand->id }}</th>
                                <td>{{ $brand->brand_name }}</td>

                                <td>{{ $brand->notes }}</td>
                                <td>
                                    <div><img src="{{ url("images/brands/$brand->logo") }}" width="50px" height="50px">
                                    </div>
                                </td>
                                <td class="action">
                                    <div>
                                        <a href="{{ route('brands.show', $brand->id) }}" class="btn">
                                            <i class='bx bx-show'></i>
                                        </a>
                                        <a href="{{ route('brands.edit', $brand->id) }}" class="btn">
                                            <i class='bx bx-edit'></i>
                                        </a>

                                        <form action="{{ route('brands.destroy', $brand->id) }}" class="formBtn"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn" type="submit"><i class='bx bx-x-circle'></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="7">There are no Brands to display</td>
                    @endif
                </tbody>
            </table>
        </div>




    @endsection

</x-app-layout>
