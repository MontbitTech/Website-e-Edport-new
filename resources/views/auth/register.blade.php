@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registeruser') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                       <!--  <div class="form-group row">
                            <div class="col-md-6 offset-md-4 mr-0 pr-0">
                                <input type="radio" class="ml-1" name="role" value="admin" required checked>
                                <label for="role" class="ml-2 text-md-left">{{ __('Product') }}</label>
                                <input type="radio" class="ml-1" name="role" value="user">
                                <label for="role" class="ml-2 text-md-left">{{ __('Service') }}</label>
                            </div>

                        </div> -->

                        <div class="form-group row">
                            <label for="demo" class="col-md-4 col-form-label text-md-right">{{ __('Demo Request') }}</label>

                            <div class="col-md-6">

                                <select class="form-control" name="role" id="role" required>
                                <option value="" selected>Select</option>
                                <option value="e-EdPort Virtual classroom solution">e-EdPort Virtual classroom solution</option>
                                <option value="e-EdPort Student Self Learning Solution">e-EdPort Student Self Learning Solution</option>
                                <option value="e-EdPort Parental Control App">e-EdPort Parental Control App</option>
                                <option value="e-EdPort Smart Teacher Training">e-EdPort Smart Teacher Training</option>
                                <option value="e-EdPort Smart Teacher Certification">e-EdPort Smart Teacher Certification</option>
                                <option value="e-EdPort Student Career Counseling">e-EdPort Student Career Counseling</option>
                                </select>

                                @error('demo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="header-btn rounded-buttons m-auto">
                                <button type="submit" class="main-btn rounded-three pl-5 pr-5 ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection