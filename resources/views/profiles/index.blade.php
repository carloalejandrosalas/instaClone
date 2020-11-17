@extends('layouts.app')

@section('content')
<div class="profile">
    {{-- Profile Info --}}
    <div class="row">
        <div class="col-3">
            <img class="profile__image" src="https://instagram.fhmo2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fhmo2-1.fna.fbcdn.net&_nc_ohc=4HZOAeZMrlwAX8_311F&_nc_tp=25&oh=5fc70abe625f811c77e561ccf83983d3&oe=5FD924E7" alt="Free Code Camp Logo">
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-6">
                    <h1> {{ $user->username }} </h1>
                </div>
                <div class="col-1">
                    <button class="btn btn-primary">
                        Follow
                    </button>
                </div>
            </div>

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
                <a href="https://{{ $user->profile->url }}" target="_blank">
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
    <div class="row">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <img class="w-100" src="/storage/{{$post->image}}" alt="{{ $post->caption }}">
            </div>
        @endforeach
    </div>
</div>
@endsection
