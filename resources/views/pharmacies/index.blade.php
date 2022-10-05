<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @section('title', 'Users')

    @extends('layout')

    @section('Title') Pharmacies @endsection

    @section('page')



        <div class="table-title">
            <input class="search-input" type="search" id="">
            <a href="{{ route('pharmacies.create') }}" class="add-user">New</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Pharmacy name </th>
                        <th scope="col">Manager name</th>
                        {{-- <th scope="col">Phone</th> --}}
                        <th scope="col">email</th>
                        <th scope="col">Password</th>
                        {{-- <th scope="col">domain</th> --}}
                        {{-- <th scope="col">City</th> --}}
                        {{-- <th scope="col">Notes</th> --}}
                        <th scope="col">Logo</th>
                        {{-- <th scope="col">location_lattude</th> --}}
                        {{-- <th scope="col">location_longtude</th> --}}
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($pharmacies) > 0)
            
                        @foreach ($pharmacies as $pharmacy)
                            <tr>
                                <th scope="row">{{ $pharmacy->id }}</th>
                                <td>{{ $pharmacy->pharmacy_name }}</td>
                                <td>{{ $pharmacy->manager_name }}</td>
                                {{-- <td>{{ $pharmacy->phone }}</td> --}}
                                <td>{{ $pharmacy->email }}</td>
                                <td>{{ $pharmacy->password }}</td>
                                {{-- <td>{{ $pharmacy->domain }}</td> --}}
                                {{-- <td>{{ $pharmacy->city }}</td> --}}
                                {{-- <td>{{ $pharmacy->notes }}</td> --}}
                                <td><img src="{{ url("images/pharmacies/$pharmacy->logo") }}" width="20px" height="20px">
                                </td>
                                {{-- <td>{{ $pharmacy->location_lattude }}</td> --}}
                                {{-- <td>{{ $pharmacy->location_longtude }}</td> --}}




                                <td class="action">
                                    <a href="{{ route('pharmacies.show', $pharmacy->id) }}" class="btn">
                                        <i class='bx bx-show'></i>
                                    </a>
                                    <a href="{{ route('pharmacies.edit', $pharmacy->id) }}" class="btn">
                                        <i class='bx bx-edit'></i>
                                    </a>

                                    <form action="{{ route('pharmacies.destroy', $pharmacy->id) }}" class="formBtn"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn" type="submit"><i class='bx bx-x-circle'></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="7">There are no Pharmacy to display</td>
                    @endif
                </tbody>
            </table>
        </div>




    @endsection

</x-app-layout>
