@extends('auth.auth')
@section('title', 'Sign Up')
@section('head')

    @endsection
@section('content')
    <div class="signup-form">
        <form action="{{route('signup')}}" method="post">
            @csrf
            <h2>Sign Up</h2>
            <p>Please fill in this form to create an account!</p>
            <hr>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{--<div class="form-group">
        <div class="row">
            <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required></div>
            <div class="col"><input name type="text" class="form-control" name="last_name" placeholder="Last Name" required></div>
        </div>
    </div>--}}
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <label class="form-check-label"><input type="checkbox" required> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
            </div>

        </form>
        <div class="hint-text">Already have an account? <a href="{{route('login')}}">Login here</a></div>
    </div>


@endsection
