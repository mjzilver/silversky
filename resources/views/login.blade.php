@extends('layouts.backend')

    @section('content')
        <div id="login">
            <h3 class="text-center text-dark pt-5">Login form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div class="col-md-12 border bg-light text-dark">
                            <form id="login-form" class="form" action="{{url('login')}}" method="post">
                                @csrf
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <label for="email" class="text-info">email:</label><br>
                                    <input type="text" name="email" id="email" class="form-control @error('email', 'login') is-invalid @enderror">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="remember-me" class="text-info">
                                        <span>Remember me</span> 
                                        <span><input id="remember-me" name="remember-me" type="checkbox" class="form"></span>
                                    </label>
                                    <br>
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection