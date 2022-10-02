@section('title', 'Users - Add')

@extends('layout')

@section('Title') Add Users @endsection

@section('page')

    <form action="{{ route('users.store') }}" method="post" class="form-create">
        @csrf

        <div>
            <label for="fname">Full name</label>
            <input id="fname" name="user_fullname" value="{{ old('user_fullname') }}" type="text"
                placeholder="Enter Full-Name">
            @error('user_fullname')
                <span class="error">please Enter The Name of User</span>
            @enderror
        </div>
        <div>
            <label for="uname">UserName</label>
            <input id="uname" name="user_username" value="{{ old('user_username') }}" type="text"
                placeholder="Enter Username">
            @error('user_username')
                <span class="error">please Enter The UserName</span>
            @enderror
        </div>
        <div>
            <label for="per">Permission</label>
            <select id="per" name="user_per" value="{{ old('user_per') }}">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="email">
            <label for="email">Email</label>
            <input id="email" name="user_email" value="{{ old('user_email') }}" type="email"
                placeholder="Enter The Email">
        </div>
        <div>
            <label for="phone">Phone Number</label>
            <input id="phone" name="phoneN" value="{{ old('phoneN') }}" type="text"
                placeholder="Enter The Phone Number">
        </div>
        <div>
            <label for="pass">Password</label>
            <input id="pass" name="user_pass" value="{{ old('user_pass') }}" type="password"
                placeholder="Enter The Password">
            @error('user_pass')
                <span class="error">please Enter The Password</span>
            @enderror
        </div>
        <div>
            <label for="passcheck">Confirm Password</label>
            <input id="passcheck" name="user_pass_check" value="{{ old('user_pass_check') }}" type="password"
                placeholder="Please Confirm Password">
            @error('user_pass_check')
                <span class="error">please Re-Enter The Password</span>
            @enderror
        </div>
        <div class="fileInput">
            <label for="pic">Picture</label>
            <input id="pic" name="user_pic" value="{{ old('user_pic') }}" type="file">
        </div>
        <div class="save_button">
            <div>
                <button type="submit">save</button>
                <button type="reset">Cancel</button>
            </div>
        </div>

    </form>

@endsection
