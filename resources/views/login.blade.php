@extends('layouts.login_layout')

@section('content')

<section class="container">
    <div class="row mt-5">
        <div class="col-sm-4 offset-sm-4">

            {{-- validation errors--}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- login errors--}}

            @if(isset($error))
                <p class="text-danger">{{$error}}</p>
            @endif

            {{-- form--}}
            <form action="{{route('login_submit')}}" method="post">

                {{-- csrf--}}
                @csrf

                <h4>Login</h4>
                <hr>
                <div class="form-group">
                    <label for="text-user">Email:</label>
                    <input type="email" name="text-user" id="text-user" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="text-password">Password:</label>
                    <input type="password" name="text-password" id="text-password" class="form-control">
                </div>

                <div class="form-group">
                    <input type="submit" value="Sing in" class="btn btn-primary mt-3 ">
                </div>

            </form>
            {{-- /form--}}
        </div>
    </div>
</section>

@endsection
