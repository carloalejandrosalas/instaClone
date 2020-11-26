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
                <div class="d-flex align-items-center pb-3">
                    <h3 class=""> {{ $user->username }} </h4>
                    <follow-button :user-id="{{ $user->id }}" :follows="{{ intval($follows) }}" ></follow-button>
                </div>

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
                    <b>{{ $user->profile->followers->count() }}</b>
                    followers
                </div>
                <div class="pr-3">
                    <b>{{ $user->following->count() }}</b> following
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
