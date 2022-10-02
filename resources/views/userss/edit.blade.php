@section('title', 'Users - Edit')

@extends('layout')

@section('Title') Edit Users @endsection

@section('page')

    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post" class="form-create">
        @csrf
        @method('PUT')
        <div>
            <label for="fname">Full name</label>
            <input id="fname" name="user_fullname" value="{{ $user->name }}" type="text">
            @error('user_fullname')
                <span class="error">please Enter The Name of User</span>
            @enderror
        </div>
        <div>
            <label for="uname">UserName</label>
            <input id="uname" name="user_username" value="{{ $user->username }}" type="text">
            @error('user_username')
                <span class="error">please Enter The UserName</span>
            @enderror
        </div>
        <div>
            <label for="per">Permission</label>
            <select id="per" name="user_per" value="{{ $user->permission }}">
                @if ($user->permission == 'admin')
                    <option value="admin" selected>Admin</option>
                    <option value="user">User</option>
                @else
                    <option value="admin">Admin</option>
                    <option value="user" selected>User</option>
                @endif

            </select>
        </div>
        <div class="email">
            <label for="email">Email</label>
            <input id="email" name="user_email" value="{{ $user->email }}" type="email">
        </div>
        <div>
            <label for="phone">Email</label>
            <input id="phone" name="phoneN" value="" type="text">
        </div>
        <div>
            <label for="pass">Password</label>
            <input id="pass" name="user_pass" value="{{ $user->password }}" type="password">
            @error('user_pass')
                <span class="error">please Enter The Password</span>
            @enderror
        </div>
        <div>
            <label for="passcheck">Confirm Password</label>
            <input id="passcheck" name="user_pass_check" value="" type="password">
            @error('user_pass_check')
                <span class="error">please Re-Enter The Password</span>
            @enderror
        </div>


        <div class="fileInput">
            <label for="pic">Picture</label>
            <input id="pic" name="user_pic" value="{{ $user->pic }}" type="file">
        </div>
        <div class="save_button">
            <div>
                <button type="submit">Update</button>
                <button type="button">Cancel</button>
            </div>
        </div>


    </form>

@endsection
