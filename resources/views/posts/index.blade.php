@extends('layouts.app')

@section('content')

@foreach ($posts as $post)
    <div>
        <div class="row">
            <div class="col-6 offset-3">
                <a href="{{ route('profile.show', $post->user->id) }}">
                    <img class="w-100" src="/storage/{{ $post->image }}" alt="">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div class="mt-3">
                    {{-- <img class="w-200" src="" alt="{{ $post->user->username }}"> --}}
                    <div class="d-flex justify-content-start align-items-baseline align-items-start">
                        <a href="{{ route('profile.show', $post->user->id) }}" class="font-weight-bolder">
                            {{ $post->user->username }}
                        </a>
                    </div>
                    
                </div>
                <p>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
@endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

@endsection