@extends('layouts.app')

@section('content')
<div class="profile">
    {{-- Profile Info --}}
    <div class="row">
        <div class="col-3">
            <img class="w-100 profile__image" src="{{ $user->profile->profileImage()  }}" alt="{{ $user->username }}">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1> {{ $user->username }} </h1>
                @can('update', $user->profile)
                    <a class="btn btn-primary" href="{{ route('post.create') }}">
                        Add New Post
                    </a>
                @endcan
            
            </div>

            @can('update', $user->profile)
                <a class="my-2" href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
            @endcan

            {{-- Info --}}
            <div class="d-flex">
                <div class="pr-3">
                    <b>{{ $user->posts->count() }}</b>
                    posts
                </div>
                <div class="pr-3">
                    <b>59.9k</b>
                    followers
                </div>
                <div class="pr-3">
                    <b>287</b> following
                </div>
            </div>

            <p class="mt-4">
             
                {{-- Name --}}
                <h6>
                    <b>
                        {{ $user->profile->title }}
                    </b>
                </h6>
                
                {{-- Description --}}
                {{ $user->profile->description }}
                <br>
                {{-- Web Url --}}
                <a href="{{ $user->profile->url }}" target="_blank">
                    {{ $user->profile->url }}
                </a>
            </p>

        </div>
    </div>
    {{-- End Profile Info --}}

    {{-- <div class="row">
        <div class="col-4">
            <button class="btn btn-link text-uppercase text-dark">
                Posts
            </button>
        </div>
        <div class="col-4">
            <button class="btn btn-link text-uppercase text-dark">
                Tags
            </button>
        </div>
    </div> --}}

    {{-- Photos --}}
    <div class="row mt-5">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{$post->image}}" alt="{{ $post->caption }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
