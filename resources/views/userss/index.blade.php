@section('title', 'Users')

@extends('layout')

@section('Title') Users @endsection

@section('page')

    <div class="table-title">
        <input class="search-input" type="search" name="" id="">
        <a href="{{ route('users.create') }}" class="add-user">New</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">FullName </th>
                    <th scope="col">UserName</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">Permission</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (count($users) > 0)
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user['id'] }}</th>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['username'] }}</td>
                            <td>{{ $user['password'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['permission'] }}</td>

                            <td class="action">
                                <a href="{{ route('users.show', ['user' => $user['id']]) }}" class="btn">
                                    <i class='bx bx-show'></i>
                                </a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn">
                                    <i class='bx bx-edit'></i>
                                </a>

                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn" type="submit"><i class='bx bx-x-circle'></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <td colspan="7">There are no Users to display</td>
                @endif
            </tbody>
        </table>
    </div>

@endsection
