@extends('layouts.app')

@section('title', 'Budget - Login')

@section('content')
    <div class="row d-flex justify-content-center align-items-center" style="height: 100%;">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title text-center">Login</h2>
                </header>
                <form action="{{ route('login.attempt') }}" method="post" class="card-body">
                    @csrf

                    <section class="row">
                        <label for="email" class="col-sm-3 mt-1 form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" autocomplete="true" />
                        </div>
                    </section>

                    <section class="row mt-4">
                        <label for="password" class="col-sm-3 mt-1 form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" id="password" name="password" class="form-control" />
                        </div>
                    </section>

                    <section class="row mt-4">
                        <div class="form-check">
                            <input type="checkbox" id="remember" name="remember" class="form-check-control" />
                            <label class="form-check-label" for="remember">
                                Remember Me?
                            </label>
                        </div>
                    </section>

                    <section class="row mt-4 mb-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </section>

                    <section class="d-flex justify-content-between">
                        <a href="{{route('register') }}" class="">Register</a>
                        <a href="{{route('register') }}" class="">Forgotten Password</a>
                    </section>


                </form>
            </section>
        </div>
    </div>
@endsection
