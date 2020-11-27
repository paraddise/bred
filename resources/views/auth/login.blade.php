@extends('auth.auth')
@section('title', 'Sign In')
@section('head')

@endsection
@section('content')
    <div class="signup-form w-75">
        <form action="{{route('login')}}" method="post">
            @csrf
            <h2>Sign in</h2>
            <hr>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
            </div>

        </form>
        <div class="hint-text"> Don't have an account yet? <a href="{{route('signup')}}">Signup here</a></div>
    </div>
@endsection

