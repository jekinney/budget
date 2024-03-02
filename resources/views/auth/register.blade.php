@extends('layouts.app')

@section('title', 'Budget - Register')

@section('content')
    <div class="row d-flex justify-content-center align-items-center" style="height: 100%;">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <section class="card">

                <header class="card-header">
                    <h2 class="card-title text-center">Register</h2>
                </header>

                <form action="{{ route('register.store') }}" method="post" class="card-body">
                    @csrf

                    <section class="row">
                        <label for="email" class="col-sm-3 mt-1 form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
                        </div>
                    </section>

                    <section class="row mt-4">
                        <label for="username" class="col-sm-3 mt-1 form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="username" name="username" value="{{ old('email') }}" class="form-control" />
                        </div>
                    </section>

                    <section class="row mt-4">
                        <label for="password" class="col-sm-3 mt-1 form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" />
                        </div>
                    </section>

                    <section class="row mt-4">
                        <label for="password_confirmation" class="col-sm-3 mt-1 form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="password_confirmation" class="form-control" />
                        </div>
                    </section>

                    <section class="row mt-4 text-center">
                        <div class="form-check">
                            <input type="checkbox" id="accept" name="accept" class="form-check-control" />
                            <label class="form-check-label" for="accept">
                                I have read the terms and conditions and accept.
                            </label>
                        </div>
                    </section>

                    <section class="row mt-4 mb-4">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </section>

                </form>

            </section>
        </div>
    </div>
@endsection

