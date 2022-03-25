@extends('user.layouts.app')

@section('content')
    <div class="container container-content">
        <div class="row">
            <div class="col">
                <div class="content-image">
                    <img class="rounded-circle profile-image" src="{{ asset('storage/'. Auth::user()->avatar) }}" alt="">
                </div>

            </div>
            <div class="col-7">
                <h5 class="username-profile">{{ Auth::user()->username }}</h5>
                <p class="email">{{ Auth::user()->email }}</p>
                <nav class="nav">
                    <p class="nav-link">1 Post</p>
                    <p class="nav-link">1 Follower</p>
                    <p class="nav-link">1 Following</p>
                </nav>

            </div>
            <div class="col">
                <a href="{{ route('user.profile.edit',Auth::user()->id) }}" class="btn btn-primary">Edit</a>
            </div>
            <div class="profile-info">
                <h6>{{ Auth::user()->fullname }}</h6>
                <p>{{ Auth::user()->bio }}</p>
            </div>
        </div>
    </div>
@endsection
