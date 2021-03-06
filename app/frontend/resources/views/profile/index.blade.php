@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="text-center" style="margin-bottom: 20px">
                <img src="{{ asset('images/default.png') }}" alt="" style="max-height: 150px; max-width: 150px" class="img-thumbnail circle">
            </div>
            
            <div class="list-group">
                    <a href="{{ route('profile') }}" class="list-group-item list-group-item-action active">
                        <i class="fal fa-fw fa-user"></i>
                        {{ __('Profile') }}
                    </a>
                    <a href="{{ route('wishlist') }}" class="list-group-item list-group-item-action">
                        <i class="fal fa-fw fa-star"></i>
                        {{ __('Wishlist') }}
                    </a>
                    <a href="{{ route('closet') }}" class="list-group-item list-group-item-action">
                        <i class="fal fa-fw fa-tags"></i>
                        {{ __('Closet') }}
                    </a>
            </div>
        </div>
        <div class="col-md-8">
            <form id="nav-profile" method="POST" action="{{ route('profile') }}">
                @csrf
                <div class="form-group">
                    <label for="profile-name">{{ __('Name') }}</label>
                    <input type="text" class="form-control" id="profile-name" placeholder="Enter a name" value="{{ old('name') ?? $user->name }}" name="name">
                </div>
                <div class="form-group">
                    <label for="profile-username">{{ __('Username') }}</label>
                    <input type="text" readonly class="form-control-plaintext text-muted text-monospace" value="{{ $user->username }}">
                    <small class="form-text text-muted">
                        To change your username,
                        <a class="text-info" href="#" data-toggle="tooltip" title="Changing username is not currently supported, sorry!">click here</a>
                    </small>
                </div>
                <div class="form-group">
                    <label for="profile-email">{{ __('Email Address') }}</label>
                    <input type="email" class="form-control" id="profile-email" aria-describedby="emailHelp" placeholder="Enter an email" value="{{ old('email') ?? $user->email }}" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="profile-password">{{ __('Password') }}</label>
                    <input type="password" class="form-control" id="profile-password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label for="profile-password-confirm">{{ __('Password Confirmation') }}</label>
                    <input type="password" class="form-control" id="profile-password-confirm" placeholder="Password" name="password_confirmation">
                    <small class="form-text text-muted">Leave this blank if you don't want to change your password.</small>
                </div>

                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </form>


        </div>
    </div>
</div>
@endsection
