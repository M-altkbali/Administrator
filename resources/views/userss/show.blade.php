@section('title', 'Users-Show')

@extends('layout')

@section('Title') Show User @endsection

@section('page')

    <section class="show">
        <div class="info">
            <div>
                <label>Full Name</label>
                <span>{{ $user['name'] }}</span>
            </div>
            <div>
                <label>UserName</label>
                <span>{{ $user['username'] }}</span>
            </div>
            <div>
                <label>Email</label>
                <span>{{ $user['email'] }}</span>
            </div>
            <div>
                <label>Phone Number</label>
                <span>000-0000000</span>
            </div>
            <div>
                <label>Password</label>
                <span>{{ $user['password'] }}</span>
            </div>
            <div>
                <label>Permission</label>
                <span>{{ $user['permission'] }}</span>
            </div>
        </div>
        <div class="pic">
            <div class="img"><img src="{{ url('img/user.png') }}" alt="" srcset=""></div>
        </div>
    </section>

@endsection
